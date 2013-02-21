<?php

namespace MaintainableRegex;

class Email implements RegexPart
{
    public function __toString()
    {
        return
              (string) new Name
            . (string) new Dot
            . (string) new Name
            . (string) new AtSign
            . (string) new Name
            . (string) new Dot
            . (string) new Tld
        ;
    }
}