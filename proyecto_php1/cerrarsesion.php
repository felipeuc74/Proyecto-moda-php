<?php
session_start();
session_destroy();

//header("Location: inicio.php");
?>
<script>
	location.href = "inicio.php";
</script>