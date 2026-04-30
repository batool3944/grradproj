# Experiment Setup

## 1. Add the 6 design image pairs

Put the experiment banner screenshots in `public/study-images/` using this exact naming:

- `experiment-design-1-en.jpg`
- `experiment-design-1-ar.jpg`
- `experiment-design-2-en.jpg`
- `experiment-design-2-ar.jpg`
- `experiment-design-3-en.jpg`
- `experiment-design-3-ar.jpg`
- `experiment-design-4-en.jpg`
- `experiment-design-4-ar.jpg`
- `experiment-design-5-en.jpg`
- `experiment-design-5-ar.jpg`
- `experiment-design-6-en.jpg`
- `experiment-design-6-ar.jpg`

The app only rotates through designs that have **both** English and Arabic images present.

Example:

- The first Uteach pair should be saved as `experiment-design-1-en.jpg` and `experiment-design-1-ar.jpg`
- The second Uteach pair should be saved as `experiment-design-2-en.jpg` and `experiment-design-2-ar.jpg`

Once both files for `design-2` are added, participants will automatically rotate between design 1 and design 2.
When all 6 pairs are added, the loop will run `1 -> 2 -> 3 -> 4 -> 5 -> 6 -> 1` and continue repeating.

The illustration/definition images are separate and stay as:

- `cookie-banner-en.jpg`
- `cookie-banner-ar.jpg`

## 2. Configure Google Apps Script

Use the code in `google-apps-script/Code.gs`.

Then:

1. Open your Google Sheet.
2. Open `Extensions > Apps Script`.
3. Replace the script contents with `Code.gs`.
4. Deploy it as a web app.
5. Make sure the deployment allows access from the app.
6. Copy the deployed URL.

## 3. Set the URL in Laravel

Add this to `.env`:

```env
GOOGLE_SCRIPT_URL=https://script.google.com/macros/s/YOUR_DEPLOYMENT_ID/exec
```

## 4. Run the app

```powershell
php artisan serve --host=127.0.0.1 --port=8000
```

Then open:

- `http://127.0.0.1:8000/?lang=en`
- `http://127.0.0.1:8000/?lang=ar`

## 5. Fallback behavior

If Google Sheets submission fails, the app still saves a backup locally to:

`storage/app/experiment-submissions.jsonl`
