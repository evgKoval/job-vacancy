<?php

namespace Tests\Unit;

use App\Models\JobVacancy;
use App\Services\JobVacancyService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class JobVacancyServiceTest extends TestCase
{
    use DatabaseMigrations;

    private JobVacancyService $jobVacancyService;

    public function setUp(): void
    {
        parent::setUp();

        $this->jobVacancyService = resolve(JobVacancyService::class);
    }

    /**
     * A user can fetch a list of vacancies.
     *
     * @return void
     */
    public function test_a_user_can_fetch_a_list_of_vacancies()
    {
        JobVacancy::factory(10)->create();

        $result = $this->jobVacancyService->getAllVacancies();

        $this->assertInstanceOf(Collection::class, $result);
        $this->assertCount(10, $result);
    }

    /**
     * A user can fetch a single job vacancy.
     *
     * @return void
     */
    public function test_a_user_can_fecth_a_single_job_vacancy()
    {
        $jobVacancy = JobVacancy::factory()->create();

        $result = $this->jobVacancyService->getJobVacancyById($jobVacancy->id);

        $this->assertInstanceOf(JobVacancy::class, $result);
        $this->assertEquals($jobVacancy->title, $result->title);
        $this->assertEquals($jobVacancy->description, $result->description);
    }
}
