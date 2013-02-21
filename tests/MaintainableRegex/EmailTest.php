<?php

namespace MaintainableRegex;

class EmailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider provideValidEmails
     */
    public function it_should_pass_for_valid_naive_emails($email)
    {
        $pattern = (string) new CompletePattern(new Email());
        $this->assertRegExp($pattern, $email);
    }

    public static function provideValidEmails()
    {
        return array(
            array('mathias.verraes@example.net'),
            array('freddy.mercury@example.com'),
        );
    }

    /**
     * @test
     * @dataProvider provideValidEmails
     */
    public function it_should_fail_for_invalid_emails($email)
    {
        $pattern = (string) new CompletePattern(new Email());
        $this->assertRegExp($pattern, $email);
    }

    public static function provideInvalidEmails()
    {
        return array(
            array('mathias @example.net'),
            array('mathias.verraes@examplenet'),
            array('freddy@mercury@@example.com'),
        );
    }
}
