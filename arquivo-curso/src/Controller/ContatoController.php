<?php 
namespace App\Controller;

use App\Form\ContactForm;

class ContatoController extends AppController {

	public function index() {
		$contact = new ContactForm(); 

		if($this->request->is('post')) {
			if($contact->execute($this->request->data())) {
				$this->Flash->success('Mensagem enviada com sucesso');
			}else {
				$this->Flash->error('Erro ao enviar a mensagem');
			}
		}

		$this->set('contact',$contact);
	}

}
?>
