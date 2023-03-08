<?php

namespace ReactMVC\App\Models\Contracts;

interface CrudInterface{

    # Create (insert)
    public function create(array $data) : int;


    # Read (select) = single |  multiple
    public function find($id) : object;
    public function get(array $columns, array $where) : array;


    # Update Records
    public function update(array $data, array $where) : int;


    # Delete
    public function delete(array $where) : int;

}