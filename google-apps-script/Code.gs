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
      "response_action",
      "honest_data",
      "cares_interests",
      "deceptive_banner",
      "professional_design",
      "accurate_information",
      "reliable_source",
      "reason",
      "consent_at"
    ];

    if (sheet.getLastRow() === 0) {
      sheet.appendRow(headers);
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
