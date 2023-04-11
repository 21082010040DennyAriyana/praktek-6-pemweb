<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo "Halo, " . $name . "!";
    echo "<br>";
    echo "Silakan klik link di bawah ini untuk mencoba:";
    echo "<br>";
    echo "<a href='cekcookies.php?nama=" . $name . "'>Cek Cookies</a>";
    echo "<br>";
    echo "<a href='post.php?nama=" . $name . "'>Post Name & Email</a>";
    echo "<br>";
    echo "<a href='Proses.php?nama=" . $name . "'>Nilai</a>";
  }
}
?>

</body>
</html>
