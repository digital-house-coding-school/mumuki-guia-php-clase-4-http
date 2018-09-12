public function testUsernameCompleto(): void {
  $_POST = [
    "username" => "dariosus",
  ];
  
  $resultado = $this->validarUsername();
  $this->assertTrue(is_bool($resultado), "La función validarUsername no esta devolviendo un booleano...");
  
  $this->assertTrue($resultado, 'La prueba falla con un $_POST["username"] = "dariosus"');
}

public function testUsernameVacio(): void {
  $_POST = [
    "username" => "",
  ];
  
  $resultado = $this->validarUsername();
  $this->assertTrue(is_bool($resultado), "La función validarUsername no esta devolviendo un booleano...");
  
  $this->assertFalse($resultado, 'La prueba falla con un $_POST["username"] vacío');
}

public function testUsernameCorto(): void {
  $_POST = [
    "username" => "sus",
  ];
  
  $resultado = $this->validarUsername();
  $this->assertTrue(is_bool($resultado), "La función validarUsername no esta devolviendo un booleano...");
  var_dump($_POST["username"],strlen($_POST["username"],$resultado);exit;
  $this->assertFalse($resultado, 'La prueba falla con un $_POST["username"] = "sus"');
}

public /*...content...*/