<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Buscador en Tiempo Real con AJAX</title>
  <!-- ESTILOS -->
  <link href="css/estilos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>
  <header>
    <div class="alert alert-info">
      <h2>Buscador</h2>
    </div>

    <form action="" method="POST">
      <div class="col-sm-2">
        <select name="ubigeo" id="ubigeo" aria-controls="example1" class="form-control input-sm">
          <option value="">UBIGEO</option>
          <option value="ATE">ATE</option>
          <option value="LA MOLINA">LA MOLINA</option>
          <option value="CIENEGUILLA">CIENEGUILLA</option>
          <option value="LURIGANCHO">LURIGANCHO</option>
          <option value="SANTA ANITA">SANTA ANITA</option>
          <option value="CHACLACAYO">CHACLACAYO</option>
          <option value="CHACLACAYO">NO DEFINIDO</option>
        </select>
      </div>

      <div class="col-sm-2">
        <select name="cargo" id="cargo" aria-controls="example1" class="form-control input-sm">
          <option value="">CARGO</option>
          <option value="JEFE DE GESTIÓN PEDAGÓGICA">JEFE DE GESTIÓN PEDAGÓGICA</option>
          <option value="DIRECTOR DE UNIDAD DE GESTIÓN EDUCATIVA LOCAL">DIRECTOR DE UNIDAD DE GESTIÓN EDUCATIVA LOCAL
          </option>
          <option value="PROFESOR">PROFESOR</option>
          <option value="AUXILIAR DE EDUCACION">AUXILIAR DE EDUCACION</option>
          <option value="TRABAJADOR DE SERVICIO">TRABAJADOR DE SERVICIO</option>
          <option value="PROFESOR (FUNCIONES DE DIRECTOR)">PROFESOR (FUNCIONES DE DIRECTOR)</option>
          <option value="DIRECTOR I.E.">DIRECTOR I.E.</option>
        </select>
      </div>

      <div class="col-sm-2">
        <select name="perfil" id="perfil" aria-controls="example1" class="form-control input-sm">
          <option value="">PERFIL</option>
          <option value="DOCENTE">DOCENTE</option>
          <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
          <option value="CAS">CAS</option>
        </select>
      </div>

      <div class="col-sm-2">
        <select name="institucion" id="institucion" aria-controls="example1" class="form-control input-sm">
          <option value="">I. Educativa</option>
          <option value="SEDE UGEL N°06">SEDE UGEL N°06</option>
          <option value="PRONOEI">PRONOEI</option>
          <option value="096 GLADYS SUELDO MORALES">096 GLADYS SUELDO MORALES</option>
          <option value="134">134</option>
          <option value="137 LOS LAURELES">137 LOS LAURELES</option>
          <option value="141">141</option>
          <option value="142 GRUMETE MEDINA">142 GRUMETE MEDINA</option>
          <option value="162">162</option>
          <option value="164 JEAN PIAGET">164 JEAN PIAGET</option>
          <option value="167">167</option>
          <option value="168 MARIA E. MANTILLA ARIAS">168 MARIA E. MANTILLA ARIAS</option>
        </select>
      </div>
  </header>

  <section>
    <input type="text" placeholder="Buscar...">
  </section>

  <input type="submit" value="Buscar" name="busqueda" id="busqueda">
  </form>
  <section id="tabla_resultado">
    <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
    <table class="table">
      <thead>
        <tr class="bg-primary">
          <th>CARGO</th>
          <th>PERFIL</th>
          <th>UBIGEO</th>
          <th>I.E/ OTRA UBICACION</th>
          <th>NOMBRES</th>
          <th>APELLIDOS</th>
          <th>EMAIL</th>
          <th>CELULAR</th>
          <th><label><input type="checkbox">TODOS</label></th>
        </tr>
      </thead>
      <tbody id="Registers">

      </tbody>
    </table>
  </section>
  <!-- SCRIPTS JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/filter.js"></script>
</body>

</html>