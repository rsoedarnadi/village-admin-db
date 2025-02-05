<?php 
include "db_connect.php"; 
$NIK = $_GET['NIK']; 
 
$query = "DELETE FROM KK_KEL WHERE NIK = $NIK"; 
mysqli_query($kon, $query); 
 
?> 
<script language="JavaScript"> 
document.location='tables.php'</script> 
<?php 
?>