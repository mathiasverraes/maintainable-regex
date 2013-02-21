<?php

namespace MaintainableRegex;

class DotTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_match_dots()
    {
        $pattern = new CompletePattern(new Dot);
        $this->assertRegExp((string)$pattern, ".");
    }

    /** @test */
    public function it_should_not_match_multiple_dots()
    {
        $pattern = new CompletePattern(new Dot);
        $this->assertNotRegExp((string)$pattern, "..");
    }
}
