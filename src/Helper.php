<?php

namespace Ws\HtmlParser;

use Symfony\Component\CssSelector\CssSelectorConverter;

class Helper
{
    public static function cssToXPath($expression)
    {
        $converter = new CssSelectorConverter();
        return $converter->toXPath($expression);
    }
}