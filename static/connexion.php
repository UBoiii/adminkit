<?php
$hasharray = array("cost" => 10);
//connexion vers la base de données
$link=mysqli_connect("198.57.149.90","ensaketc_root","Th15UnH4C*C48L","ensaketc_dbadm") or die ("Echec de connexion à la base");
function kill_session($path)
{
    session_unset();
    session_destroy();
    if ($path)
        exit(header($path));
}

global $_SESSION;
$expire_time = 10;
function check()
{
    global $expire_time;
    if ($_SESSION['last_activity'] < time() - $expire_time) {
        header('Location: logout.php');
    } else {
        $_SESSION['last_activity'] = time();
    }
}
?>