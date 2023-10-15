<?php

namespace Ws\HtmlParser;

use Symfony\Component\DomCrawler\Crawler;

class SymfonyFinding implements Finding
{
    /**
     * @param Crawler $crawler
     */
    public function __construct(
        protected Crawler $crawler
    ) {}

    /**
     * @param $expression
     * @return array<int, string>
     */
    public function css($expression): array
    {
        $crawler = $this->crawler->filter($expression);

        if ($crawler->count() == 0) {
            return [];
        }

        $contents = [];

        foreach ($crawler as $item) {
            $contents[] = trim($item->textContent);
        }

        return $contents;
    }
}