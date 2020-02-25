<?php

namespace Level\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testCalculateNotAccessibleForInvalidOperand()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/calculate/1/5/randomoperand');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testCalculateNotAccessibleForEmptyNumbers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/calculate///add');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testCalculateDivisionByZeroReturns404()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/calculate/5/0/div');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}
