<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculateControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'calculatrice');
    }

    public function testAllWebView(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertPageTitleContains('Hello CalculateController!');
        $this->assertCount(16, $crawler->filter('.touch'));
    }
}
