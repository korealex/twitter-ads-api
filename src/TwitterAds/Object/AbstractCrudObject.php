<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TwitterAdsApi\TwitterAds\Object;

/**
 * Description of newPHPClass
 *
 * @author logopogo
 */
abstract class AbstractCrudObject {

    protected $request;

    public function __construct($id = null, $parent_id = null, Api $api = null) {

        $this->request = new \TwitterAdsApi\TwitterAds\Request();
  
    }

    public function create($data) {
        $this->request->post();
    }

    public function read($endpoint, $data, $id = null ) {
        if(!empty($id)){
          $endpoint= $endpoint ."/" .$id;  
        }
        $this->request->get($endpoint, $data);
        
    }

    public function update() {
        
    }

    public function delete() {
        
    }

}
