<?php

use Symfony\Component\DomCrawler\Crawler;

require_once 'vendor/autoload.php';

$crawler = new Crawler(file_get_contents('1.html'));

$trs = $crawler->filterXPath('//tr//td[13]')->slice(1);

var_dump($trs->count());

$price_earnings_ratios = 0;
$companies             = 0;

foreach ($trs as $tr) {
    //    var_dump($tr->nodeValue);
    $price_earnings_ratio = trim($tr->nodeValue);
    if (is_numeric($price_earnings_ratio)) {
        $companies += 1;
        $price_earnings_ratios += (float) $price_earnings_ratio;
    }
}
var_dump('总市盈率：' . $price_earnings_ratios);
var_dump('计算公司数量：' . $companies);
var_dump('平均市盈率：' . number_format(($price_earnings_ratios / $companies), 2));

