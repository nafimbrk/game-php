<?php

$angka_terpilih = rand(1, 100);

$pesan = "";

if(isset($_POST['submit'])){
    $tebakan = $_POST['tebakan'];

    if(!is_numeric($tebakan)){
        $pesan = "Maaf, tebakan harus berupa angka. Coba lagi!";
    } else {
        if($tebakan == $angka_terpilih){
            $pesan = "Selamat! Anda berhasil menebak angka {$angka_terpilih}.";
        } else {
            if ($tebakan < $angka_terpilih) {
                $pesan = "Tebakan terlalu rendah. Coba lagi!";
            } else {
                $pesan = "Tebakan terlalu tinggi. Coba lagi!";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Tebak Angka</title>
</head>
<body>

    <h1>Game Tebak Angka</h1>
    <p>Masukkan angka tebakan (1-100):</p>
    <p><?php echo $pesan; ?></p>

    <form method="post" action="">
        <label for="tebakan">Tebakan Anda:</label>
        <input type="text" id="tebakan" name="tebakan">
        <input type="submit" name="submit" value="Tebak">
    </form>

</body>
</html>
