<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
class ProdutosController extends AppController {

	public function index() {
		$produtosTable = TableRegistry::get('Produtos');
		
		$produtos = $produtosTable->find('all');

		$this->set('produtos',$produtos);
		
	}

	public function novo() {
		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->newEntity();

		$this->set('produto',$produto);
	}

}
?>