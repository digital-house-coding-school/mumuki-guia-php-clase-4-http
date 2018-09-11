public function testProducto32(): void {
  $_GET = [
    "id" => 32
  ];
  $resultado = $this->describirProducto();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "producto 32", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/producto.php?id=32. Se esperaba 'Producto 32' y se recibió '$resultado'");
}

public function testProducto58(): void {
  $_GET = [
    "id" => 58
  ];
  $resultado = $this->describirProducto();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "producto 58", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/producto.php?id=58. Se esperaba 'Producto 32' y se recibió '$resultado'");
}

public /*...content...*/