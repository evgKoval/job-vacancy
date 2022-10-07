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
     * A basic unit test example.
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
}
