# Clean up previous build artifacts
Remove-Item -Path "public_html" -Recurse -Force -ErrorAction SilentlyContinue

# Create directory structure
New-Item -ItemType Directory -Path "public_html" -Force
New-Item -ItemType Directory -Path "public_html/menu" -Force
New-Item -ItemType Directory -Path "public_html/contact" -Force
New-Item -ItemType Directory -Path "public_html/book-table" -Force
New-Item -ItemType Directory -Path "public_html/images" -Force
New-Item -ItemType Directory -Path "public_html/build" -Force

# Set proper permissions for Laravel directories (using icacls instead)
try {
    icacls "storage" /grant "Users:(OI)(CI)F" /T
    icacls "bootstrap/cache" /grant "Users:(OI)(CI)F" /T
    Write-Host "Permissions set successfully" -ForegroundColor Green
} catch {
    Write-Host "Warning: Could not set permissions, but continuing build..." -ForegroundColor Yellow
}

# Install dependencies
composer install --optimize-autoloader --no-dev --no-scripts
php artisan clear-compiled
php artisan optimize

# Build assets
npm install
npm run build

# Clear Laravel caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Generate static files
php artisan view:cache

# Create a PHP script to generate the static files
@'
<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle($request = Illuminate\Http\Request::capture());

function generatePage($view, $path) {
    try {
        $content = view($view)->render();
        file_put_contents($path, $content);
        echo "Generated $path successfully\n";
    } catch (Exception $e) {
        echo "Error generating $path: " . $e->getMessage() . "\n";
    }
}

// Generate pages
generatePage('home', 'public_html/index.html');
generatePage('menu', 'public_html/menu/index.html');
generatePage('contact', 'public_html/contact/index.html');
generatePage('book-table', 'public_html/book-table/index.html');
'@ | Out-File -FilePath "generate-static.php" -Encoding UTF8

# Run the PHP script
php generate-static.php

# Clean up PHP script
Remove-Item -Path "generate-static.php" -Force

# Copy assets
Copy-Item -Path "public/build/*" -Destination "public_html/build/" -Recurse -Force
Copy-Item -Path "public/images/*" -Destination "public_html/images/" -Recurse -Force

# Verify the structure
Write-Host "`nVerifying deployment files:" -ForegroundColor Yellow
Get-ChildItem -Path "public_html" -Recurse | ForEach-Object {
    Write-Host $_.FullName
}

Write-Host "`nBuild completed!" -ForegroundColor Green 