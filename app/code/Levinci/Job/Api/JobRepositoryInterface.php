<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Levinci\Job\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface JobRepositoryInterface
{

    /**
     * Save Job
     * @param \Levinci\Job\Api\Data\JobInterface $job
     * @return \Levinci\Job\Api\Data\JobInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Levinci\Job\Api\Data\JobInterface $job);

    /**
     * Retrieve Job
     * @param string $jobId
     * @return \Levinci\Job\Api\Data\JobInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($jobId);

    /**
     * Retrieve Job matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Levinci\Job\Api\Data\JobSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Job
     * @param \Levinci\Job\Api\Data\JobInterface $job
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Levinci\Job\Api\Data\JobInterface $job);

    /**
     * Delete Job by ID
     * @param string $jobId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($jobId);
}

