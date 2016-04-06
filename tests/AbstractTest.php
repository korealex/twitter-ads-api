<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of AbstractTestCase
 *
 * @author logopogo
 */
class AbstractTest extends PHPUnit_Framework_TestCase {
    
    
    public function testTestCase()
    {
        $x = new \TwitterAdsApi\TwitterAds\Response();
        
        $this->assertTrue(true);
        
    }
}
