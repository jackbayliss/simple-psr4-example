<?php
namespace JackBayliss;

require_once 'vendor/autoload.php';

$user = new Models\User();

?>
<p>Hi, Your ID is..</p>

<?php 

echo $_SESSION['user'];


?>
