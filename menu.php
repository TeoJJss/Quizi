<!--MENU SELEPAS BERJAYA LOGIN -->
<?php
if ($_SESSION['level']=="ADMIN")
{
?>
<!-- MENU ADMIN -->
<style>
	.m{
		position: fixed;
		top: 1px;
	}
	.dropbtn {
		background-color: paleturquoise;
  padding: 16px;
  font-size: 14px;
  border: none;
}
button{
	font-family: verdana;
}

.menu{
	background-color: paleturquoise;
	text-align: center;
}
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  opacity: 0;
  position: absolute;
  background-color: cornsilk;
  min-width: 140px;
  left: 0.1px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  transition: all 0.5s ease;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: yellow;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
	opacity: 1;
	}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: peachpuff;}
.profile{
	border-radius: 100%;
}
</style>
<BR><BR>
<center>
<div class="m">
<table height="5%" width="80%">
<tr class="menu" >
<td width="20%">
<div class="dropdown">
  <button class="dropbtn" title="Kuiz & Keputusan Pelajar">SOALAN</button>
  <div class="dropdown-content">
    <a href="papar_topik.php" title="Bina Kuiz Baharu">Kuiz</a>
    <a href="prestasi_topik.php" title="Keputusan Pelajar">Keputusan</a>
  </div>
 </div></td>
 <td width="20%">
 <div class="dropdown" title="Maklumat Pelajar">
    <button class="dropbtn">PELAJAR</button>
  <div class="dropdown-content">
    <a href="senarai_pelajar.php"  title="Senarai Pelajar">Senarai Pelajar</a>
    <a href="import_daftar.php"  title="Import CSV">Import Daftar</a>
  </div>
</div>
</td>
<td width="2%">
 <div class="dropdown">
    <button id="dash" class="dropbtn" width="50%">👤</button>
  <div class="dropdown-content">
    <a href="index2.php" title="Laman Utama">DashBoard</a>
    <a href="#" title="😥" onclick="logout()">Log Keluar</a>
	<script>
	function logout(){
		if(window.confirm("Anda pasti? 😥")){
			window.location="logout.php";
		}else{
			//null
		}
	}
</script>
  </div>
</div>
</td>
</tr>
</table>
</div>
</center>
</br>
<?php $pengguna="DASHBOARD GURU"; ?>
<?php
}else{
?>

<!--Menu Pelajar-->
<style>
	.m{
		position: fixed;
		top: 1px;
		left: 200px;
	}
		.dropbtn {
		background-color: none;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.menu{
	background-color: paleturquoise;
	text-align: center;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropbtn{
	background-color: paleturquoise;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  opacity: 0;
  position: absolute;
  background-color: cornsilk;
  min-width: 140px;
  left: 1px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  transition: all 0.5s ease;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: yellow;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
	opacity:1;
	}
\
/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
	background-color: #3e8e41;
}

.profile{
	border-radius: 100%;
}
</style>

<div class="m">
<table height="10%" width="80%">
<tr class="menu">
<td width="20%">
<div class="dropdown">
  <button class="dropbtn" title="Tugasan">SOALAN</button>
  <div class="dropdown-content">
    <a href="pilihan_topik.php" title="Kuiz">Mula Kuiz</a>
  </div>
 </div></td>
 <td width="20%"><button title="Prestasi" class="dropbtn" onclick="window.location.href='skor_individu.php'">Prestasi Anda</a></button></td>
<td width="5%">
 <div class="dropdown">
    <button id="dash" class="dropbtn" width="50%">👤</button>
  <div class="dropdown-content">
    <a href="index2.php">DashBoard</a>
    <a href="#" onclick="logout()">Log Keluar</a>
	<script>
	function logout(){
		if(window.confirm("Anda pasti? 😥")){
			window.location="logout.php";
		}else{
			//null
		}
	}
</script>
  </div>
</div>
</td>
</tr>
</table>

</div>
<?php $pengguna="DASHBOARD PELAJAR"; ?>

<?php
}
?>