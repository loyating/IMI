<?php
namespace Imi\Db\Listener;

use Imi\RequestContext;
use Imi\Event\EventParam;
use Imi\Db\Pool\DbResource;
use Imi\Event\IEventListener;
use Imi\Bean\Annotation\Listener;
use Imi\Db\Statement\StatementManager;

/**
 * @Listener("IMI.REQUEST_CONTENT.DESTROY")
 */
class RequestContextDestroy implements IEventListener
{
    /**
     * 事件处理方法
     * @param EventParam $e
     * @return void
     */
    public function handle(EventParam $e)
    {
        // 释放正在被使用的数据库 Statement
        foreach(RequestContext::get('poolResources', []) as $resource)
        {
            if($resource instanceof DbResource)
            {
                StatementManager::unUsingAll($resource->getInstance());
            }
        }
    }
}