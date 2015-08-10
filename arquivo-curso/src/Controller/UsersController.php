<?php 
namespace App\Controller;

use Cake\ORM\TableRegistry;

class UsersController extends AppController {

	public function add() {
		$usersTable = TableRegistry::get('Users');

		$this->set('user',$usersTable->newEntity());
	}

	public function save() {
		$usersTable = TableRegistry::get('Users');

		$entity = $usersTable->newEntity($this->request->data());
		if($usersTable->save($entity)) {
			$this->Flash->set('Usuario inserido com sucesso!',['element' => 'success']);
		}else {
			$this->Flash->set('Usuario inserido com sucesso!',['element' => 'error']);
		}

		$this->redirect(['action' => 'add']);
	}

	public function login() {
		
	}
}

?>
