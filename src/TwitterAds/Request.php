<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TwitterAdsApi\TwitterAds;

/**
 * Description of Request
 *
 * @author logopogo
 */
class Request {



    protected $client;

    protected $response;

    public function __construct($version = 1, $access_token, $secret) {
        $this->client = new \GuzzleHttp\Client();

        $this->setHeaders();
        $this->response = new Response();
    }
    
    

    public function setHeaders($access_token, $secret) {
        
    }

    public function get($uri, $data, $header) {

        $query = ['query' => $data];
        

$this->client->request("GET", $uri,$header,  $query);
        

//        var_dump([$uri,$data]); die();
        $this->client->get($uri, $query);
    }

    public function post($uri, $data) {
        
    }

    public function update($uri, $id, $data) {
        
    }

    public function delete($uri, $id) {
        
    }

}
