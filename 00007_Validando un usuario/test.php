public function testUsernameCompleto(): void {
  $_POST = [
    "username" => "dariosus",
  ];
  
  $resultado = $this->validarUsername();
  
  $this->assertTrue(is_bool($resultado), "La función validarUsername no esta devolviendo un booleano...");
  
  $this->assertTrue($resultado, 'La prueba falla con un $_POST["username"] = "dariosus"');

  $_POST = [
    "username" => "",
  ];
  
  $resultado = $this->validarUsername();
  $this->assertTrue(is_bool($resultado), "La función validarUsername no esta devolviendo un booleano...");
  
  $this->assertTrue($resultado == false, 'La prueba falla con un $_POST["username"] vacío');

  $_POST = [
    "username" => "daro",
  ];
  
  $resultado = $this->validarUsername();
  $this->assertTrue(is_bool($resultado), "La función validarUsername no esta devolviendo un booleano...");
  
  $this->assertTrue($resultado == false, 'La prueba falla con un $_POST["username"] = "daro"');
}

public /*...content...*/