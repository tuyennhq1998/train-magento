<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Levinci\Job\Api\Data;

interface JobInterface
{

    const EXPIRATION = 'expiration';
    const TYPE_OF_JOB = 'type_of_job';
    const JOB_ID = 'job_id';
    const TITLE_REQUIREMENT = 'title_requirement';
    const AGE_MAX = 'age_max';
    const BENEFIT = 'benefit';
    const AGE_MIN = 'age_min';
    const STORE_NAME = 'store_name';
    const JOB_DESCRIPTION = 'job_description';
    const NUMBER_OF_JOB = 'number_of_job';
    const SALARY = 'salary';
    const CERIFICATE = 'cerificate';
    const EXPERIENCE = 'experience';
    const ADDRESS = 'address';

    /**
     * Get job_id
     * @return string|null
     */
    public function getJobId();

    /**
     * Set job_id
     * @param string $jobId
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setJobId($jobId);

    /**
     * Get store_name
     * @return string|null
     */
    public function getStoreName();

    /**
     * Set store_name
     * @param string $storeName
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setStoreName($storeName);

    /**
     * Get address
     * @return string|null
     */
    public function getAddress();

    /**
     * Set address
     * @param string $address
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setAddress($address);

    /**
     * Get title_requirement
     * @return string|null
     */
    public function getTitleRequirement();

    /**
     * Set title_requirement
     * @param string $titleRequirement
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setTitleRequirement($titleRequirement);

    /**
     * Get number_of_job
     * @return string|null
     */
    public function getNumberOfJob();

    /**
     * Set number_of_job
     * @param string $numberOfJob
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setNumberOfJob($numberOfJob);

    /**
     * Get type_of_job
     * @return string|null
     */
    public function getTypeOfJob();

    /**
     * Set type_of_job
     * @param string $typeOfJob
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setTypeOfJob($typeOfJob);

    /**
     * Get salary
     * @return string|null
     */
    public function getSalary();

    /**
     * Set salary
     * @param string $salary
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setSalary($salary);

    /**
     * Get expiration
     * @return string|null
     */
    public function getExpiration();

    /**
     * Set expiration
     * @param string $expiration
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setExpiration($expiration);

    /**
     * Get job_description
     * @return string|null
     */
    public function getJobDescription();

    /**
     * Set job_description
     * @param string $jobDescription
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setJobDescription($jobDescription);

    /**
     * Get age_min
     * @return string|null
     */
    public function getAgeMin();

    /**
     * Set age_min
     * @param string $ageMin
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setAgeMin($ageMin);

    /**
     * Get age_max
     * @return string|null
     */
    public function getAgeMax();

    /**
     * Set age_max
     * @param string $ageMax
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setAgeMax($ageMax);

    /**
     * Get experience
     * @return string|null
     */
    public function getExperience();

    /**
     * Set experience
     * @param string $experience
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setExperience($experience);

    /**
     * Get cerificate
     * @return string|null
     */
    public function getCerificate();

    /**
     * Set cerificate
     * @param string $cerificate
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setCerificate($cerificate);

    /**
     * Get benefit
     * @return string|null
     */
    public function getBenefit();

    /**
     * Set benefit
     * @param string $benefit
     * @return \Levinci\Job\Job\Api\Data\JobInterface
     */
    public function setBenefit($benefit);
}

