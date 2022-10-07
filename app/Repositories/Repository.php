<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * AbstractRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all records.
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Create a record.
     *
     * @param array array $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * Delete a record.
     *
     * @param string $id
     * @return int
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * Find a single record.
     *
     * @param string $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Update a record.
     *
     * @param array $data
     * @param string $id
     * @return bool
     */
    public function update($data, $id)
    {
        $model = $this->model->findOrFail($id);

        return $model->update($data);
    }

    /**
     * Update a record.
     *
     * @param array $data
     * @return bool
     */
    public function insert($data)
    {
        return $this->model->insert($data);
    }

    /**
     * Create a new model instance or return the first one matching
     * the given parameters.
     *
     * @param array $checkData
     * @param array $createData
     * @return object
     */
    public function firstOrCreate($checkData, $createData)
    {
        return $this->model->firstOrCreate($checkData, $createData);
    }
}
