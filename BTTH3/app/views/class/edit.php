<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa thông tin sinh viên</title>
</head>
<body>
    <h1>Chỉnh sửa thông tin sinh viên```php
    <!DOCTYPE html>
    <html>
    <head>
        <title>Chỉnh sửa thông tin sinh viên</title>
    </head>
    <body>
        <h1>Chỉnh sửa thông tin sinh viên</h1>
        <form method="POST" action="update.php">
            <label for="name">Tên sinh viên:</label>
            <input type="text" name="name" id="name" value="<?php echo $student['name']; ?>" required><br>

            <!-- Các trường thông tin khác của sinh viên -->

            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
            <input type="submit" value="Lưu">
        </form>
        <a href="index.php">Quay lại danh sách</a>
    </body>
    </html>