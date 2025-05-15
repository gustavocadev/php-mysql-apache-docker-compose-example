<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Productos</title>
  <style>
    table {
      border-collapse: collapse;
      margin: 20px auto;
    }

    th,
    td {
      border: 1px solid #333;
      padding: 8px 12px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <h2 style="text-align:center;">Lista de Productos</h2>

  <?php
  $host = 'db'; // nombre del servicio en docker-compose
  $db = 'testdb';
  $user = 'root';
  $pass = 'root';
  $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try {
    $pdo = new PDO($dsn, $user, $pass);
    // Mostrar errores de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, nombre, precio FROM productos");

    echo "<table>
            <tr><th>ID</th><th>Nombre</th><th>Precio</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['precio']}</td>
              </tr>";
    }
    echo "</table>";
  } catch (PDOException $e) {
    echo "<p style='color:red; text-align:center;'>Error: " . $e->getMessage() . "</p>";
  }
  ?>

  <p style="text-align: center;">
    <a href="index.php">Volver a la página principal</a>
  </p>

</body>

</html>