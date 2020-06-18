<?php
$conn_string="host=ec2-52-87-135-240.compute-1.amazonaws.com port=5432 dbname=dc7sdr5vold8kr user=wzpwspsasuqxgj password=baa04e77a98dfa1c92cf258ff906a448ccfce3e6abffc4177e3df0c9cbaa80cc";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAcc WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
