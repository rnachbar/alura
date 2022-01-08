<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class Itens 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function getContent(string $selector): string
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $crawler = $browser->request('GET', self::URL);

        $total = $crawler->filter($selector)
            ->text();

        return $total;
    }
}

$scrap = new Itens;
$result = $scrap->getContent('header');
$result = \preg_replace('/\D/', '', $result);
$result = ceil($result / 10);

var_dump($result);exit;
