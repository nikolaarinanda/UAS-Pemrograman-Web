<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Web Page</title>
    <!-- Pemanggilan kode css -->
    <link rel="stylesheet" href="client-side/css/style.css" />
  </head>
  <body>
    <!-- Judul halaman -->
    <h1>Input Data</h1>

    <!-- Form input -->
    <form method="post" action="">
      <table>
        <tr>
          <td>
            <label for="name">Nama:</label>
        </td>
          <td>
            <input type="text" name="name" id="name" required />
          </td>
        </tr>
        <tr>
          <td>
            <label for="email">Email:</label>
        </td>
          <td>
            <input type="email" name="email" id="email" required />
        </td>
        </tr>
        <tr>
          <td>
            <label for="subscribe">Subscribe:</label>
          </td>
          <td>
            <input type="checkbox" name="subscribe" id="subscribe" value="1" />
        </td>
        </tr>
        <tr>
          <td>
            <label>Jenis Kelamin:</label>
          </td>
          <td>
            <input type="radio" name="sex" id="Male" value="Male" />
            <label for="male">Laki-laki</label>
            <input type="radio" name="sex" id="Female" value="Female" />
            <label for="female">Perempuan</label>
          </td>
        </tr>
        <tr>
          <td>
              <!-- Button -->
              <button type="submit" name="create">Simpan</button>
              <!-- <button name="read">Tampilkan</button> -->
          </td>
        </tr>
      </table>
    </form>

    <?php
              include "koneksi.php";
              if(isset($_POS['create'])){
                mysqli_query($conn, "INSERT INTO akun (name, email, sex, subsribtion) VALUES
                ('$_POST[name]', '$_POST[email]', '$_POST[sex]', '$_POST[subscribtion])");
              }
            ?>

    <div class="read">
    <h2>Data Pengguna</h2>
    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Subscription</th>
      </tr>
      <?php
        include "koneksi.php";
        $no = 1;
        $read = mysqli_query($conn, "SELECT * FROM akun");
        while ($tampil = mysqli_fetch_array($read)) {
          echo "
          <tr>
            <td>$no</td>
            <td>$tampil[name]</td>
            <td>$tampil[email]</td>
            <td>$tampil[sex]</td>
            <td>$tampil[subscribtion]</td>
          </tr>";
          $no++;
        }
      ?>
    </table>
    </div>


    <script src="client-side/js/ajax.js"></script>
    <!-- <script src="client-side/js/script.js"></script> -->
  </body>
</html>
