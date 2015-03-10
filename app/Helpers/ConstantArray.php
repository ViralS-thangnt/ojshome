<?php namespace App\Helpers;

class ConstantArray
{
    public static $author_per       = [CREATE_MNS, UPDATE_MNS, DELETE_MNS];
    public static $admin_per        = [CREATE_MNS, UPDATE_MNS, DELETE_MNS, CREATE_USER, UPDATE_USER, DELETE_USER];
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
}
