<?php

class TestBase extends PHPUnit_Framework_TestCase
{
    public $cli;

    public function setUp()
    {
        $this->cli = new League\CLImate\CLImate();
    }

    /** @test */

    public function it_does_nothing()
    {
        // nada
    }

}
