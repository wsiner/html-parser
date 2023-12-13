<?php
/**
 * Created by PhpStorm.
 * User: ws
 * Time: 2019-01-26 21:31
 */

use Symfony\Component\DomCrawler\Crawler;

include 'vendor/autoload.php';

$crawler = new Crawler(file_get_contents('./1.html'), 'http://www.wsbeijing.com/');

echo '<pre>';
var_dump($crawler->filter('tr')->count());

