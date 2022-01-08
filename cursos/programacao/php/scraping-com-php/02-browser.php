<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class Browser 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function navigate(string $link): string
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);
        $crawler = $browser->request('GET', self::URL);
        $html = $crawler->html();

        // Clicando em um link/botão
        $login_btn = $browser->clickLink($link);
        $html = $login_btn->html();

        return $html;
    }
}

$scrap = new Browser;
$result = $scrap->navigate('Login');

var_dump($result);
