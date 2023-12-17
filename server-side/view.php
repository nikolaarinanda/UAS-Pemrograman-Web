<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data dari Database Tanpa AJAX</title>
</head>
<body>

<div id="result">
    <h2>Data Pengguna</h2>
    <ul>
        <?php
        // Menampilkan data di halaman HTML
        foreach ($data as $row) {
            echo "<li>" . $row['nama'] . " - " . $row['email'] . "</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
