public function testDario(): void {
  $_POST = [
    "email" => "dario@digitalhouse.com",
    "usuario" => "dariosus"
  ];
  
  $resultado = $this->bienvenida();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultado = strtolower($resultado);
  $this->assertTrue($resultado == "bienvenido dariosus. ha sido registrado con el email dario@digitalhouse.com", "La prueba falla con el email dario@digitalhouse.com y el usuario dariosus. Se esperaba 'Bienvenido dariosus. Ha sido registrado con el email dario@digitalhouse.com' y se recibió '$resultado'");
}

public function testAlejandro(): void {
  $_POST = [
    "email" => "alejandro@digitalhouse.com",
    "usuario" => "aleviv"
  ];
  
  $resultado = $this->bienvenida();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultado = strtolower($resultado);
  $this->assertTrue($resultado == "bienvenido aleviv. ha sido registrado con el email alejandro@digitalhouse.com", "La prueba falla con el email alejandro@digitalhouse.com y el usuario aleviv. Se esperaba 'Bienvenido aleviv. Ha sido registrado con el email alejandro@digitalhouse.com' y se recibió '$resultado'");
}

public /*...content...*/