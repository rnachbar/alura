<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class CSS 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function getContent(string $selector): string
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $crawler = $browser->request('GET', self::URL);

        $text = $crawler->filter($selector)
            ->text();

        return $text;
    }
}

$scrap = new CSS;

$class_title = $scrap->getContent('.title-page');
var_dump($class_title);

$tag_title = $scrap->getContent('title');
var_dump($tag_title);
