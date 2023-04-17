<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User Data</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1>User Data</h1>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Profile Picture</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $file = fopen('users.csv', 'r');
            while (($userData = fgetcsv($file)) !== false) {
              echo '<tr>';
              echo '<td>' . $userData[0] . '</td>';
              echo '<td>' . $userData[1] . '</td>';
              echo '<td><img src="uploads/' . $userData[2] . '"></td>';
              echo '</tr>';
            }
            fclose($file);
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
