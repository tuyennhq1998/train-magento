<?php

namespace Levinci\Job\Model\Job;

use Levinci\Job\Api\Data\JobInterface;
use Levinci\Job\Api\JobRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Webapi\ServiceOutputProcessor;
use Magento\Store\Model\StoreManagerInterface;

class ExtractJobData
{
    public function __construct(
        StoreManagerInterface $storeManager,
        ServiceOutputProcessor $serviceOutputProcessor
    ) {
    }

    /**
     * @throws NoSuchEntityException
     *
     * @return array|bool|float|int|object|string
     */
    public function execute(JobInterface $job)
    {
        $store = $this->storeManager->getStore();

        $jobData = $this->serviceOutputProcessor->process(
            $job,
            JobRepositoryInterface::class,
            'get'
        );
        return $jobData;
    }
}