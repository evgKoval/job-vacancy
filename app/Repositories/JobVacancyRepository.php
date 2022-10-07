<?php

namespace App\Repositories;

use App\Models\JobVacancy;

class JobVacancyRepository extends Repository
{
    /**
     * Construct JobVacancyRepository.
     *
     * @param JobVacancy $model
     */
    public function __construct(JobVacancy $model)
    {
        parent::__construct($model);
    }
}
