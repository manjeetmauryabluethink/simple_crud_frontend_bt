<?php
namespace Bluethink\Job\Controller\Job;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Bluethink\Job\Model\ViewFactory;
//use Magento\Framework\Image\AdapterFactory;
use Magento\Framework\Filesystem;
class Validation extends \Magento\Framework\App\Action\Action
{
protected $resultPageFactory;
protected $logger;
protected $viewFactory;
//protected $adapterFactory;
protected $view;
protected $uploaderFactory;
protected $filesystem;
private $dataPersistor;
public function __construct(
Context $context,
//AdapterFactory $adapterFactory,
LocalizedException $logger,
DataPersistorInterface $dataPersistor,
PageFactory $resultPageFactory,
UploaderFactory $uploaderFactory,
Filesystem $filesystem,
ViewFactory $viewFactory
)
{
//$this->adapterFactory = $adapterFactory;
$this->uploaderFactory = $uploaderFactory;
$this->filesystem = $filesystem;
$this->logger = $logger;
$this->viewFactory = $viewFactory;
$this->resultPageFactory = $resultPageFactory;
return parent::__construct($context);
}
public function execute()
{
try {
  $data = $this->validatedParams();
  $a=['image'=>'ram'];
   echo"<pre>";
  // print_r($a);
  // echo "<br>";
  // $data['man'] = $a['image'];
  //  print_r($data);
  // die;

  $files = $this->getRequest()->getFiles();
if (isset($files['upload_file']) && !empty($files['upload_file']["name"])) {
    $uploaderFactory = $this->uploaderFactory->create(['fileId' => 'upload_file']);
    $uploaderFactory->setAllowedExtensions(['jpg', 'jpeg', 'gif', 'png', 'pdf', 'docx', 'doc']);
    $uploaderFactory->setAllowRenameFiles(true);
    //$uploaderFactory->setFilesDispersion(true);
    $mediaDirectory = $this->filesystem->getDirectoryRead(DirectoryList::MEDIA);
    $destinationPath = $mediaDirectory->getAbsolutePath('bluethink');
    $result = $uploaderFactory->save($destinationPath);
    if (!$result) {
    throw new LocalizedException(
    __('File cannot be saved to path: $1', $destinationPath)
    );
    }
    $imagepath = $result['file'];
    // print_r($imagepath);
    // die;
    $data['upload_file'] =$imagepath;;
    //  print_r($data);
    //  die;
}     

  $postData = $this->viewFactory->create();
  // print_r($postData->getData());
  // die;
if($data['id']){
  // print_r($data);
  // die;
  $update = $postData->load($data['id'])->addData($data);
  // print_r($update->getData());
  // die;
  $updateData = $update->setId($data['id']);
  $result = $updateData->save();
  $this->messageManager->addSuccessMessage(__('Record Updated Successfully.'));
  return $this->_redirect('btjob/job/display');
}else{
  // print_r($data);
  //  die;
  unset($data['id']);
  // print_r($update->getData());
  // die;
  $saveData = $postData->setData($data);
   $saveData->save();
  $this->messageManager->addSuccessMessage(__('Record Saved Successfully.'));
  return $this->_redirect('btjob/job/form');
}
// return $this->_redirect('btjob/job/form');


    //   $editid = $this->getRequest()->getParam('id');
    //   //$model =  $this->viewFactory->create();
    //   //$datastore = $model->setData($data);
    //   if($editid) {
    //     $result = $this->viewFactory->create()->load($editid)->setData($data);
    //     // print_r($result->getData());
    //     // die;
    //   if($result->save())
    //   {
    //     // echo "<pre>";
    //     // print_r($result);
    //     // die;
    //     $this->messageManager->addSuccessMessage(
    //    __('Data Updated successfully.')
    //    );
    //   }
    //   else {
    //      $this->messageManager->addErrorMessage(
    //      __('Data not updated')
    //                    );
    //         }
    //           }
    // else  {
    //     unset($data['id']);
    //    $result = $this->viewFactory->create()->setData($data);
    //     if($result->save())
    //     {
    //         // echo "<pre>";
    //         // print_r($result->getData());
    //         // die;
    //       $this->messageManager->addSuccessMessage(
    //      __('Data saved successfully.')
    //      );
    //     }
    //     else {
    //        $this->messageManager->addErrorMessage(
    //        __('Data not saved')
    //                      );
    //           }
    // }
}
catch (LocalizedException $e) {
$this->messageManager->addErrorMessage($e->getMessage());
return $this->resultRedirectFactory->create()->setPath('btjob/job/form');
}
catch (\Exception $e) {
$this->messageManager->addErrorMessage(
__('An error occurred while processing your form. Please try again later.')
);
}
return $this->resultRedirectFactory->create()->setPath('btjob/job/form');
}		
private function validatedParams()
{
$request = $this->getRequest();
if (trim($request->getParam('name')) == '') {
throw new LocalizedException(__('Enter the Customer Name and try again.'));
}
if (trim($request->getParam('email')) == '') {
throw new LocalizedException(__('Enter the email and try again.'));
}
if (trim($request->getParam('telephone')) == '') {
throw new LocalizedException(__('Enter the Telephone and try again.'));
}
if (trim($request->getParam('job_option')) == '') {
throw new LocalizedException(__('Select anyone job post and try again.'));
}
if (trim($request->getParam('job_option')) == '') {
    throw new LocalizedException(__('Select anyone job post and try again.'));
    }
// if (empty($files['upload_file']['name'])) {
//     throw new LocalizedException(__('Select file and try again.'));
// }
if (trim($request->getParam('hideit')) !== '') {
throw new \Exception();
}
return $request->getParams();
}
}