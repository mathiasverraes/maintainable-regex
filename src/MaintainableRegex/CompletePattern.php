<?php


namespace MaintainableRegex;

class CompletePattern implements RegexPart
{
    /**
     * @var string|\MaintainableRegex\RegexPart
     */
    private $pattern;

    public function __construct($pattern)
    {
        $this->pattern = $pattern;
    }

    public function __toString()
    {
        return '/' . new LineStart . $this->pattern . new LineEnd . '/';
    }

}