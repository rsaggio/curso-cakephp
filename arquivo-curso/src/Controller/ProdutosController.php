<?php 
namespace App\Controller;

class ProdutosController extends AppController {

	public function index() {
		$msg = "Uma mensagem qualquer";
		$this->set('msg',$msg);
		
	}

}
?>