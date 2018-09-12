public function testTexto(): void {
  $_POST = [
    "edad" => "Hola!"
  ];
  
  $resultado = $this->validarEdad();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertFalase($resultado, "La función falla con el texto 'hola' como edad");
}

public function testMayorDeEdad(): void {
  $_POST = [
    "edad" => 18
  ];
  
  $resultado = $this->validarEdad();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertTrue($resultado, "La función falla con la edad 18");
}

public function testMayorDeEdad2(): void {
  $_POST = [
    "edad" => 32
  ];
  
  $resultado = $this->validarEdad();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertTrue($resultado, "La función falla con la edad 32");
}

public function testMenorDeEdad(): void {
  $_POST = [
    "edad" => 17
  ];
  
  $resultado = $this->validarEdad();
  
  $this->assertTrue(is_bool($resultado), "La función no esta retornando un booleano");
  
  $this->assertFalse($resultado, "La función falla con la edad 17");
}

public /*...content...*/