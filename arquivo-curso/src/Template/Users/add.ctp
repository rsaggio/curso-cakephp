<?php 
	echo $this->Form->create($user,['action' => 'save']);
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->button('Cadastrar');
	echo $this->Form->end();
 ?>