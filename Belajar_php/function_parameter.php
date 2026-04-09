<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function dengan Parameter</title>
</head>
<body>
    <?php
//Mendefinisikan fungsi dengan parameter
function sambutan ($nama, $waktu){
    echo "Selamat $waktu, $nama!";
}
//Memanggil dengan argumen
sambutan("candra", "pagi"); //Output: Selamat pagi candra
echo"<br>";
sambutan("Budi", "siang"); //Output: Selamat siang Budi
    ?>
</body>
</html>