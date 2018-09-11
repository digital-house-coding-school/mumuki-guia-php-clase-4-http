public function testWalterWhite(): void {
  $_GET = [
    "nombre" => "Walter",
    "apellido" => "White"
  ];
  $resultado = $this->saludar();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultado = strtolower($resultado);
  $this->assertTrue($resultado == "hola walter white", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/saludar.php?nombre=Walter&apellido=White");
}

public function testJessePinkman(): void {
  $_GET = [
    "nombre" => "Jesse",
    "apellido" => "Pinkman"
  ];
  $resultado = $this->saludar();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultado = strtolower($resultado);
  $this->assertTrue($resultado == "hola jesse pinkman", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/saludar.php?nombre=Jesse&apellido=Pinkman");
}

public /*...content...*/
