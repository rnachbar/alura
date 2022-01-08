<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class Attr 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function getContent(string $selector): array
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $crawler = $browser->request('GET', self::URL);

        $attr = $crawler->filter($selector)
            ->each(function ($node) {
                return $node->attr('src') ?: $node->attr('href');
            });

        return $attr;
    }
}

$scrap = new Attr;
$attr = $scrap->getContent('link[rel="stylesheet"], script[src]');

var_dump($attr);exit;
