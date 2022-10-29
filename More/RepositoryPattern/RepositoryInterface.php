<?php 

namespace More\RepositoryPattern;

/**
 * 
 */
inteface RepositoryInterface
{
    public function all();
    public function show(int $id);
    public function create(array $data);
    public function insert(array $data);
    public function update($id, array $data);
    public function delete(int $id);
    public function destroy(array $ids);
}