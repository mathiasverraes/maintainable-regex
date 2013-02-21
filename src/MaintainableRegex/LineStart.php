<?php


namespace MaintainableRegex;


class LineStart implements RegexPart
{
    public function __toString()
    {
        return '^';

    }

}