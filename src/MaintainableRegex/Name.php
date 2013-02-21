<?php

namespace MaintainableRegex;

class Name implements RegexPart
{
    public function __toString()
    {
        return '[a-z]+';
    }
}