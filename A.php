<?php

require_once('TheTrait.php');
require_once('B.php');

class A {
	use TheTrait;

	public function ey() {
		return (new B())->bee();
		return "a";
	}
}
