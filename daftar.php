
<?php
//sambung ke pangkalan data include "config.php"; //sambung fail header
include "header.php";
//semak sama ada data dengan ID pengguna nama telah dihantar if (isset($_POST['icpelajar'])) {
//pembolehubah untuk memegang data yang dihantar
$ic = $_POST['icpelajar'];
$nam = $_POST['nama'];
$jan = $_POST['jantina'];
$kel= $_POST['kelas'];
$id = $_POST['idkoku'];
//tambah rekod baru ke dalam table
$sql = "INSERT INTO daftar (icpelajar, nama, jantina, kelas, idkoku) VALUES ('$ic', '$nam', '$jan', 'Skel', 'Sid')";
// Melaksanakan pertanyaan sql dengan sambungan ke p.data
$hasil 'mysqli_query'($connect, $sql);
// semak untuk melihat jika ada sebarang rekod dalam pangkalan data // papar mesej berjaya atau gagal simpan rekod baru
if ($hasil) {
}else{
echo "<script>alert('PENDAFTARAN AHLI BERJAYA'); window.location="index.php' </script>";
echo "<script>alert('PENDAFTARAN AHLI GAGAL!'); window.location='daftar.php'</script>";
<!-- HTM1 Bermula -->
<html>
<h2>PENDAFTARAN AHLI</h2>
<body>
<fieldset>
<!-- Papar Borang Pendaftaran -->
<form method="POST">
<label>Nombor Kad Pengenalan</label><br>
<input type="text" name="icpelajar" placeholder="090807031234"
maxlength='12' size="15" onkeypress='return event.charCode>= 48 && event.charCode <= 57' required autofocus> <br>
<label>Nama Anda</label><br>
<input type="text" name="nama" id="nama" placeholder="Nama anda" size="60" required ><br>



<label>Jantina</label><br>
<input required="required" type="radio" name="jantina" value="LELAKI"> Lelaki
<input required="required" type="radio" name="jantina" value="PEREMPUAN"> Perempuan<br>



<!-- ubah nama kelas di sini --> <label>Kelas</label><br>
<select name="kelas" id="kelas "required > <option value="">--Pilih--</option> <option value="4SC1">4SC1</option>
<option value="4SC2">4SC2</option> <option value="4SC3">4SC3</option> <option value="4TK1">4TK1</option> <option value="4TK2">4TK2</option> <option value="4PG1">4PG1</option> <option value="4PG2">4PG2</option> </select><br>
<label>Pilih Satu Sahaja</label><br>
<select name="idkoku" required>
<?php
?>
$datal-mysqli_query($samb, "SELECT * FROM koku");
while ($infol=mysqli_fetch_array($data1))
{
}
echo "<option hidden selected> pilih anda -- </option>"; echo "<option>$info1 [namakoku]</option>";
</select><br>
<!-- butang daftar & reset -->
<button type="submit">Daftar</button>
<button type="reset">Reset</button><br><br> *Pilihan hanya dibenarkan sekali sahaja. </form>
<form action="index.php"><button type="submit">Home</button><br><br> </fieldset>
</body>
</html>

