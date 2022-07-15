<!-- Menu untuk halaman sebelum daftar masuk -->
<style>
	.m{
		position: fixed;
		top: 1px;
	}
	.menu{
		background-color: paleturquoise;
	}
	td{
		text-align: center;
	}
	a{
		font-family: arial black;
		
	}
	.dropbtn {
		background-color: paleturquoise;
  padding: 16px;
  font-size: 15px;
  border: none;
}
button{
	font-color: black;
		font-size: 15px;
	font-family: new century schoolbook;
}

.dropdown {
  position: relative;
  display: inline-block;
}

/* DROPDOWN MENU */
/* KANDUNGAN DROPDOWN */
.dropdown-content {
  opacity: 0;
  position: absolute;
  background-color: snow;
  min-width: 170px;
  left: 1px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  transition: all 0.5s ease;
}

/* CORAK PAUTAN DALAM DROPDOWN */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* WARNA KANDUNGAN TUKAR JIKA DILEGAR */
.dropdown-content a:hover {background-color: yellow;}

/* MENU DROPDOWN WUJUD JIKA DILEGAR */
.dropdown:hover .dropdown-content {
	opacity: 1;
	}

/* WARNA BUTANG TUKAR JIKA DILEGAR */
.dropdown:hover .dropbtn {background-color: peachpuff;}
.profile{
	border-radius: 100%;
}

.home{ 
	font-size: 25px;
	font-family: papyrus;
}
</style>
<center>
<div class="m">
<table height="10%" width="75%" border="0">
<tr class="menu">
<td width="5%">
	<b><a class="home" href='index.php' title="Kembali Laman Utama">🏠</b></button>
</td>
<td class="null" width="50%"><?php include 'utility.php' ?> </td>
<td width="5%">
	<div class="dropdown">
		<button class="dropbtn" title="Profil">LogMasuk/DaftarBaru</button>
		  <div class="dropdown-content">
			<a href="login.php">Log Masuk</a>
			<a href="daftar_baru.php">Daftar Baru</a>
		  </div>
	</div>
</td>
</tr>
</table>
</div>
</center>
