<?php
include "../user/db.php";
$id=$_GET["id"];
mysqli_query($link,"delete from inventory where id=$id");
?>
<script>
  window.location = "inventory.php";
</script>