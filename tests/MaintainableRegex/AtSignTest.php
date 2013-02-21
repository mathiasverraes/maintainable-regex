<?php

namespace MaintainableRegex;

class AtSignTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_match_atsigns()
    {
        $pattern = new CompletePattern(new AtSign);
        $this->assertRegExp((string)$pattern, "@");
    }

    /** @test */
    public function it_should_not_match_atsigns_with_spacess()
    {
        $pattern = new CompletePattern(new Dot);
        $this->assertNotRegExp((string)$pattern, " @ ");
    }
}
