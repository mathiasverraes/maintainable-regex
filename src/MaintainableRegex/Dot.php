<?php

namespace MaintainableRegex;

class Dot implements RegexPart
{
    public function __toString()
    {
        return '\.';
    }
}