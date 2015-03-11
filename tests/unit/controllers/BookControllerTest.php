<?php
class BookControllerTest extends TestCase {
 
 
  public function mock($class)
  {
      $mock = Mockery::mock('App\Model', $class);

      app()->instance($class, $mock);

      return $mock;
  }

  public function tearDown()
  {
      Mockery::close();
  }
 
  public function testIndex()
  {
      $this->mock
           ->shouldReceive('all')
           ->once();
 
      $this->call('GET', 'book');
 
    $this->assertResponseOk();
    // $this->assertViewHas('user');
    // $this->assertViewNameIs('users.show');
  }
 
}