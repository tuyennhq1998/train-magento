<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Levinci\Job\Api\Data;

interface JobSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Job list.
     * @return \Levinci\Job\Api\Data\JobInterface[]
     */
    public function getItems();

    /**
     * Set store_name list.
     * @param \Levinci\Job\Api\Data\JobInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

