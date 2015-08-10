<?php 
	echo $this->Form->create();
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->button('Login');
	echo $this->Form->end();
 ?>