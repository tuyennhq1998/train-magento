<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Levinci\Job\Model\ResourceModel\Job;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'job_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Levinci\Job\Model\Job::class,
            \Levinci\Job\Model\ResourceModel\Job::class
        );
    }
}

