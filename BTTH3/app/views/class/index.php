<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <h3>Danh sách sinh viên</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Email</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Tên lớp</th>
    </tr>
    <a href="add.php" class= 'btn btn-success'>Thêm mới sinh viên</a>
  </thead>
    <ul>
        <?php if (is_array($sinhvien) || is_object($sinhvien)):
        // Vòng lặp foreach
        foreach($sinhvien as $sinhvien):?>
    <tr>
        <th scope="row"><?= $sinhvien->getid(); ?></th>
        <td><?= $patient->gettenSinhVien(); ?></td>
        <td><?= $patient->getemail(); ?></td>
        <td><?= $patient->getngaySinh(); ?></td>
        <td><?= $patient->getidLop(); ?></td>
    </tr>
    </ul>
    
    <?php
        endforeach;
    endif;
    ?>
</body>
</html>