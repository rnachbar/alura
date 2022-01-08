<?php

namespace Raphael\Scrap;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

require_once 'vendor/autoload.php';

class Images 
{
    private const URL = 'https://vitormattos.github.io/poc-lineageos-cellphone-list-statics/';

    public function getContent(string $selector): array
    {
        $client = HttpClient::create();
        $browser = new HttpBrowser($client);

        $crawler = $browser->request('GET', self::URL);

        $images = $crawler->filter($selector)
            ->images();

        return $images;
    }
}

$scrap = new Images;
$images = $scrap->getContent('article .img-thumbnail');

if (!is_dir('images')) :
    mkdir('images');
endif;

foreach ($images as $value) :
    $uri = $value->getUri();
    $filename = basename($uri);
    
    \file_put_contents("images/$filename", $uri);
endforeach;

echo 'Salvou';
