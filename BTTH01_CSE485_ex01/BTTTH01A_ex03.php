<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
    table,
    tr,
    td { border: 2px solid black;
     border-collapse: collapse;
    }
</style>
<body>
    <table>
        <thead></thead>
        <tr>
            <th>Tên khóa học</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
            foreach ($arrs as $course) {
        ?>
            <tr>
                <td> <?= $course ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>