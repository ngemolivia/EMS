<?php
session_destroy();
echo "<script>
  alert('logout successful');
document.location.href='http://localhost/project/index.php'

  </script>";

?>