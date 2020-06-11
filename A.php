<?php

require_once('TheTrait.php');

class A {
	use TheTrait;

	public function ey() {
		$x = new B();
		$x->bee();
		return "a";
	}
}

require_once('B.php');

