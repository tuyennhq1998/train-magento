<?php

namespace Levinci\Job\Model\Resolver;

use Levinci\Job\Model\JobRepository;
use Levinci\Job\Model\Job\ExtractJobData;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrderBuilder;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\Resolver\ValueFactory;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Job implements ResolverInterface
{
    protected $sortOrderBuilder;
    protected $searchCriteriaBuilder;
    protected $jobRepository;
    protected $extractJobData;
    protected $valueFactory;
    public function __construct(
        JobRepository $jobRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        SortOrderBuilder $sortOrderBuilder,
        ExtractJobData $extractJobData,
        ValueFactory $valueFactory
    ) {
    }

    /**
     * Resolve multiple requests.
     *
     * @param mixed $context
     *
     * @throws LocalizedException
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {

        // $sortOrder = $this->sortOrderBuilder->create();
        // $search = $this->searchCriteriaBuilder->setSortOrders([$sortOrder])->setPageSize($args['pageSize'])->create();

        try {
            $searchResult = $this->jobRepository->getList();
            $items = [];

            foreach ($searchResult->getItems() as $item) {
                $items[] = $this->extractJobData->execute($item);
            }

            return [
                'total_count' => $searchResult->getTotalCount(),
                'items' => $items,
            ];
        } catch (LocalizedException $exception) {
            throw new GraphQlNoSuchEntityException(__($exception->getMessage()));
        }
    }
}