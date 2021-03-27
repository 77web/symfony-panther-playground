<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function test()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('h1')->text() === 'HomeController');
    }
}
