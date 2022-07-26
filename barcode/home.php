<?php 

if( !session_id() )
{
    session_start();
}

if(@$_SESSION['logged_in'] != true){
    echo '
    <script>
    	alert("Anda tidak punya akses ke Halaman");
    	self.location.replace("index.php");
    </script>';
}

?>

Welcome ! <br />
<a href="logout.php">Logout</a>