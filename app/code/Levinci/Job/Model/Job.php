<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Levinci\Job\Model;

use Levinci\Job\Api\Data\JobInterface;
use Magento\Framework\Model\AbstractModel;

class Job extends AbstractModel implements JobInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Levinci\Job\Model\ResourceModel\Job::class);
    }

    /**
     * @inheritDoc
     */
    public function getJobId()
    {
        return $this->getData(self::JOB_ID);
    }

    /**
     * @inheritDoc
     */
    public function setJobId($jobId)
    {
        return $this->setData(self::JOB_ID, $jobId);
    }

    /**
     * @inheritDoc
     */
    public function getStoreName()
    {
        return $this->getData(self::STORE_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setStoreName($storeName)
    {
        return $this->setData(self::STORE_NAME, $storeName);
    }

    /**
     * @inheritDoc
     */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }

    /**
     * @inheritDoc
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /**
     * @inheritDoc
     */
    public function getTitleRequirement()
    {
        return $this->getData(self::TITLE_REQUIREMENT);
    }

    /**
     * @inheritDoc
     */
    public function setTitleRequirement($titleRequirement)
    {
        return $this->setData(self::TITLE_REQUIREMENT, $titleRequirement);
    }

    /**
     * @inheritDoc
     */
    public function getNumberOfJob()
    {
        return $this->getData(self::NUMBER_OF_JOB);
    }

    /**
     * @inheritDoc
     */
    public function setNumberOfJob($numberOfJob)
    {
        return $this->setData(self::NUMBER_OF_JOB, $numberOfJob);
    }

    /**
     * @inheritDoc
     */
    public function getTypeOfJob()
    {
        return $this->getData(self::TYPE_OF_JOB);
    }

    /**
     * @inheritDoc
     */
    public function setTypeOfJob($typeOfJob)
    {
        return $this->setData(self::TYPE_OF_JOB, $typeOfJob);
    }

    /**
     * @inheritDoc
     */
    public function getSalary()
    {
        return $this->getData(self::SALARY);
    }

    /**
     * @inheritDoc
     */
    public function setSalary($salary)
    {
        return $this->setData(self::SALARY, $salary);
    }

    /**
     * @inheritDoc
     */
    public function getExpiration()
    {
        return $this->getData(self::EXPIRATION);
    }

    /**
     * @inheritDoc
     */
    public function setExpiration($expiration)
    {
        return $this->setData(self::EXPIRATION, $expiration);
    }

    /**
     * @inheritDoc
     */
    public function getJobDescription()
    {
        return $this->getData(self::JOB_DESCRIPTION);
    }

    /**
     * @inheritDoc
     */
    public function setJobDescription($jobDescription)
    {
        return $this->setData(self::JOB_DESCRIPTION, $jobDescription);
    }

    /**
     * @inheritDoc
     */
    public function getAgeMin()
    {
        return $this->getData(self::AGE_MIN);
    }

    /**
     * @inheritDoc
     */
    public function setAgeMin($ageMin)
    {
        return $this->setData(self::AGE_MIN, $ageMin);
    }

    /**
     * @inheritDoc
     */
    public function getAgeMax()
    {
        return $this->getData(self::AGE_MAX);
    }

    /**
     * @inheritDoc
     */
    public function setAgeMax($ageMax)
    {
        return $this->setData(self::AGE_MAX, $ageMax);
    }

    /**
     * @inheritDoc
     */
    public function getExperience()
    {
        return $this->getData(self::EXPERIENCE);
    }

    /**
     * @inheritDoc
     */
    public function setExperience($experience)
    {
        return $this->setData(self::EXPERIENCE, $experience);
    }

    /**
     * @inheritDoc
     */
    public function getCerificate()
    {
        return $this->getData(self::CERIFICATE);
    }

    /**
     * @inheritDoc
     */
    public function setCerificate($cerificate)
    {
        return $this->setData(self::CERIFICATE, $cerificate);
    }

    /**
     * @inheritDoc
     */
    public function getBenefit()
    {
        return $this->getData(self::BENEFIT);
    }

    /**
     * @inheritDoc
     */
    public function setBenefit($benefit)
    {
        return $this->setData(self::BENEFIT, $benefit);
    }
}

