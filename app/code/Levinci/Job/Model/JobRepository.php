<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Levinci\Job\Model;

use Levinci\Job\Api\Data\JobInterface;
use Levinci\Job\Api\Data\JobInterfaceFactory;
use Levinci\Job\Api\Data\JobSearchResultsInterfaceFactory;
use Levinci\Job\Api\JobRepositoryInterface;
use Levinci\Job\Model\ResourceModel\Job as ResourceJob;
use Levinci\Job\Model\ResourceModel\Job\CollectionFactory as JobCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class JobRepository implements JobRepositoryInterface
{

    /**
     * @var Job
     */
    protected $searchResultsFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var ResourceJob
     */
    protected $resource;

    /**
     * @var JobInterfaceFactory
     */
    protected $jobFactory;

    /**
     * @var JobCollectionFactory
     */
    protected $jobCollectionFactory;


    /**
     * @param ResourceJob $resource
     * @param JobInterfaceFactory $jobFactory
     * @param JobCollectionFactory $jobCollectionFactory
     * @param JobSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceJob $resource,
        JobInterfaceFactory $jobFactory,
        JobCollectionFactory $jobCollectionFactory,
        JobSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->jobFactory = $jobFactory;
        $this->jobCollectionFactory = $jobCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(JobInterface $job)
    {
        try {
            $this->resource->save($job);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the job: %1',
                $exception->getMessage()
            ));
        }
        return $job;
    }

    /**
     * @inheritDoc
     */
    public function get($jobId)
    {
        $job = $this->jobFactory->create();
        $this->resource->load($job, $jobId);
        if (!$job->getId()) {
            throw new NoSuchEntityException(__('Job with id "%1" does not exist.', $jobId));
        }
        return $job;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->jobCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(JobInterface $job)
    {
        try {
            $jobModel = $this->jobFactory->create();
            $this->resource->load($jobModel, $job->getJobId());
            $this->resource->delete($jobModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Job: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($jobId)
    {
        return $this->delete($this->get($jobId));
    }
}

