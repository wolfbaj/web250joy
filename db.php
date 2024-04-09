 <?php
$dbhost = "sql112.infinityfree.com";
$dbuser = "if0_35937576";
$dbpass = "J4lXOphgIIiz";
$db = "";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("if0_35937576_home");
 
?>