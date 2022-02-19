<?php
include "../user/db.php";
$id=$_GET["id"];
mysqli_query($link,"delete from user_registration where id=$id");
?>
<script>
  window.location="add_new_user.php";
</script>