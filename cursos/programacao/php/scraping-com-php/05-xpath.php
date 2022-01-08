<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

/**
 * Seletor XPath serve para coletar dados de sites de JS.
 * XPath (XML Path Language) é uma linguagem de consulta criada para selecionar nós de documentos.
 */
class XPath 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function getContent(string $filter): string
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $crawler = $browser->request('GET', self::URL);

        $text = $crawler->filterXPath($filter)
            ->text();

        return $text;
    }
}

$scrap = new XPath;

$title = $scrap->getContent('//title');
var_dump($title);

$h2 = $scrap->getContent('//h2');
var_dump($h2);
