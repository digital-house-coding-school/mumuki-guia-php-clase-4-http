public function testDario(): void {
  $_POST = [
    "email" => "dario@digitalhouse.com",
    "usuario" => ""
  ];
  
  $resultado = $this->bienvenida();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "bienvenido dario@digitalhouse.com", "La prueba falla con el email dario@digitalhouse.com y el usuario vacío. Se esperaba 'Bienvenido dario@digitalhouse.com' y se recibió '$resultado'");
}

public function testAlejandro(): void {
  $_POST = [
    "email" => "alejandro@digitalhouse.com",
    "usuario" => "aleviv"
  ];
  
  $resultado = $this->bienvenida();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "bienvenido aleviv. ha sido registrado con el email alejandro@digitalhouse.com", "La prueba falla con el email alejandro@digitalhouse.com y el usuario aleviv. Se esperaba 'Bienvenido aleviv. Ha sido registrado con el email alejandro@digitalhouse.com' y se recibió '$resultado'");
}

public /*...content...*/