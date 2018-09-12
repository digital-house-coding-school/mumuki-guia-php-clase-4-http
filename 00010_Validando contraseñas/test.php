public function testAmbasVacias(): void {
  $_POST = [
    "password" => "",
    "confirmar" => "",
  ];
  
  $resultado = $this->validarPass();
  
  $this->assertTrue(is_string($resultado), "La función no devuelve un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "los dos campos de contraseña estan vacios", "La función falla si ambos campos estan vacíos. Se recibió '$resultado' y se esperaba 'Los dos campos de contraseña estan vacios'");
}

public /*...content...*/