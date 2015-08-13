<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProdutosTable extends Table {
	
	public function validationDefault(Validator $validator) {

		$validator->requirePresence('nome',true)->notEmpty('nome');		
		$validator->add('descricao',[
			'minLenght' => [
				'rule' => ['minLength',10],
				'message' => 'A descrição deve ter pelo menos 10 caracteres'
			]
		]);
		
		return $validator;
	}
}


 ?>