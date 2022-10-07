<?php

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * Get all records.
     *
     * @return mixed
     */
    public function all();

    /**
     * Create a record.
     *
     * @param array $data
     * @return mixed
     */
    public function create($data);

    /**
     * Delete a record.
     *
     * @param string $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Find a single record.
     *
     * @param string $id
     * @return mixed
     */
    public function show($id);

    /**
     * Update a record.
     *
     * @param array $data
     * @param string $id
     * @return mixed
     */
    public function update($data, $id);
}
