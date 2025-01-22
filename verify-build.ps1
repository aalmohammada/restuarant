# Check if public_html directory exists
if (!(Test-Path "public_html")) {
    Write-Host "public_html directory does not exist!" -ForegroundColor Red
    exit 1
}

# Check for index.html
if (!(Test-Path "public_html/index.html")) {
    Write-Host "index.html not found in public_html!" -ForegroundColor Red
    exit 1
}

# Check for other HTML files
$requiredFiles = @(
    "public_html/index.html",
    "public_html/menu/index.html",
    "public_html/contact/index.html",
    "public_html/book-table/index.html"
)

foreach ($file in $requiredFiles) {
    if (Test-Path $file) {
        Write-Host "$file exists" -ForegroundColor Green
    } else {
        Write-Host "$file is missing!" -ForegroundColor Red
    }
}

# Check for assets
if (!(Test-Path "public_html/build")) {
    Write-Host "build directory is missing!" -ForegroundColor Red
}

if (!(Test-Path "public_html/images")) {
    Write-Host "images directory is missing!" -ForegroundColor Red
}

Write-Host "`nDirectory contents:" -ForegroundColor Yellow
Get-ChildItem -Path "public_html" -Recurse 