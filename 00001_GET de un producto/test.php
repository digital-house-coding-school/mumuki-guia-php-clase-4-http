public function testProducto32(): void {
  $_GET = [
    "id" => 32
  ];
  $resultado = $this->describirProducto();
  $this->assertTrue($resultado == "producto 32", "El resultado no es el esperado cuando la URL es http://digitalcommerce.com/producto?id=32");
}

public /*...content...*/