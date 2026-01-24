# Ioweb Disable Customer Address Upload

Disable the customer address file upload controller in Magento 2 by intercepting
`Magento\Customer\Controller\Address\File\Upload::execute` and returning a 403
response.

## Requirements

- Magento 2
- `magento/module-customer`

## Installation

Install via Composer (path or VCS repository):

```bash
composer require ioweb/module-disable-customer-address-upload
```

Then enable the module and update the schema:

```bash
bin/magento module:enable Ioweb_DisableCustomerAddressUpload
bin/magento setup:upgrade
bin/magento cache:flush
```

## What it does

The module registers an around plugin on:

- `Magento\Customer\Controller\Address\File\Upload::execute`

The plugin skips the original controller execution and returns a 403 raw
response with a short message.

## Uninstall

```bash
bin/magento module:disable Ioweb_DisableCustomerAddressUpload
```

Remove the package from Composer if desired:

```bash
composer remove ioweb/module-disable-customer-address-upload
```
