<?php

namespace Ort\IotBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IotControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ort_iot_view:');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ort_iot_homepage:');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ort_iot_add:');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ort_iot_edit:');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'ort_iot_delete:');
    }

}
