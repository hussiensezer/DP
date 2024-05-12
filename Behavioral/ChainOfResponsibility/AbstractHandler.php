<?php

namespace Behavioral\ChainOfResponsibility;

abstract class AbstractHandler  implements HandlerInterface
{
    private HandlerInterface $nextHandler;
    public function setNext(HandlerInterface $handler): HandlerInterface
    {
       $this->nextHandler = $handler;
       return $handler;
    }// End setNext

    public function handle(Request $request)
    {
        if($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
    }// End handle
}