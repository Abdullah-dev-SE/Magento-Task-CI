<?php
namespace Admin\Grid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Job extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('admin_grid_data', 'job_id');
    }
}
