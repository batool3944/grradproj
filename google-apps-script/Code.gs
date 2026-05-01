function doPost(e) {
  try {
    var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();

    var data = {};

    if (e.postData && e.postData.contents) {
      try {
        data = JSON.parse(e.postData.contents);
      } catch (jsonError) {
        data = e.parameter || {};
      }
    } else {
      data = e.parameter || {};
    }

    var headers = [
      "submitted_at",
      "language",
      "design_id",
      "design_name",
      "age_range",
      "gender",
      "field_of_study",
      "cookie_banner_interaction",
      "cookie_functionality_awareness",
      "cookie_benefits_awareness",
      "cookie_privacy_awareness",
      "avoided_website_for_cookies",
      "response_action",
      "honest_data",
      "deceptive_banner",
      "professional_design",
      "reliable_source",
      "reason",
      "consent_at"
    ];

    if (sheet.getLastRow() === 0) {
      sheet.appendRow(headers);
    } else {
      var existingHeaders = sheet
        .getRange(1, 1, 1, Math.max(sheet.getLastColumn(), 1))
        .getValues()[0]
        .map(function(header) {
          return String(header || "").trim();
        });

      var missingHeaders = headers.filter(function(header) {
        return existingHeaders.indexOf(header) === -1;
      });

      if (missingHeaders.length > 0) {
        var startColumn = existingHeaders.filter(String).length + 1;
        sheet
          .getRange(1, startColumn, 1, missingHeaders.length)
          .setValues([missingHeaders]);

        existingHeaders = existingHeaders
          .filter(String)
          .concat(missingHeaders);
      }

      headers = existingHeaders.filter(String);
    }

    var row = headers.map(function(header) {
      return data[header] || "";
    });

    sheet.appendRow(row);

    return ContentService
      .createTextOutput(JSON.stringify({
        success: true,
        message: "Saved successfully"
      }))
      .setMimeType(ContentService.MimeType.JSON);
  } catch (error) {
    return ContentService
      .createTextOutput(JSON.stringify({
        success: false,
        message: error.message
      }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}
