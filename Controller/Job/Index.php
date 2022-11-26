<?php
namespace Bluethink\Job\Controller\Job;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Bluethink\Job\Model\ViewFactory;
use Bluethink\Job\Model\ResourceModel\View\CollectionFactory;
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $collectionFactory;
    protected $pageFactory;
    protected $resultForwardFactory;
    protected $rawFactory;
    protected $redirectFactory;
    protected $jsonFactory;
    protected $viewFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Framework\View\Result\PageFactory $pageFactory,
    \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory,
    RawFactory $rawFactory,
    RedirectFactory $redirectFactory,
    JsonFactory $jsonFactory,
    ViewFactory $viewFactory,
    CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
        $this->rawFactory = $rawFactory;
        $this->resultForwardFactory = $resultForwardFactory;
        $this->redirectFactory = $redirectFactory;
        $this->jsonFactory = $jsonFactory;
        $this->viewFactory = $viewFactory;
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // print_r(get_class_methods($this->collectionFactory));
        // die;     
         // return $this->resultForwardFactory->create();
        //  $arr = array("name"=>"Sanjeet","email"=>"manjeet@gmail.com","telephone"=>"8052530561","job_option"=>"Magento developer","upload_file"=>"new.jpg");
         // $collectionData = $this->collectionFactory->create();
        //   echo "<pre>";
        //   print_r(get_class_methods($model));
        //   die; 
        //  save data
        //   $model->setData($arr)->save();
        //   die;

        // Fetch One Record
        // $data= $model->load(3)->getData();
        // print_r($data);
        // die;

        // Delete Record
        //$data = $model->load(6)->delete();
        //  print_r($data);
        // die;


        // Edit Third Data
        // $arr = array("job_id"=>9,"name"=>"raju","email"=>"raju@gmail.com","telephone"=>"8104853126","job_option"=>"laravel developer","upload_file"=>"laravel.jpg");
        // $result = $model->setData($arr); 
        // $result->save();
        // die;

        //echo "<pre>";
        //print_r($model->getData());
        //die;
        // $data->save();
        // echo "<pre>";
        // print_r($data);
        // die;
        //resultForwordFactory
        //$resultForward = $this->resultForwardFactory->create();
        //return $resultForward->forward('second');
        // echo "thisi is index controller";
        // die;
        //  $resultForward = $this->resultForwardFactory->create();
        //rawFactory 
        // $rawFactory = $this->rawFactory->create();
        // return $rawFactory->setContents("printing raw string");
        //  $redirectFactory = $this->redirectFactory->create();
        // return $redirectFactory->setRefererUrl();
        //jsonFactory
        //   $jsonFactory = $this->jsonFactory->create();
        //   $data =[
        //            "color"=>"red",
        //            "size"=>"09"
        //         ];
        //  return $jsonFactory->setData($data);
        return $this->pageFactory->create();
    }
}
