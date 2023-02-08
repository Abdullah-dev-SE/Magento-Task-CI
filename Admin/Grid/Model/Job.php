<?php
namespace Admin\Grid\Model;

use Magento\Framework\Model\AbstractModel;
use Admin\Grid\Model\ResourceModel\Job as JobResourceModel;

class Job extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(JobResourceModel::class);
    }
}
