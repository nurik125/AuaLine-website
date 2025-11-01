# Recursively find all empty directories and create a .gitkeep file in each

Get-ChildItem -Recurse -Directory | ForEach-Object {
    if (-not (Get-ChildItem -Path $_.FullName)) {
        $gitkeep = Join-Path $_.FullName ".gitkeep"
        New-Item -Path $gitkeep -ItemType File -Force | Out-Null
        Write-Host "Added .gitkeep in $($_.FullName)"
    }
}

Write-Host "✅ All empty folders now contain .gitkeep files."
