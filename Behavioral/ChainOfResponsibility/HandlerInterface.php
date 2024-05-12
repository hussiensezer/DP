<?php

namespace Behavioral\ChainOfResponsibility;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);
    //end setNext
    public function handler(Request $request);
    //end handler
}