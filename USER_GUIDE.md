# USER GUIDE: Disable Customer Address Upload

## 1. Purpose

This module blocks customer address file upload requests in Magento.

It is useful when you want to prevent uploads from that endpoint for security/compliance or business-policy reasons.

## 2. Behavior

When a request hits:

- `Magento\\Customer\\Controller\\Address\\File\\Upload::execute`

The module plugin intercepts the action and returns:

- HTTP status: `403 Forbidden`
- response body: short plain-text error message

No admin configuration is required.

## 3. Admin Actions

There is no settings page for this module.

Typical admin/operator tasks:

1. Ensure module is enabled.
2. Flush cache after deployment.
3. Validate the endpoint returns `403`.

## 4. Verify Module Is Enabled

```bash
bin/magento module:status Ioweb_DisableCustomerAddressUpload
```

If disabled:

```bash
bin/magento module:enable Ioweb_DisableCustomerAddressUpload
bin/magento setup:upgrade
bin/magento cache:flush
```

## 5. Functional Test

Call the customer address upload endpoint in your environment and verify:

1. Response code is `403`.
2. Upload action is blocked.

## 6. Notes

- This module targets a specific customer address upload controller.
- If Magento internals change in future versions, re-test behavior after upgrades.
