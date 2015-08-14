<?php 
namespace App\Form;

use Cake\Network\Email\Email;
use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;


class ContactForm extends Form {

	protected function _buildSchema(Schema $schema) {
		return $schema->addField('nome','string')->
		addField('email',['type' => 'string'])->
		addField('msg',['type' => 'text']);
	}

	protected function _buildValidator(Validator $validator) {
		$validator->notEmpty('nome');
		$validator->notEmpty('email');
		$validator->notEmpty('msg');
		$validator->add('msg',[
			"minLength" => [
				"rule" => ['minLength',10],
				"message" => "A mensagem deve ter pelo menos 10 letras"
			]
		]);

		return $validator;
	}

	protected function _execute(array $data) {
		// aqui vai a lógica
		$email = new Email('gmail');
		$email->to('cursocakephp@gmail.com');
		$email->subject('contato do sistema');

		$msg = "
			<b>De:</b> {$data['nome']}<br />
			<b>Email:</b> {$data['email']}<br />
			<b>msg:</b> {$data['msg']}<br />
		";

		return $email->send($msg);
		
	}
 }
