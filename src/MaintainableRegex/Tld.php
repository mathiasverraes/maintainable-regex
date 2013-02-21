<?php

namespace MaintainableRegex;

class Tld implements RegexPart
{
    public function __toString()
    {
        return 'com|net|eu|org';
    }

}