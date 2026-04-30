# Railway Notes

## Recommended start command

Railway should run:

```bash
php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
```

This is already included in the repository `Procfile`.

## Recommended environment variables

Set these in Railway if they are not already present:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=${{RAILWAY_PUBLIC_DOMAIN}}
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

## Why this matters

The earlier app config used database-backed sessions, cache, and queues by default.
That can make Railway boot fail before the app is even reachable if the database or
tables are not ready yet.

Using `file` / `sync` as the startup-safe defaults lets the application respond first.
