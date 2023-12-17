<?php

class DataManager {
    private $koneksi;

    // Konstruktor untuk inisialisasi koneksi
    public function __construct($host, $username, $password, $database) {
        $this->koneksi = mysqli_connect($host, $username, $password, $database);

        if (!$this->koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }

    // Metode untuk menambahkan data
    public function createData($name, $email, $subscribe, $gender) {
        $name = mysqli_real_escape_string($this->koneksi, $name);
        $email = mysqli_real_escape_string($this->koneksi, $email);
        $subscribe = mysqli_real_escape_string($this->koneksi, $subscribe);
        $gender = mysqli_real_escape_string($this->koneksi, $gender);

        $query = "INSERT INTO mydata (name, email, subscribe, gender) VALUES ('$name', '$email', '$subscribe', '$gender')";
        mysqli_query($this->koneksi, $query);
    }

    public function readData() {
        // Query untuk mengambil data (misalnya, tabel 'mydata')
        $query = "SELECT * FROM mydata";
        $result = mysqli_query($this->koneksi, $query);

        // Mengumpulkan data menjadi array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        include_once('view.php');
    }

    // // Metode untuk menghapus data
    // public function deleteData() {
    //     $query = "DELETE FROM mydata";
    //     mysqli_query($this->koneksi, $query);
    // }

    // Metode untuk menutup koneksi ke database
    public function closeConnection() {
        mysqli_close($this->koneksi);
    }
}

// Membuat objek dari kelas DataManager
$dataManager = new DataManager("localhost", "root", "", "akun"); 

// Tangkap data dari formulir
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$subscribe = isset($_POST['subscribe']) ? $_POST['subscribe'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';

// Proses sesuai tombol yang ditekan
if (isset($_POST['create'])) {
    // Panggil metode createData
    $dataManager->createData($name, $email, $subscribe, $gender);
} 

// elseif (isset($_POST['delete'])) {
//     // Panggil metode deleteData
//     $dataManager->deleteData();
// }

// Panggil metode closeConnection
$dataManager->closeConnection();

?>