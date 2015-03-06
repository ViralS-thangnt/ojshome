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

    public function actor($per_no)
    {
        $per_arr = explode(',', $per_no);

        if (empty(array_diff($per_arr, $this->admin_per))) {    
            return ADMIN;
        }

        if (empty(array_diff($per_arr, $this->author_per))) {
            return AUTHOR;
        }
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
}
