<?php
$a = file_get_contents('spisok3.json');
$json_de = json_decode($a, true);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Телефонная книга</title>
    <style>
        body {
            padding: 0 20px;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>

  <table border="1">
   <caption><h2>Телефонная книга</h2></caption>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Адрес</th>
        <th>Телефоны</th>
   </tr>
<?php
foreach ($json_de as $key => $arr) {
?>

<tr><td><?= $arr['firstName'] ?></td><td><?= $arr['lastName'] ?></td><td><?= $arr['address'] ?></td><td><?= $arr['phoneNumber'] ?></td></tr>

<?php
}
?>
</body>
</html>