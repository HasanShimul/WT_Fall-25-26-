<?php
session_start();
// session mere fela
session_destroy();

//

header("Location:../start.php");
exit();
?>