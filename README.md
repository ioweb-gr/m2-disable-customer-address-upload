# Ioweb Disable Customer Address Upload (Magento 2)

Disables the customer address file upload endpoint in Magento 2 by intercepting the controller and returning `403 Forbidden`.

## Module Identity

- Magento module name: `Ioweb_DisableCustomerAddressUpload`
- Composer package: `ioweb-gr/m2_disablecustomeraddressupload`
- Module root in this repo: repository root

## What It Does

- Intercepts: `Magento\\Customer\\Controller\\Address\\File\\Upload::execute`
- Prevents controller execution
- Returns HTTP `403` with a short error message

## Requirements

- Magento 2
- `magento/module-customer`

## Installation

### Option A: Composer (recommended)

```bash
composer require ioweb-gr/m2_disablecustomeraddressupload
bin/magento setup:upgrade
bin/magento cache:flush
```

### Option B: Manual (`app/code`)

1. Copy module to:
   - `<magento_root>/app/code/Ioweb/DisableCustomerAddressUpload`
2. Run:

```bash
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:flush
```

## Uninstall

```bash
bin/magento module:disable Ioweb_DisableCustomerAddressUpload
bin/magento setup:upgrade
bin/magento cache:flush
```

Then remove module files (or remove package if installed via Composer).
