<?php 

namespace More\RepositoryPattern;

/**
 * 
 */
class AbstractRepository implements RepositoryInterface
{
	protected Model $model;

	public function all(){
		return $this->model->get();
	}

	public function show($id){
		return $this->model->find($id);
	}

	public function create(array $data){
		return $this->model->create($data);
	}

	public function insert(array $data){
		return $this->model->insert($data);
	}

	public function update(int $id,array $data){
		return $this->model->update($id,$data);
	}

	public function delete(int $id){
		return $this->model->delete($id);
	}

	public function destroy(array $ids){
		return $this->model->destroy($id);
	}

	public function getModel(Model $model) : Model{
		return $this->model;
	}

	public function setModel(Model $model) : void{
		$this->model = $model;
	}

}