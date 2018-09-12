public function testEmailCorrecto(): void {
  $_POST = [
    "email" => "dario@digitalhouse.com"
  ];
  
  $resultado = $this->validarEmail();
  
  $this->assertTrue(is_string($resultado), "La función no esta retornando un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "correcto", "La función falla con 'dario@digitalhouse.com' como email. Se recibió '$resultado' y se esperaba 'Correcto'");
}

public function testEmailVacio(): void {
  $_POST = [
    "email" => ""
  ];
  
  $resultado = $this->validarEmail();
  
  $this->assertTrue(is_string($resultado), "La función no esta retornando un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "el campo esta vacio", "La función falla con el email vacío. Se recibió '$resultado' y se esperaba 'El campo esta vacio'");
}

public function testEmailIncorrecto(): void {
  $_POST = [
    "email" => "dario@"
  ];
  
  $resultado = $this->validarEmail();
  
  $this->assertTrue(is_string($resultado), "La función no esta retornando un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "el campo no es un email", "La función falla con 'dario@' como email. Se recibió '$resultado' y se esperaba 'El campo no es un email'");
}

public /*...content...*/