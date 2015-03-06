<?php

use App\Book;
use App\Lib\Prototype\DbClasses\Eloquent\EloquentBookRepository;

class UserTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    protected $bookRepo;


    public function testCreateBook()
    {

        $this->bookRepo = new EloquentBookRepository(new Book);

        $book = $this->bookRepo->formModify(['name' => 'tuandt', 'description' => 'description']);

        $this->assertEquals($book->name, 'tuandt');
    }

    public function testEditBook()
    {

        $this->bookRepo = new EloquentBookRepository(new Book);
        
        $book = $this->bookRepo->formModify(['name' => 'tuandt2', 'description' => 'description'], 1);

        $this->assertEquals($book->name, 'tuandt2');
    }


}
