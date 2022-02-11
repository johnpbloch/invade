<?php

namespace JohnPBloch\Invade;

class Dummy
{
    private string $test = 'Foobar';
    protected int $count = 0;

    private function transformTest(): void
    {
        $this->test = strrev($this->test);
    }

    protected function incrementCount(): int
    {
        return ++$this->count;
    }
}
