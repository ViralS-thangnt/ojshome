<?php

use App\Manuscript;
use App\Lib\Prototype\DbClasses\Eloquent\EloquentManuscriptRepository;


class ManuscriptTest extends TestCase {
	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	protected $repo;

	public function __construct()
	{
		$this->input = ['author_id' => 11, 
                'author_comments' => 'flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;sdflsajklfdskal;jkl;flsajklfdskal;jkl;',
                "type" => "4",
                "expect_journal_id" => "23",
                "publish_journal_id" => 0,
                "name" => "Sự phát triển KTTT",
                "summary_vi" => "flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;sdflsajklfdskal;jkl;flsajklfdskal;jkl;",
                "keyword_vi" => "3,4,5",
                "keyword_en" => "3,4,5",
                "summary_en" => "flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;sdflsajklfdskal;jkl;flsajklfdskal;jkl;",
                "topic" => "dsafdsafdasfdsa",
                "recommend" => 0,
                "propose_reviewer" => "flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;sdflsajklfdskal;jkl;flsajklfdskal;jkl;",
                "co_author" => "flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;flsajklfdskal;jkl;sdflsajklfdskal;jkl;flsajklfdskal;jkl;",

                ];
	}

	public function testCreateManuscript(){
		$this->repo = new EloquentManuscriptRepository(new Manuscript);
		$manu = $this->repo->formModify($this->input);

		$manuOutput = $book->toArray();


	}

	public function testEditManuscript(){

	}

}