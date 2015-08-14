<?php 
	echo $this->Form->create($contact);
	echo $this->Form->input('nome');
	echo $this->Form->input('email');
	echo $this->Form->input('msg');
	echo $this->Form->button('enviar');
	echo $this->Form->end();
 ?>