<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello...</title>
</head>
<body>
<?php echo "<h1>I am running.</h1>"; ?>

<?php

$conn = mysqli_connect('mysql', 'user', 'password', "database");


$query = 'SELECT * From Testing';
$result = mysqli_query($conn, $query);

echo '<table>';
echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
    echo '<tr>';
    foreach ($value as $element) {
        echo '<td>' . $element . '</td>';
    }

    echo '</tr>';
}
echo '</table>';

$result->close();

mysqli_close($conn);

?>

</body>
</html>
