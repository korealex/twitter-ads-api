<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TwitterAds;

/**
 * Description of Response
 *
 * @author logopogo
 */
class Response {
    public $response;


    public function __construct() {
        $this->response = new \GuzzleHttp\Psr7\Response();
    }
}
