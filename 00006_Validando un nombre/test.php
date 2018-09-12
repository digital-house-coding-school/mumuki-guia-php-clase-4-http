public function testNombreCompleto(): void {
  $_POST = [
    "nombre" => "Dario",
  ];
  
  $resultado = $this->validarNombre();
  $this->assertTrue(is_bool($resultado), "La función validarNombre no esta devolviendo un booleano...");
  
  $this->assertTrue($resultado, 'La prueba falla con un $_POST["nombre"] = "Dario"');
}

public function testNombreVacio(): void {
  $_POST = [
    "nombre" => "",
  ];
  
  $resultado = $this->validarNombre();
  $this->assertTrue(is_bool($resultado), "La función validarNombre no esta devolviendo un booleano...");
  
  $this->assertFalse($resultado, 'La prueba falla con un $_POST["nombre"] vacío');
}

public /*...content...*/