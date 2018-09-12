public function testEmailCorrecto(): void {
  $_POST = [
    "email" => "dario@digitalhouse.com"
  ];
  
  $resultado = $this->validarEmail();
  
  $this->assertTrue(is_string($resultado), "La función no esta retornando un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "correcto", "La función falla con 'dario@digitalhouse.como' como email. Se recibió $resultado y se esperaba 'Correcto'");
}

public /*...content...*/