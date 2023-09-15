<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historique des connexions</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    table {
      border-collapse: collapse;
    }
    td {
      padding: 8px;
    }
    th {
      padding: 12px;
    }
    th:hover {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>
          ID connexion
        </th>
        <th>
          Adresse Mac
        </th>
        <th>
          Nom
        </th>
        <th>
          Email
        </th>
        <th>
          Date/heure
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
        $configPath = './config.json';
        $jsonString = file_get_contents($configPath);
        $jsonData = json_decode($jsonString, true);
        
        $connection = mysqli_connect($jsonData['dbServer'],$jsonData['dbUser'],$jsonData['dbPassword'],$jsonData['dbName']) or die('erreur de connection');

        $query = "SELECT * FROM logs ORDER BY `timestamp_conn` DESC";
        $exe = mysqli_query($connection, $query);
        if($exe) {
          while($ligne = mysqli_fetch_assoc($exe)) {
            echo "<tr>";
            echo "<td>".$ligne['ID_Log']."</td>";
            echo "<td>".$ligne['mac_addr']."</td>";
            echo "<td>".$ligne['name_usr']."</td>";
            echo "<td>".$ligne['email_usr']."</td>";
            echo "<td>".$ligne['timestamp_conn']."</td>";
            echo "</tr>";
          }
        }
        mysqli_close($connection);
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th>
          ID connexion
        </th>
        <th>
          Adresse Mac
        </th>
        <th>
          Nom
        </th>
        <th>
          Email
        </th>
        <th>
          Date/heure
        </th>
      </tr>
    </tfoot>
  </table>
</body>
</html>