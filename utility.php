<html>
<head>
<style>
	.button1{
		background-color: AliceBlue;
	}
</style>
</head>
<script>
//BESARAN ATAU KECILKAN FON
var fontSize = 1;
function zoomIn() {
	fontSize += 0.1;
	document.body.style.fontSize = fontSize + "em";
}
function zoomOut() {
	fontSize -= 0.1;
	document.body.style.fontSize = fontSize + "em";
}
</script>
<center>
<table>
<tr>
<td id="date"></td>
<td><td>|<td><td>
<td><input type="button" value="++" onclick="zoomIn()" title="Besarkan teks"/></td>
<td><input type="button" value="--" onclick="zoomOut()" title="Kecilkan teks" /></td>
<td><button id= "color" class="button1" title="Warna teks hitam/biru">Warna</button></td>
<td><td>|<td><td>
<td id="time"></td>
</table>
<script>
//PAPRKAN TARIKH DAN MASA
	function doDate(){
		var s = new Date()
		var hours = s.getHours();
		mins = ('0'+s.getMinutes()).slice(-2);
		sec = ('0'+s.getSeconds()).slice(-2);
		month = s.getMonth()+1;
		document.getElementById("time").innerHTML = hours + ":"+mins+":"+sec;
	    document.getElementById("date").innerHTML = s.getDate() + "/"+ month +"/"+s.getFullYear();
	}
	setInterval(doDate, 1000);
</script>
</center>
<script>
//TUKAR WARNA TEKS KE BIRU ATAU HITAM
document.getElementById('color').onclick=changeColor;
var currentColor = "black";
function changeColor() {
	if(currentColor == "black"){
		document.body.style.color = "darkblue";
		currentColor = "darkblue";
	} else {
		document.body.style.color = "black";
		currentColor = "black";
	}
}
</script>
</html>