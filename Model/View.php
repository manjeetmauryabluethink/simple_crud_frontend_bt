<?php

namespace Bluethink\Job\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Bluethink\Job\Api\Data\ViewInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class View extends AbstractModel implements ViewInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'bluethink_job_apply_view';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Bluethink\Job\Model\ResourceModel\View');
    }


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */

    public function getTelephone()
    {
        return $this->getData(self::TELEPHONE);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getJobOption()
    {
        return $this->getData(self::JOBOPTION);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getUploadFile()
    {
        return $this->getData(self::UPLOADFILE);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getJobId()
    {
        return $this->getData(self::JOBID);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getJobId()];
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setName($title)
    {
        return $this->setData(self::NAME, $title);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return $this
     */
    public function setTelephone($telephone)
    {
        return $this->setData(self::TELEPHONE, $telephone);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setJobOption($job_option)
    {
        return $this->setData(self::JOBOPTION, $job_option);
    }

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return $this
     */

    public function setUploadFile($upload_file)
    {
        return $this->setData(self::UPLOADFILE, $upload_file);
    }

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return $this
     */

    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setJobId($id)
    {
        return $this->setData(self::JOBID, $id);
    }
}