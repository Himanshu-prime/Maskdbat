<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maskdbat";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {
	if (!empty($_POST['uid']) && !empty($_POST['pwrd']) && !empty($_POST['phno'])) {
		$un = $_POST['uid'];
		$s = "select * from rel where username='$un'";
		$result = mysqli_query($conn, $s);
		$num = mysqli_num_rows($result);
		if ($num > 1) {
?>
			<script>
				alert("username taken");
			</script>
			<?php
		} else {

			$pwrd = $_POST['pwrd'];
			$length = strlen($pwrd);
			if($length<8){

				?>
				<script>alert("password too weak");</script>
				<?php

			}
			$phno = $_POST['phno'];

			$qurey = "INSERT INTO `rel` (`username`, `password`, `phno`) VALUES ('$un', '$pwrd','$phno');";
			$run = mysqli_query($conn, $qurey);
			if ($run) {
			?>
				<script>
					  function AlertSubject()
  {
					alert("Submitted");}
				</script>
			<?php
			} else { ?>
				<script>
					alert("Failed to submit");
				</script>
<?php
			}
		}
	}
}
?>
