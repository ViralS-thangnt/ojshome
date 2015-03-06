<?php namespace App\Helpers;

class ConstantArray
{
    protected $author_per       = [CREATE_MNS, UPDATE_MNS, DELETE_MNS];
    protected $admin_per        = [CREATE_MNS, UPDATE_MNS, DELETE_MNS, CREATE_USER, UPDATE_USER, DELETE_USER];

    public function degree($degree_id)
    {
        switch ($degree_id) {
            case BACHELOR:
                return 'Bachelor';
            case MASTER:
                return 'Master';
            case DOCTORAL:
                return 'Doctoral';
            case ASSOCIATE_PROFESSOR:
                return 'Associate Professional';
            case PROFESSOR:
                return 'Professor';
        }
    }

    public function academic($academic_id)
    {
        switch ($academic_id) {
            case MASTER_ECONOMIC:
                return 'Master Economic';
            case MASTER_SCIENCE:
                return 'Master Science';
            case DR_ECONOMIC:
                return 'Doctor Economic';
            case DR_SCIENCE:
                return 'Doctor Science';
        }
    }

    public function actor($actor_no)
    {
        $actor_arr = explode(',', $actor_no);
        $actors = $this->list_actors();
        $actor = '';
        foreach($actor_arr as $key => $value) {
            if($key == count($actor_arr)-1) {
                $actor .= $actors[$value];    
            } else {
                $actor .= $actors[$value].', ';
            }
            
        }

        return $actor;
    }

    public function permission($actor_id)
    {
        switch ($actor_id) {
            case ADMIN:
                return $this->admin_per;
            case AUTHOR:
                return $this->author_per;
        }
    }

    public function list_actors()
    {
        return [
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

    public function list_degree()
    {
        return [
            BACHELOR                => 'Bachelor',
            MASTER                  => 'Master',
            DOCTORAL                => 'Doctoral',
            ASSOCIATE_PROFESSOR     => 'Associate Professor',
            PROFESSOR               => 'Professor',
        ];
    }

    public function list_academic()
    {
        return [
            MASTER_ECONOMIC         => 'Master Economic',
            MASTER_SCIENCE          => 'Master Science',
            DR_ECONOMIC             => 'Dr Economic',
            DR_SCIENCE              => 'Dr Science',
        ];
    }

    public function has_permission($require_per, $user_per){
        foreach ($require_per as $value) {
            if(in_array($value, $user_per))

                return true;
        }

        return false;
    }
}
