<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
  <div class="container mt-5">
    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php foreach ($teachers as $teacher): ?>
        <tr>
          <td><?= $teacher->name; ?></td>
          <td><?= $teacher->email; ?></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</body>
</html>