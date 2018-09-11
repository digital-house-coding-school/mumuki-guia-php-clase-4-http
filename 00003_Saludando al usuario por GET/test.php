public function testWalterWhite(): void {
  $_GET = [
    "nombre" => "Walter",
    "apellido" => "White"
  ];
  $resultado = $this->saludar();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultado = strtolower($resultado);
  $this->assertTrue($resultado == "hola walter white", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/saludar.php?nombre=Walter&apellido=White. Se esperaba 'Hola Walter White' y se recibió '$resultado'");
}

public function testJessePinkman(): void {
  $_GET = [
    "nombre" => "Jesse",
    "apellido" => "Pinkman"
  ];
  $resultado = $this->saludar();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultado = strtolower($resultado);
  $this->assertTrue($resultado == "hola jesse pinkman", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/saludar.php?nombre=Jesse&apellido=Pinkman. Se esperaba 'Hola Jesse Pinkman' y se recibió '$resultado'");
}

public /*...content...*/
