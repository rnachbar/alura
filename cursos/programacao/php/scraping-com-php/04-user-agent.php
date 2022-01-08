<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class UserAgent 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';
    private const USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.246';

    public function request(): object
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $browser->setServerParameter('HTTP_USER_AGENT', self::USER_AGENT);
        $browser->request('GET', self::URL);

        return $browser;
    }
}

$scrap = new UserAgent;
$result = $scrap->request();

var_dump($result->getRequest());
