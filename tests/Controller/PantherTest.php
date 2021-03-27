<?php


namespace App\Tests\Controller;


use Symfony\Component\Panther\PantherTestCase;

class PantherTest extends PantherTestCase
{
    public function test()
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/');

        $this->assertEquals('HomeController', $crawler->filter('h1')->text());

        $crawler->selectButton('hello')->click();
        $this->assertEquals('hello hello!', $crawler->filter('h1')->text());

        $client->takeScreenshot('home.png');
    }
}
