<?php
namespace Bluethink\Job\Model\ResourceModel;

class View extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('bluethink_job_apply', 'job_id');
    }
}
