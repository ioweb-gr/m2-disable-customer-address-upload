@echo off
setlocal

set "MODULE_DIR=%~dp0"
if "%MODULE_DIR:~-1%"=="\" set "MODULE_DIR=%MODULE_DIR:~0,-1%"
set "MAP_ROOT=%~dp0..\m2_disablecustomeraddressupload-map\app\code\Ioweb"
set "LINK_PATH=%MAP_ROOT%\DisableCustomerAddressUpload"

if not exist "%MAP_ROOT%" mkdir "%MAP_ROOT%"

if exist "%LINK_PATH%" (
  rmdir "%LINK_PATH%"
)

mklink /J "%LINK_PATH%" "%MODULE_DIR%"

echo.
echo Junction created:
echo   %LINK_PATH% ^> %MODULE_DIR%
echo.
echo You can now map:
echo   Local:  m2_disablecustomeraddressupload-map\app
echo   Remote: app
