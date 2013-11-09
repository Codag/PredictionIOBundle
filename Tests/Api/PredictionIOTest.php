<?php

/*
 * This file is part of the PredictionIO package.
 *
 * (c) Marc Juchli <mail@marcjuch.li>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Codag\PredictionIOBundle\Tests\Api;

use Codag\PredictionIOBundle\Api\PredictionIO;

/**
 * Test PredictionIO Api Class
 *
 * @author Marc Juchli <mj@codag.ch>
 */

class PredictionIOTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Client
     *
     * @covers Codag\PredictionIOBundle\Api\PredictionIO::getClient()
     */
    public function testGetClient()
    {
        $client = new PredictionIO('testkey');
        $client = $client->getClient();

        $client->identify('username');

        $this->assertEquals('username', $client->getIdentity());
    }

    /**
     * Test App Key
     *
     * @covers Codag\PredictionIOBundle\Api\PredictionIO::getAppKey()
     */
    public function testGetAppKey(){
        $api = new PredictionIO('testkey');

        $this->assertEquals('testkey', $api->getAppKey());
    }

    /**
     * Test Api Url
     *
     * @covers Codag\PredictionIOBundle\Api\PredictionIO::getApiUrl()
     */
    public function testGetApiUrl(){
        $api = new PredictionIO('testkey', 'testurl');

        $this->assertEquals('testurl', $api->getApiUrl());
    }

}