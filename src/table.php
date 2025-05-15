<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Multiplicar</title>
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
      background-color: #eee;
    }
  </style>
</head>

<body>
  <h2 style="text-align: center;">Tabla de Multiplicar del 1 al 10</h2>
  <table>
    <tr>
      <th>x</th>
      <?php
      for ($i = 1; $i <= 10; $i++) {
        echo "<th>$i</th>";
      }
      ?>
    </tr>
    <?php
    for ($row = 1; $row <= 10; $row++) {
      echo "<tr><th>$row</th>";
      for ($col = 1; $col <= 10; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>

  <p style="text-align: center;">
    <a href="index.php">Volver a la página principal</a>
  </p>

  <p style="text-align: center;">
    <a href="connection_db.php">Ver ejemplo de coneccion a la base de datos mysql</a>
  </p>
</body>

</html>