<?php

namespace Ws\HtmlParser;

interface Finding
{
    /**
     * @param $expression
     * @return array<int, string>
     */
    public function css($expression): array;
}