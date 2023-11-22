<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pendaftaran Relawan</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 20px;
}
h1, h2 {
  text-align: center;
}
form, .pendaftaran{
  border: 1px solid blue;
  padding: 20px;
  border-radius: 8px;
  max-width: 400px;
  margin: 0 auto;
  margin-bottom: 20px;
}
label {
  display: block;
  margin-bottom: 8px;
}
input, select {
  width: calc(100% - 16px);
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
}
button {
  padding: 10px 20px;
  background-color: green;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button.cancel {
  background-color: black;
}

</style>
</head>
<body>
<h1>pendaftaran Relawan</h1>
<form id="pendaftaran-form" action="process_input.php" method="post">
  <label for="nama">Nama:</label>
  <input type="text" name="nama" required><br>

  <label for="tanggal_lahir">Tanggal Lahir:</label>
  <input type="date" name="tanggal" required> 

  <label for="jenis_kelamin">Jenis Kelamin:</label>
  <select name="gender" required>
    <option value="Pria">Pria</option>
    <option value="Wanita">Wanita</option>
  </select><br>

  <label for="alamat">Alamat:</label>
  <input type="text" name="alamat" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required><br>

  <label for="no_hp">No Hp:</label>
  <input type="number" name="no_ktp" required><br>

  <label for="keahlian">keahlian:</label>
  <input type="text" name="keahlian" required> 

  <button type="submit">Simpan</button>
  <button type="button" class="cancel" onclick="resetForm()">Cancel</button>
</form>

</body>
</html>