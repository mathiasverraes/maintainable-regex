<?php


namespace MaintainableRegex;


class LineEnd implements RegexPart
{
    public function __toString()
    {
        return '$';

    }

}