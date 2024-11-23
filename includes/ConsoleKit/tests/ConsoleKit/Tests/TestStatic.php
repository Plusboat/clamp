<?php

namespace ConsoleKit\Tests;

class TestStatic
{
    public function sayHello(array $args, $console, array $opts = [])
    {
        $name = 'unknown';
        if (!empty($args)) {
            $name = implode(' ', $args);
        } elseif (isset($opts['name'])) {
            $name = $opts['name'];
        }
        $console->writeln(sprintf('hello %s!', $name));
    }
}
