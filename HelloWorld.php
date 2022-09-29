<?php declare(strict_types = 1);

class HelloWorld
{
    public function test(): void
    {
        $closure = (static fn (): string => 'evaluated Closure')(...);
    }
}
