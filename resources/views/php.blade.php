<!DOCTYPE HTML>
<html>
<head>
  <title>Tugas PHP</title>
  <style>
    body {
      background-color: pink;
    }
  </style>
</head>
<body>

<?php
$name = $email = $jk = $motto = $nrp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $nrp = test_input($_POST["nrp"]);
  $motto = test_input($_POST["motto"]);
  $jk = test_input($_POST["jk"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center> <h2 style="background-color: white; margin: auto;">Form Data Mahasiswa</h2></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<pre style="color: white; font-size:x-large; font-weight:bolder">
  Name          : <input type="text" name="name">
  <br>
  E-mail        : <input type="text" name="email">
  <br>
  NRP           : <input type="text" name="nrp">
  <br>
  Motto         : <textarea name="motto" rows="5" cols="40"></textarea>
  <br>
  Jenis Kelamin :
  <input type="radio" name="jk" value="perempuan">Perempuan
  <input type="radio" name="jk" value="laki-laki">Laki-laki
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
</pre>
<?php
echo "<h2>Data Mahasiswa:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $nrp;
echo "<br>";
echo $motto;
echo "<br>";
echo $jk;
?>

</body>
</html>
