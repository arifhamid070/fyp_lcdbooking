<?php 

if( !session_id() )
{
    session_start();
}

session_destroy();

?>

<script>
    alert("Anda sukses keluar!");
    self.location.replace("index.php");
</script>