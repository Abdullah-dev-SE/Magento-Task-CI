<?php
namespace Admin\Grid\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory


    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;        
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Grid'));
        return $resultPage;
    }
    public function isAllowed()
    {
     return $this->authorization->isAllowed(static::ADMIN_RESOURCE);

    }
}
