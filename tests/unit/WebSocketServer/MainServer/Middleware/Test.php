<?php
namespace Imi\Test\WebSocketServer\MainServer\Middleware;

use Imi\Bean\Annotation\Bean;
use Imi\Server\WebSocket\Message\IFrame;
use Imi\Server\WebSocket\IMessageHandler;
use Imi\Server\WebSocket\Middleware\IMiddleware;

/**
 * @Bean
 */
class Test implements IMiddleware
{
    public function process(IFrame $frame, IMessageHandler $handler)
    {
        var_dump('test middleware');
        return $handler->handle($frame);
    }
}