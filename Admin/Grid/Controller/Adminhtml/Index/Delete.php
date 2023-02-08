<?php
namespace Admin\Grid\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;

class Delete extends Action
{
    protected $modelJob;

    /**
     * @param Action\Context $context
     * @param \Emipro\Custom\Model\Job $model
     */
    public function __construct(
        Action\Context $context,
        \Admin\Grid\Model\Job $model
    ) {
        parent::__construct($context);
        $this->modelJob = $model;
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Admin_Grid::index_delete');
    }

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $job_id = $this->getRequest()->getParam('job_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($job_id) {
            try {
                $model = $this->modelJob;
                $model->load($job_id);
                $model->delete();
                $this->messageManager->addSuccess(__('Record deleted'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['job_id' => $job_id]);
            }
        }
        $this->messageManager->addError(__('Record does not exist'));
        return $resultRedirect->setPath('*/*/');
    }
}
