Write-Host "Checking public directory contents:" -ForegroundColor Yellow
Get-ChildItem -Path "public" -File

Write-Host "`nChecking HTML files:" -ForegroundColor Yellow
Get-ChildItem -Path "public\*.html" -File

Write-Host "`nChecking build directory:" -ForegroundColor Yellow
Get-ChildItem -Path "public\build" -Recurse -File

Write-Host "`nChecking images directory:" -ForegroundColor Yellow
Get-ChildItem -Path "public\images" -Recurse -File 