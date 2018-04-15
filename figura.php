<?php
/**
 * Ficheiro coa definición da clase <b>Figura</b> e os seus derivados .
 *
 * Define a clase Figura xunto coas súas propiedades, construtor e métodos tendo en consideración
 * as potenciais clases filla existentes
 *
 * @package	Proxecto1
 * @license	https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
 * @author	Julio Mosquera González <julio.mosquera@edu.xunta.es>
 * @version	Version 0.6.4
 */

	
	/**
	* Clase abstracta Figura
	*
	* @package	Proxecto1
	* @license	https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
	* @author	Julio Mosquera González <julio.mosquera@edu.xunta.es>
	* @version	Version 0.6.4
	* @property-read String $nome Nome da figura. Non se pode modificar
	*/	
	abstract class Figura{
		
		/**
		* @var string $nome	Indica o nome da figura
		*/
		private $nome;
 
		/**
		* Construtor da clase Figura
		*
		* @param string $nome Nome da figura
		* @return void
		*/
		public function __construct($nome){
			$this->nome = $nome;
		}
		
		/**
		* Destrutor da clase Figura
		*		
		* @return void
		*/
		function __destruct() {
			print "<p>Destruíndo obxecto Figura " . $this->nome . ".</p>\n";
		}
		
		/**
		* Getter da propiedade nome de Figura
		*
		* @return string Devolve o contido da propiedade $nome
		*/
		public function getNome(){
			return $this->nome;
		}

		/**
		* Calcula o perímetro da figura. É un método abstracto
		*
		* @return double Devolve o perímetro da figura
		*/
		abstract public function perimetro();
		
		/**
		* Calcula a área da figura. É un método abstracto
		*
		* @return double Devolve a área da figura
		*/
		abstract public function area();
	}
 
 	/**
	* Clase Rectangulo
	*
	* @package	Proxecto1
	* @license	https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
	* @author	Julio Mosquera González <julio.mosquera@edu.xunta.es>
	* @version	Version 0.6.8
	* @property double $base Base do rectángulo
	* @property double $altura Altura do rectángulo
	*/
	class Rectangulo extends Figura{
		
		
		/**
		* @var double $base	Indica a base do rectángulo
		*/
		private $base;
		
		/**
		* @var double $altura	Indica a altura do rectángulo
		*/
		private $altura;
 
		/**
		* Construtor da clase Rectangulo
		*
		* @param double $base Base do rectángulo
		* @param double $altura Altura do rectángulo
		* @return void
		*/
		public function __construct($base, $altura){
			parent::__construct("Rectángulo");
			$this->base = $base;
			$this->altura = $altura;
		}
		
		/**
		* Función que calcula o perímetro do rectángulo
		* 
		* @return double Devolve o perímetro do rectángulo
		*/
		public function perimetro(){
			return $this->base * 2 + $this->altura * 2;
		}
		
		/**
		* Función que calcula a área do rectángulo
		* 
		* @return double Devolve a área do rectángulo
		*/		
		
		public function area(){
			return $this->base * $this->altura;
		}
		
		/**
		* Getter da propiedade base
		*
		* @return double
		*/
		public function getBase(){
			return $this->base;
		}
		
		/**
		* Getter da propiedade altura
		*
		* @return double
		*/
		public function getAltura(){
			return $this->altura;
		}
		
		/**
		* Setter da propiedade base
		*
		* @param double 
		* @return void
		*/
		public function setBase($base){
			$this->base = $base;
		}
		
		/**
		* Setter da propiedade altura
		*
		* @param double 
		* @return void
		*/
		public function setAltura($altura){
			$this->altura = $altura;
		}		
}

 	/**
	* Clase Circulo
	*
	* @package	Proxecto1
	* @license	https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
	* @author	Julio Mosquera González <julio.mosquera@edu.xunta.es>
	* @version	Version 0.6.9
	* @property double $radio Radio do círculo
	*/
	class Circulo extends Figura{
			
		/**
		* @var double $radio Indica o radio do circulo
		*/
		private $radio;
		
		/**
		* @var double PI Indica o número PI
		*/
		const PI = 3.14159265;
 
		/**
		* Construtor da clase Circulo
		*
		* @param double $radio Radio do círculo
		* @return void
		*/
		public function __construct($radio){
			parent::__construct("Círculo");
			$this->radio = $radio;
		}
		
		/**
		* Función que calcula o perímetro do círuclo
		* 
		* @return double Devolve o perímetro do círculo
		*/
		public function perimetro(){
			return $this->radio * 2 * $this::PI;
		}
		
		/**
		* Función que calcula a área do círuclo
		* 
		* @return double Devolve a área do círculo
		*/		
		public function area(){
			return pow($this->radio,2) * $this::PI;
		}
		
				
		
		/**
		* Getter da propiedade radio
		*
		* @return double
		*/
		public function getRadio(){
			return $this->radio;
		}
		
		/**
		* Setter da propiedade radio
		*
		* @param double 
		* @return void
		*/
		public function setRadio($radio){
			$this->radio = $radio;
		}		
}

	
?>