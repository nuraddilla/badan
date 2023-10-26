
<body>
<center>
<!-- menyediakan butang tukar warna font --> <button id= "color">Tukar Warna</button>
</center>
<script>
document.getElementById('color').onclick= changeColor; <!-- tukar warna di sini mengikut warna anda -->
var currentColor = "red";
function changeColor() {
if(currentColor
==
"red") {
document.body.style.color = "blue";
currentColor= "yellow";
document.body.style.color = "red";
currentColor= "purple";
} else {
}
</script> </body>