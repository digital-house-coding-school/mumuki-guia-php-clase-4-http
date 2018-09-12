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

public function testSinPass(): void {
  $_POST = [
    "password" => "",
    "confirmar" => "123",
  ];
  
  $resultado = $this->validarPass();
  
  $this->assertTrue(is_string($resultado), "La función no devuelve un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "la contraseña esta vacia", "La función falla si solo la contraseña esta vacía. Se recibió '$resultado' y se esperaba 'La contraseña esta vacia'");
}

public function testSinConfirmar(): void {
  $_POST = [
    "password" => "123",
    "confirmar" => "",
  ];
  
  $resultado = $this->validarPass();
  
  $this->assertTrue(is_string($resultado), "La función no devuelve un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "falta la confirmacion de contraseña", "La función falla si solo la confirmación esta vacía. Se recibió '$resultado' y se esperaba 'Falta la confirmacion de contraseña'");
}

public function testNoVerifica(): void {
  $_POST = [
    "password" => "123",
    "confirmar" => "111",
  ];
  
  $resultado = $this->validarPass();
  
  $this->assertTrue(is_string($resultado), "La función no devuelve un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "las contraseñas no verifican", "La función falla si ambas contraseñas son diferentes. Se recibió '$resultado' y se esperaba 'Las contraseñas no verifican'");
}

public function testCorrecto(): void {
  $_POST = [
    "password" => "123",
    "confirmar" => "123",
  ];
  
  $resultado = $this->validarPass();
  
  $this->assertTrue(is_string($resultado), "La función no devuelve un string");
  
  $resultadoF = strtolower($resultado);
  
  $this->assertTrue($resultadoF == "correcto", "La función falla si ambas contraseñas estan completas y son iguales. Se recibió '$resultado' y se esperaba 'Correcto'");
}

public /*...content...*/