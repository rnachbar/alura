<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class Browser 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function navigate(array $data): string
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);
        $browser->request('GET', self::URL);

        // Clicando em um link/botão e preenchendo dados do formulário
        $browser->clickLink($data['Link']);
        $crawler = $browser->submitForm($data['Form'], $data['FormData'], $data['Method']);

        return $crawler->html();
    }
}

$data_for_login_page = [
    'Link' => 'Login',
    'Form' => 'Go',
    'FormData' => [
        'username' => 'vitor@php.rio', 
        'password' => 'senha'
    ],
    'Method' => 'GET'
];

$scrap = new Browser;
$result = $scrap->navigate($data_for_login_page);

var_dump($result);
