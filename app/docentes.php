<?php
require_once('./db.php');

// getStudents() obtiene a todos los docentes
function getTeachers($query,$data=[])
{
  try {
    $db = getConnection();
    $stmt = $db->prepare($query);
    $exec = $stmt->execute($data);
    if ($exec) {
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      header('Content-Type: application/json');
      header($_SERVER["SERVER_PROTOCOL"] . ' 200 Ok');
      return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    } else {
      return infoMessage('Error interno del servidor', '500', 'Internal Server Error');
    }
  } catch (PDOException $e) {
    die('Error-> ' . $e->getMessage());
  }
}

## Mensaje de información
function infoMessage($msg, $code, $status)
{
  $err = [
    'message' => $msg,
    'code' => $code
  ];
  header('Content-Type: application/json');
  header($_SERVER["SERVER_PROTOCOL"] . ' ' . $code . ' ' . $status);
  return json_encode($err, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

## Ejecución de la función de consulta
$query = "SELECT id, cargo, perfil, ubigeo, institucion, nombres, apellidos, email, celular FROM docente";

if (isset($_GET['perfil'])) {
  $profile = $_GET['perfil'];
  $query .= " WHERE perfil=?";
  echo getTeachers($query, [$profile]);
} else {

  echo getTeachers($query);
}