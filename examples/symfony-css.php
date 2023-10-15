<?php

require_once '../vendor/autoload.php';

$html = file_get_contents('./html/1.html');
$crawler = new \Symfony\Component\DomCrawler\Crawler($html);
$finding = new \Ws\HtmlParser\SymfonyFinding($crawler);
dump($finding->css('.a'));