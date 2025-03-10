<?php
error_reporting(1);
require_once "./connection/db_connection.php";
function getHostLink($folderPath = "")
{
    $link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/" . ltrim($folderPath, "/");
    return rtrim($link, "/");
}
$folderPath = $_SERVER['REQUEST_URI'];

if (isset($_GET['email'])) {
    $sql = "UPDATE email_list SET status=1 WHERE email_id='" . $_GET['email'] . "'";
    if (mysqli_query($connection, $sql)) {
        header("location:index.php");
    } else {
        $msgSend = "Cannot update";
    }
}
