<?php
	include "connectDB.php";
	//header('Content-Type: text/html; charset=utf-8');

	$bno = $_GET['idx'];

    // Event DB에서도 지워야 하니까... 구독객체 가져와서
    $rlt = $dbConnect->query("SELECT subscription FROM Subscribers WHERE idx='$bno'");
    $row=mysqli_fetch_array($rlt);
    $sub=json_decode($row[0]);
    $endpoint = $sub->endpoint;
    
    // Cafe DB에서 지움
	$rlt2 = $dbConnect->query("delete from Subscribers where idx='$bno';");
    $row2=mysqli_fetch_array($rlt2);

    echo "<script>alert('삭제되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0 url=../html/control.html" />
