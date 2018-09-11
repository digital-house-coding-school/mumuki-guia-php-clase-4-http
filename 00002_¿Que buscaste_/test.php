public function testBusquedaRemeras(): void {
  $_GET = [
    "busqueda" => "Remeras"
  ];
  
  $resultado = $this->busqueda();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "el termino buscado es remeras", "La prueba falla al ingresar a http://digitalcommerce.com/buscador.php?busqueda=Remeras. Se esperaba 'El termino buscado es Remeras' y se recibió '$resultado'");
}

public function testBusquedaPantalones(): void {
  $_GET = [
    "busqueda" => "Pantalones"
  ];
  
  $resultado = $this->busqueda();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "el termino buscado es pantalones", "La prueba falla al ingresar a http://digitalcommerce.com/buscador.php?busqueda=Pantalones. Se esperaba 'El termino buscado es Pantalones' y se recibió '$resultado'");
}

public function testBusquedaPantalonesPorFecha(): void {
  $_GET = [
    "busqueda" => "Pantalones",
    "ordenar" => "Fecha"
  ];
  
  $resultado = $this->busqueda();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "el termino buscado es pantalones ordenado por fecha", "La prueba falla al ingresar a http://digitalcommerce.com/buscador.php?busqueda=Pantalones&ordenar=Fecha. Se esperaba 'El termino buscado es Pantalones ordenado por Fecha' y se recibió '$resultado'");
}

public function testBusquedaRemerasPorPuntuacion(): void {
  $_GET = [
    "busqueda" => "Remeras",
    "ordenar" => "Puntuacion"
  ];
  
  $resultado = $this->busqueda();
  $this->assertTrue(is_string($resultado), "La función busqueda no esta devolviendo un string...");
  $resultadoF = strtolower($resultado);
  $this->assertTrue($resultadoF == "el termino buscado es remeras ordenado por puntuacion", "La prueba falla al ingresar a http://digitalcommerce.com/buscador.php?busqueda=Remeras&ordenar=Puntuacion. Se esperaba 'El termino buscado es Remeras ordenado por Puntuacion' y se recibió '$resultado'");
}

public /*...content...*/