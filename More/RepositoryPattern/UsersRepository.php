<?php 

namespace More\RepositoryPattern;

/**
 * 
 */
class UsersRepository extends AbstractRepository
{
	public function __construct(User $user){
		$this->setModel($user);
	}

}