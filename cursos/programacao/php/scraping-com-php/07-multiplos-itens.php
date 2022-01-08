<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class CSS 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function getContent(string $selector): array
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $crawler = $browser->request('GET', self::URL);

        $titles = $crawler->filter($selector)
            ->each(function ($node) {
                return $node->text();
            });

        return $titles;
    }
}

$scrap = new CSS;
$title = $scrap->getContent('article .title');

var_dump($title);
