public function testBusquedaRemeras(): void {
  $_GET = [
    "busqueda" => "Remeras"
  ];
  $resultado = strtolower($this->busqueda());
  $this->assertTrue($resultado == "el termino buscado es remeras", "La prueba falla al ingresar a http://digitalcommerce.com/buscador.php?busqueda=Remeras");
}

public /*...content...*/