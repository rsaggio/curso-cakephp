<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
class ProdutosController extends AppController {


	public $paginate = [
        'limit' => 1
    ];

	public function initialize() {

		parent::initialize();

		$this->loadComponent('Paginator');

	}
	public function index() {

		$produtosTable = TableRegistry::get('Produtos');
		
		$produtos = $produtosTable->find('all');


		$this->set('produtos',$this->paginate($produtos));

		//$this->redirect('');

		//$this->render('');
		
	}

	public function novo() {
		
		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->newEntity();

		$this->set('produto',$produto);
	}

	public function edit($id) {

		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->get($id);		

		$this->set('produto',$produto);

		$this->render('novo');
	}

	public function delete($id) {
		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->get($id);

		if($produtosTable->delete($produto)) {
			$this->Flash->set("Produto removido com sucesso",['element'=> 'error']);
		}else {
			$this->Flash->set("Erro ao deletar o produto",['element'=> 'error']);
		}

		$this->redirect('Produtos/index');
	}
	public function salva() {

		$produtosTable = TableRegistry::get('Produtos');

		$produto = $produtosTable->newEntity($this->request->data());

		if($produtosTable->save($produto)) {
			$this->Flash->set("Produto inserido com sucesso");
		}
		else {
			$this->Flash->set("Erro ao inserir o produto",['element'=> 'error']);
		}

		$this->redirect('Produtos/index');

	}

}
?>