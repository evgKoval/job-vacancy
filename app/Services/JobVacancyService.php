<?php

namespace App\Services;

use App\Repositories\JobVacancyRepository;

class JobVacancyService
{
    /**
     * Repository for JobVacancyService.
     *
     * @var JobVacancyRepository
     */
    private JobVacancyRepository $jobVacancyRepository;

    /**
     * Construct JobVacancyService.
     *
     * @param JobVacancyRepository $jobVacancyRepository
     * @return void
     */
    public function __construct(JobVacancyRepository $jobVacancyRepository)
    {
        $this->jobVacancyRepository = $jobVacancyRepository;
    }

    /**
     * Get all job vacancies.
     *
     * @return mixed
     */
    public function getAllVacancies()
    {
        return $this->jobVacancyRepository->all();
    }
}
