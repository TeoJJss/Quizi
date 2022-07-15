<!--LENCONG KE HALAMAN UTAMA SELEPAS LOGOUT-->
<?php
	session_destroy();
	header("Location:index.php");
?>