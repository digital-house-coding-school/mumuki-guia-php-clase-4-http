public function testBusquedaRemeras(): void {
  $_GET = [
    "busqueda" => "Remeras"
  ];
  
  $resultado = $this->busqueda();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultado = strtolower($resultado);
  $this->assertTrue($resultado == "el termino buscado es remeras", "La prueba falla al ingresar a http://digitalcommerce.com/buscador.php?busqueda=Remeras");
}

public /*...content...*/