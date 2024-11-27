<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
</head>
<body>
    <h1>Kalkulator PHP</h1>
    <form method="post" action="">
        <label for="num1">Masukkan angka pertama:</label>
        <input type="text" id="num1" name="num1" placeholder="angka pertama" required><br><br>
        <label for="num2">Masukkan angka kedua:</label>
        <input type="text" id="num2" name="num2" placeholder="angka kedua" required><br><br>
        <label for="operator">Pilih operator:</label>
        <select id="operator" name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select><br><br>
        <button type="submit" name="calculate">Hitung</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = '';

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operator) {
                case 'tambah':
                    $result = $num1 + $num2;
                    break;
                case 'kurang':
                    $result = $num1 - $num2;
                    break;
                case 'kali':
                    $result = $num1 * $num2;
                    break;
                case 'bagi':
                    // Memeriksa apakah num2 tidak sama dengan nol (untuk menghindari pembagian dengan nol)
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = 'Tidak dapat membagi dengan nol';
                    }
                    break;
                default:
                    $result = 'Operator tidak valid';
                    break;
            }
        } else {
            $result = 'Masukkan angka yang valid';
        }

        echo "<h2>Hasil: $result</h2>";
    }
    ?>
</body>
</html>
