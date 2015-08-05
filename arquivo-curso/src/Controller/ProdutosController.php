<?php 
namespace App\Controller;

class ProdutosController extends AppController {

	public function index() {
		$produtos = [];
		$produtos[] = ["id" => 1 , "nome" => "Hd de 20 gigas", "desc" => "marca super-HD", "preco" => 29.99];
		$produtos[] = ["id" => 2 , "nome" => "Mouse microsoft", "desc" => "Mouse muito bom", "preco" => 79.99];
		$produtos[] = ["id" => 3 , "nome" => "Iphone 6", "desc" => "Celular caro", "preco" => 3229.99];
		$this->set('produtos',$produtos);
		
	}

}
?>