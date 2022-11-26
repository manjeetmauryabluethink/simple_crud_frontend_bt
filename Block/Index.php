<?php
namespace Bluethink\Job\Block;
 use Bluethink\Job\Model\ResourceModel\View\CollectionFactory;
 use Bluethink\Job\Model\ViewFactory;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        CollectionFactory $collection,
        ViewFactory $view
        

    ) 
    {
        $this->collection = $collection;
        $this->view = $view;
     
      

        parent::__construct($context, $data);
        
    }

    public function getFormAction()
    {
        return $this->getUrl('btjob/job/validation', ['_secure' => true]); 
    }

    public function getCollection()
    {
        return $member = $this->collection->create()->addFieldToSelect(['name','email','telephone'])->load();
        // return $member = $this->collection->create();

    }



    public function editOurData()
    {
        $editId = $this->getRequest()->getParam('id');
        $member = $this->view->create()->load($editId);
        return $member;
    }


    public function singleDataFetch()
    {
        $editId = $this->getRequest()->getParam('id');
        $member = $this->view->create()->load($editId);
        return $member;
    }

    // public function getCmpData()
    // {
    //     $editId = $this->getRequest()->getParam('id');
    //     $member = $this->view->create()->load($editId);
    //     return $member;
    // }


    


}
