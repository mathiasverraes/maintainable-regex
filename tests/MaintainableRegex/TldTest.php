<?php

namespace MaintainableRegex;

class TldTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provideCommonTlds
     */
    public function it_should_match_most_common_tlds($tld)
    {
        $pattern = new CompletePattern(new Tld);
        $this->assertRegExp((string) $pattern, $tld);
    }

    public static function provideCommonTlds()
    {
        return array(
            array('com'),
            array('net'),
            array('eu'),
        );
    }


    /** @test */
    public function it_should_not_match_nonexisting_tlds()
    {
        $pattern = new CompletePattern(new Tld);
        $this->assertNotRegExp((string) $pattern, 'abc');
    }
}
