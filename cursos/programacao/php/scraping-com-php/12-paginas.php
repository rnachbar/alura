<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class Itens 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function getContent(string $selector): array
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $crawler = $browser->request('GET', self::URL);

        $total = $crawler->filter($selector)
            ->text();

        $total = \preg_replace('/\D/', '', $total);
        $total = ceil($total / 10);

        $modelos = $crawler->filter('article .title')
            ->each(function ($node) {
                return $node->text();
            });
        
        for ($i = 2; $i <= $total; $i++) :
            $crawler = $browser->request('GET', self::URL . "/$i");

            $modelos = array_merge($modelos, $crawler->filter('article .title')
                ->each(function ($node) {
                    return $node->text();
                }));
        endfor;

        return $modelos;
    }
}

$scrap = new Itens;
$result = $scrap->getContent('header');

var_dump($result);exit;