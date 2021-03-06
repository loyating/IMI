<?php
namespace Imi\Model;

use Imi\Db\Query\Query;

/**
 * 模型查询器
 */
class ModelQuery extends Query
{
    public function __init()
    {
        parent::__init();
        if($this->modelClass && $tableName = ModelManager::getTable($this->modelClass))
        {
            $this->table($tableName);
        }
    }
}
