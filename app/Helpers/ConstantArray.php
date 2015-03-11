<?php namespace App\Helpers;

class ConstantArray
{
	public static $author_per       = [
			'manuscript.create'         =>  'admin/manuscript',
			'manuscript.unsubmit'       =>  'admin/manuscript/unsubmit',
			'manuscript.inScreening'    =>  'admin/manuscript/in-screening',
			'manuscript.inReview'       =>  'admin/manuscript/in-review',
			'manuscript.inEditing'      =>  'admin/manuscript/in-editing',
			'manuscript.rejected'       =>  'admin/manuscript/rejected',
			'manuscript.withdrawn'      =>  'admin/manuscript/withdrawn',
			'manuscript.published'      =>  'admin/manuscript/published',
	];
	public static $admin_per            = [
			'user.create'               =>  'admin/user/form',
			'user.index'                =>  'admin/user',
	];
	public static $degree           = [
			BACHELOR                =>  'Bachelor',
			MASTER                  =>  'Master',
			DOCTORAL                =>  'Doctoral',
			ASSOCIATE_PROFESSOR     =>  'Associate Professional',
			PROFESSOR               =>  'Professor',
	];
	public static $academic         = [
			MASTER_ECONOMIC         =>  'Master Economic',
			MASTER_SCIENCE          =>  'Master Science',
			DR_ECONOMIC             =>  'Doctor Economic',
			DR_SCIENCE              =>  'Doctor Science',
	];
	public static $actor            = [
			ADMIN                   => 'Administrator',
			AUTHOR                  => 'Author',
			MANAGING_EDITOR         => 'Managing Editor',
			SCREENING_EDITOR        => 'Screening Editor',
			SECTION_EDITOR          => 'Section Editor',
			REVIEWER                => 'Reviewer',
			CHIEF_EDITOR            => 'Chief Editor',
			COPY_EDITOR             => 'Copy Editor',
			LAYOUT_EDITOR           => 'Layout Editor',
			PRODUCTION_EDITOR       => 'Production Editor',
	];
	public static $actor_register   = [
			AUTHOR                  => 'Author',
			REVIEWER                => 'Reviewer',
	];
}
