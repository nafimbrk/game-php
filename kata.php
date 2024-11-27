<?php

$kata_kunci = array("apel", "jeruk", "pisang", "mangga", "anggur");

$kata_terpilih = $kata_kunci[array_rand($kata_kunci)];

$pesan = "";

if(isset($_POST['submit'])){
    $tebakan = strtolower($_POST['tebakan']);

    if(is_numeric($tebakan)){
        $pesan = "Maaf, tebakan harus berupa kata, bukan angka. Coba lagi!";
    } else {
        if($tebakan == $kata_terpilih){
            $pesan = "Selamat! Anda berhasil menebak kata '{$kata_terpilih}'.";
        } else {
            $pesan = "Maaf, tebakan Anda salah. Coba lagi!";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Tebak Kata</title>
</head>
<body>

    <h1>Game Tebak Kata</h1>
    <p>masukan kata berikut...</p>
    <p><?php echo $pesan; ?></p>

    <form method="post" action="">
        <label for="tebakan">Tebakan Anda:</label>
        <input type="text" id="tebakan" name="tebakan">
        <input type="submit" name="submit" value="Tebak">
    </form>

</body>
</html>
