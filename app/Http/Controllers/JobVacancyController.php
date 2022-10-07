<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobVacancyResource;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use App\Services\JobVacancyService;

class JobVacancyController extends Controller
{
    /**
     * Service for JobVacancyController.
     *
     * @var JobVacancyService
     */
    private JobVacancyService $jobVacancyService;

    /**
     * Construct JobVacancyController.
     *
     * @param JobVacancyService $jobVacancyService
     *
     * @return void
     */
    public function __construct(JobVacancyService $jobVacancyService)
    {
        $this->jobVacancyService = $jobVacancyService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JobVacancyResource|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $jobVacancies = $this->jobVacancyService->getAllVacancies();
        return JobVacancyResource::collection($jobVacancies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\JobVacancy $jobVacancy
     * @return JobVacancyResource
     */
    public function show(string $id)
    {
        $jobVacancy = $this->jobVacancyService->getJobVacancyById($id);
        return new JobVacancyResource($jobVacancy);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\JobVacancy $jobVacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobVacancy $jobVacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\JobVacancy $jobVacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobVacancy $jobVacancy)
    {
        //
    }
}
