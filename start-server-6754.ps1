$ErrorActionPreference = 'Stop'
Set-Location 'C:\laragon\www\graduationproj'
& 'C:\laragon\bin\php\php-8.2.0\php.exe' artisan serve --host=127.0.0.1 --port=8001
