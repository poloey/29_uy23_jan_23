<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <table>
      <tr>
        <th>name</th>
        <th>email</th>
      </tr>
      <?php foreach($teachers as $teacher): ?>
        <tr>
          <td><?= $teacher->name; ?></td>
          <td><?= $teacher->email; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>