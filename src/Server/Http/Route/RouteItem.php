<?php
namespace Imi\Server\Http\Route;

use Imi\Server\Route\Annotation\Route;

class RouteItem
{
    /**
     * 注解
     *
     * @var \Imi\Server\Route\Annotation\Route
     */
    public $annotation;

    /**
     * 回调
     *
     * @var callable|\Imi\Server\Route\RouteCallable
     */
    public $callable;

    /**
     * 中间件列表
     *
     * @var array
     */
    public $middlewares = [];

    /**
     * WebSocket 配置
     *
     * @var array
     */
    public $wsConfig = [];

    /**
     * 其它配置项
     *
     * @var array
     */
    public $options;

    public function __construct(Route $annotation, $callable, array $options = [])
    {
        $this->annotation = $annotation;
        $this->callable = $callable;
        $this->options = $options;
    }

}
