public function testProducto32(): void {
  $_GET = [
    "id" => 32
  ];
  $resultado = strtolower($this->describirProducto());
  $this->assertTrue($resultado == "producto 32", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/producto?id=32");
}

public function testProducto58(): void {
  $_GET = [
    "id" => 58
  ];
  $resultado = strtolower($this->describirProducto());
  $this->assertTrue($resultado == "producto 58", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/producto?id=58");
}

public /*...content...*/