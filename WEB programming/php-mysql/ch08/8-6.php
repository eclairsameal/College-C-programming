<?php
	Function MyFunction() {
		global $A,$B ;
		$A=$A+10;
                $B=$B+10;
	}
?>
<html>
<title>全域變數</title>
<body>
<?php
	$A=1 ;
	$B=2 ;
	echo "呼叫函數前 :<br>" ;
	echo "A = $A <br>" ;
	echo "B = $B <hr width=200 align=left>" ;
	MyFunction() ;
	echo "呼叫函數後 :<br>" ;
	echo "A = $A <br>" ;
	echo "B = $B <p>" ;
?>
</body>
</html>

