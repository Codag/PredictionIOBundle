<?php
/*
 * This file is part of the PredictionIO package.
 *
 * (c) Marc Juchli <mail@marcjuch.li>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Codag\PredictionIOBundle\Api;

use PredictionIO\PredictionIOClient;

class PredictionIO {

    protected $appKey;

    protected $apiUrl;

    public function __construct($appKey, $apiUrl){
        $this->appKey = $appKey;
        $this->apiUrl = $apiUrl;
    }

    public function getClient(){
        return PredictionIOClient::factory(
            array(
                "appkey" => $this->appKey,
                "apiurl" => $this->apiUrl
            )
        );
    }
} 