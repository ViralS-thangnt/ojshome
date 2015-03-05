<?php

class UserTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testUser()
    {
        $response = $this->call('GET', 'book');

        $this->assertEquals(200, $response->getStatusCode());
    }

}
