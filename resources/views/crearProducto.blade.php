<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Empleado</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Crear Producto</h2>
    <form action={{route('detodo.guardarProducto')}} method="GET">
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion:</label>
        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
      </div>
      <div class="mb-3">
        <label for="precio" class="form-label">Precio:</label>
        <input type="text" class="form-control" name="precio" placeholder="Precio">
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number" class="form-control" name="stock" placeholder="Stock">
      </div>
      <div class="mb-3">
        <label for="pagaIsv" class="form-label">Pago Isv:</label>
        <input type="boolean" class="form-control" name="pagaIsv" placeholder="Pago Isv">
      </div>
      <button type="submit" class="btn btn-primary me-2">Guardar</button>
      <a type="button" class="btn btn-secondary" href='{{route('detodo.verProductos')}}'>Volver</a>
    </form>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+HDy0WLS/cQEKn5cFndV+a+8hjz/6Hv033v9aAz4MlSTSw5KcHV5L0H+2H" crossorigin="anonymous"></script>
</body>
</html>