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
    <h2 class="mb-4">Crear Empleado</h2>
    <form action={{route('detodo.guardarProveedor')}} method="GET">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control"  name="nombre" placeholder="Nombre">
      </div>
     
      <div class="mb-3">
        <label for="fechaRegistro" class="form-label">Fecha de Registro:</label>
        <input type="date" class="form-control" name="fechaRegistro" placeholder="Fecha de registro">
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Telefono:</label>
        <input type="number" class="form-control" name="telefono" placeholder="Telefono">
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <input type="text" class="form-control" name="correo" placeholder="Correo">
      </div>
      <button type="submit" class="btn btn-primary me-2">Guardar</button>
      <a type="button" class="btn btn-secondary" href='{{route('detodo.verProveedores')}}'>Volver</a>
    </form>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+HDy0WLS/cQEKn5cFndV+a+8hjz/6Hv033v9aAz4MlSTSw5KcHV5L0H+2H" crossorigin="anonymous"></script>
</body>
</html>