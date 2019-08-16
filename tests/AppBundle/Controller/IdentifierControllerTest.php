<?php

namespace tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IdentifierControllerTest extends WebTestCase
{
    public function testGenerateUUID()
    {
        $arr = [];

        for ($index = 0; $index < 339; ++$index) {
            $client = static::createClient();
            $client->request('GET', '/identifier/uuid');
            $this->assertEquals(200, $client->getResponse()->getStatusCode());

            $content = $client->getResponse()->getContent();
            $data = json_decode($content, true);

            $id = $data['id'];
            $this->assertFalse(in_array($id, $arr));
            $arr[] = $id;
        }
    }
}
