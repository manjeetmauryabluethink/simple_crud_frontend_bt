<?php
namespace Bluethink\Job\Model\ResourceModel\View;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    // protected $_idFieldName = 'job_id';
    // protected $_eventPrefix = 'bluethink_job_view_collection';
    // protected $_eventObject = 'view_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Bluethink\Job\Model\View::class, \Bluethink\Job\Model\ResourceModel\View::class);
    }
}
