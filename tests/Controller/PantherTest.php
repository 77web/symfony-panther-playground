<?php


namespace App\Tests\Controller;


use Symfony\Component\Panther\PantherTestCase;

class PantherTest extends PantherTestCase
{
    public function test()
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('h1')->text() === 'HomeController');

        $client->takeScreenshot('home.png');
    }
}
