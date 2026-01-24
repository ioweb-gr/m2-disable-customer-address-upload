<?php

declare(strict_types=1);

namespace Ioweb\DisableCustomerAddressUpload\Plugin\Customer\Address\File;

use Magento\Customer\Controller\Address\File\Upload;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class UploadPlugin
{
    public function __construct(private ResultFactory $resultFactory)
    {
    }

    public function aroundExecute(Upload $subject, callable $proceed): ResultInterface
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setHttpResponseCode(403);
        $result->setHeader('Content-Type', 'text/plain', true);
        $result->setContents('File upload is disabled.');

        return $result;
    }
}
