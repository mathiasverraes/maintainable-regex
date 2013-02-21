<?php

namespace MaintainableRegex;

class AtSign implements RegexPart
{
    public function __toString()
    {
        return '\@';
    }
}