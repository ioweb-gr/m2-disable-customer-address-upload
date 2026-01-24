<?php

declare(strict_types=1);

namespace Ioweb\DisableCustomerAddressUpload\Plugin\Customer\Address\File;

use Magento\Customer\Controller\Address\File\Upload;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class UploadPlugin
{
    /** @var ResultFactory */
    private $resultFactory;

    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
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
