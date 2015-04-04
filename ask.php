<?php
    $user = 'elementi_al';
    $password = 'PaUNpPuAm9195';
    $db = 'elementi_al';
    $host = 'localhost';
    
    $link = mysqli_init();
    $success = mysqli_real_connect($link, $host, $user, $password, $db);
    $query=mysqli_query("SELECT * FROM kikerdezo_kerdesek WHERE ID='".$_GET['id']."'");
    if (mysqli_num_rows()=0)
    {
        header("Location: message.php?a=Nem létező kérdéssor");
    }
    $sor=mysqli_fetch_assoc();
    if ($sor['public']==false && $_POST['pass']='')
    then echo "<form action='ask.php method='post'><input type='password name=""'><input type='submit=' value='Mehet!'></form>"
?>