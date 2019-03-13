<?php

require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php");

$id = $_GET["id"];

$stmt = $pdo->prepare("Select * FROM `messages` WHERE `id`=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$message = $stmt->fetch();

// If no message is found
if (empty($message)){
    header("Location: contact.php");
    die();
}

ob_start();
require("./views/contact-view.view.php");
$content = ob_get_contents();
ob_end_clean();

require("./layouts/layout.php");

?>