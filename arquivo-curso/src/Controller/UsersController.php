<?php 
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class UsersController extends AppController {

	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$this->Auth->allow(['add','save']);
	}

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

		if($this->request->is('post')) {
			$user = $this->Auth->identify();

			if($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}else {
				$this->Flash->set('Usuário ou senha inválidos',['element' => 'error']);
			}
		}

	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
}

?>
