<?php

namespace PredictionIO\PredictionIOBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/predictionio/example');

        $this->assertTrue($crawler->filter('html:contains("PredictionIO\PredictionIOClient")')->count() > 0);
    }
}
