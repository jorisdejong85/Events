<?php

namespace Ez\EventsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertTrue($crawler->filter('html:contains("Evenementen")')->count() > 0);
        
        $crawler = $client->request('GET', '/en/');
        $this->assertTrue($crawler->filter('html:contains("Events")')->count() > 0);
    }
}
