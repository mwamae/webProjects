<?php
class UserTest extends TestCase {
    function testHome(){
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->getStatusCode());

    }
    function testServices(){
        $response = $this->call('GET','services');
        $this->assertResponseOk();
        $this->assertViewHas('services');
    }
    function testContact(){
        $response = $this->call('GET','contact');
        $this->assertResponseOk();
        $this->assertViewHas('contact');
    }

}
