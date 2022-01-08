<?php

use Symfony\Component\HttpClient\HttpClient;
require_once 'vendor/autoload.php';

class Scraping 
{
    private const OK = 200;
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/about/';

    public function get(): string
    {
        $client = HttpClient::create();
        $request = $client->request('GET', self::URL);
        $status = $request->getStatusCode();

        if ($status !== self::OK) :
            return '';
        endif;

        $content = $request->getContent();
        return $content;
    }
}

$scrap = new Scraping;
$result = $scrap->get();

var_dump($result);exit;
