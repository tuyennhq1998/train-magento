<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Levinci\Job\Model\Resolver;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Levinci\Job\Model\Resolver\DataProvider\Alljob as JobDataProvider;

class Alljob  implements ResolverInterface
{

    
    /**
     * @param DataProvider\Alljob  $alljob Repository
     */
    public function __construct(
        DataProvider\Alljob  $alljob DataProvider
    ) {
        $this->alljob DataProvider = $alljob DataProvider;
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $alljob Data = $this->alljob DataProvider->getAlljob ();
        return $alljob Data;
    }
}

