<?php 
class Animal {
	public $color;
	public $habitat;
	protected $hervivoro= true;
	protected $especie ;
	

	public function __construct($color, $habitat) {
		$this->color = $color;
		$this->habitat = $habitat;
		$this->especie = ($this->hervivoro) ? 'Carnivoro' : 'hervivoros';
	}
	
	public function Reproduccion() {
		return print('<p> Su Repruducciòn es Oviparos, lo que significa que ponen huevos</p>');
	}
	public function RepMam() {
		return print('<p> Su Repruducciòn es vivípara, es atraves del embrion</p>');
	}
	
	public function mas_info() {
		return print('<ul>
	
				<li>Color <b>' . $this->color . '</b></li>
				<li>habitat <b>' . $this->habitat . '</b></li>
				<li>especie <b>' . $this->especie . '</b></li>
			</ul>');
	}	
}

class Reptil extends Animal {
	protected $hervivoro = false;

	public function __construct($color, $habitat) {
		parent::__construct($color, $habitat);
	}
}

final class Tortuga extends Reptil {
	public $hervivoro = false;
	public $patas = false;

	public function __construct($color, $habitat) {
		parent::__construct($color, $habitat);
	}

	public function mas_info() {
		return print('<ul>
				<li>color <b>' . $this->color . '</b></li>
				<li>habitat <b>' . $this->habitat . '</b></li>
				<li>Especie <b>' . $this->especie . '</b></li>
				<li>cuatro patas</li>
			</ul>');
	}
}

final class Cocodrilo extends Reptil {
	public $hervivoro = true;
	public $patas = false;

	public function __construct($color, $habitat) {
		parent::__construct($color, $habitat);
	}

	public function mas_info() {
		return print('<ul>
				<li>color <b>' . $this->color . '</b></li>
				<li>habitat <b>' . $this->habitat . '</b></li>
				<li>Especie <b>' . $this->especie . '</b></li>
				<li>cuatro patas</li>
			</ul>');
	}
}

final class Camaleon extends Reptil {
	public $hervivoro = false;
	public $patas = false;

	public function __construct($color, $habitat) {
		parent::__construct($color, $habitat);
	}

	public function mas_info() {
		return print('<ul>
				<li>color <b>' . $this->color . '</b></li>
				<li>habitat <b>' . $this->habitat . '</b></li>
				<li>Especie <b>' . $this->especie . '</b></li>
				<li>cuatro patas</li>
			</ul>');
	}
}


class Mamifero extends Animal {
	protected $hervivoro = true;

	public function __construct($color, $habitat) {
		parent::__construct($color, $habitat);
	}
	
}


final class Leon extends Mamifero {
	public $hervivoro = true;
	public $patas = false;

	public function __construct($color, $habitat) {
		parent::__construct($color, $habitat);
	}
	

	public function mas_info() {
		return print('<ul>
				<li>color <b>' . $this->color . '</b></li>
				<li>habitat <b>' . $this->habitat . '</b></li>
				<li>Especie <b>' . $this->especie . '</b></li>
				<li>cuatro patas</li>
			</ul>');
	}
}

final class Gato extends Mamifero {
	public $hervivoro = true;
	public $patas = false;

	public function __construct($color, $habitat) {
		parent::__construct($color, $habitat);
	}
	

	public function mas_info() {
		return print('<ul>
				<li>color <b>' . $this->color . '</b></li>
				<li>habitat <b>' . $this->habitat . '</b></li>
				<li>Especie <b>' . $this->especie . '</b></li>
				<li>cuatro patas</li>
				<li>Son agiles</li>
			</ul>');
	}
}


//clases que heredan de la clase padre animal y sus jerarquias { }

echo '<h1>Herencia Animal</h1>';

echo '<h2>Animal:</h2>';
$Herenc = new Animal('variados', 'Acuatica,Terreste,Aereo');
$Herenc->Reproduccion();
$Herenc->mas_info();

echo '<h2>Reptil:</h2>';
$HerenRep = new Reptil('variados', 'Acuatica,Terreste,Aereo ');
$HerenRep->Reproduccion();
$HerenRep->mas_info();

echo '<h2>Tortuga:</h2>';
$HerencTor = new Tortuga('Verde', 'Acuatica');
$HerencTor->Reproduccion();
$HerencTor->mas_info();

echo '<h2>Cocodrilo:</h2>';
$HerencCo = new Cocodrilo('Verde Oscuro ', 'Terrestre');
$HerencCo->Reproduccion();
$HerencCo->mas_info();

echo '<h2>Camaleon:</h2>';
$HerencCo = new Camaleon('Segun estado de animo ', 'Terrestre');
$HerencCo->Reproduccion();
$HerencCo->mas_info();

echo '<h2>Mamifero:</h2>';
$HerenRep = new Mamifero('variados', 'Terreste ');
$HerenRep->RepMam();
$HerenRep->mas_info();

echo '<h2>Leon:</h2>';
$HerencL = new Leon('`Castaño ', 'Terrestre');
$HerencCo->RepMam();
$HerencL->mas_info();

echo '<h2>Gato:</h2>';
$HerencL = new Gato('Combinados ', 'Terrestre');
$HerencCo->RepMam();
$HerencL->mas_info();