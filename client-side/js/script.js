function submitForm() {
  // Validasi input sebelum diproses
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;

  if (name === "" || email === "") {
    alert("Name and email are required!");
    return;
  }

  // Simulasi pengambilan data dari server (dalam hal ini menggunakan objek JavaScript)
  var serverData = {
    name: name,
    email: email,
    subscribe: document.getElementById("subscribe").checked,
    gender: document.querySelector('input[name="gender"]:checked')
      ? document.querySelector('input[name="gender"]:checked').value
      : "",
  };

  // Membuat tabel dan menampilkan data dari server
  var table = document.createElement("table");
  var tbody = table.createTBody();

  for (var key in serverData) {
    var row = tbody.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = key;
    cell2.innerHTML = serverData[key];
  }

  // Menambahkan tabel ke dalam dokumen
  document.body.appendChild(table);
}
