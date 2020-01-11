<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method='post'>
<input name="angka" type="number">
<input type="submit">	
</form>
    
<?php

function triangle()
{
$segitiga = "2"."<br>"."3 5"."<br>"."7 11 13"."<br>"."17 19 23 29"."<br>"."31 37 41 43 47"."<br>"."53 59 61 67 71 73"."<br>"."79 83 89 97 101 103 107"."<br>"."109 113 127 131 137 139 149"."<br>"."151 157 163 167 173 179 181 191";
    
    
    if ($_POST['angka'] > 0 && $_POST['angka'] < 10) {
        echo $segitiga;
    }else{
        echo "";
    }
}


if(isset($_POST['angka'])){ triangle(); }
?>

</body>
</html>