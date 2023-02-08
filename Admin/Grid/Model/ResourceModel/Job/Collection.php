<?php
namespace Admin\Grid\Model\ResourceModel\Job;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Admin\Grid\Model\Job as JobModel;
use Admin\Grid\Model\ResourceModel\Job as JobResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(JobModel::class,JobResourceModel::class);
    }
}
