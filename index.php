<?php
$a=[];
$mya=0;
$mya2=0;
$mya3=0;

for ($i=0; $i<50; $i++) {
    $a[] = rand(1, 100);
    echo $a[$i] . ",";

    if ($a[$i] > $mya) {
        $mya3 = $mya2;
        $mya2 = $mya;
        $mya = $a[$i];
    } elseif ($a[$i] > $mya2) {
        $mya3 = $mya2;
        $mya2 = $a[$i];
    } elseif ($a[$i] > $mya3) {
        $mya3 = $a[$i];
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
         <button type="submit" name="Espanol">Buscar los 3 mas grandes</button>
    </form>
</body>
</html>

<?php   

if (isset($_POST['Espanol'])) {
    echo"Los 3 mas grande son " . $mya . " ," . $mya2 . " ," . $mya3;
}

?>