<?php

namespace MaintainableRegex;

class NameTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_match_names_with_only_letters()
    {
        $pattern = new CompletePattern(new Name);
        $this->assertRegExp((string) $pattern, "mathias");
    }

    /** @test */
    public function it_should_not_match_names_with_special_characters()
    {
        $pattern = new CompletePattern(new Name);;
        $this->assertNotRegExp((string) $pattern, "la'Shawn");
    }
}
