<?php

class BookControllerTest extends TestCase {
 
protected $bookMock;

public function setUp()
{
    parent::setUp();

    $this->mock = Mockery::mock('App\Lib\Prototype\DBClasses\Eloquent\EloquentBookRepository');
    $this->app->instance('App\Lib\Prototype\DBClasses\Eloquent\EloquentBookRepository' , $this->mock);
}
  public function tearDown()
{
      Mockery::close();
}

    public function testBookIndex()
    {
        $this->mock
           ->shouldReceive('all')
           ->once();

        $this->call('get', 'book');
       
    }
}