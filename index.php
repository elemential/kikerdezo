<?php
    session_start();
    if (isset($_SESSION['user']))
    {
        header("Location: message.php?a=Automatikus bejelentkezés");
    }
?>

<center>
<table>
<tr>
<td>Felhasználónév: </td><td><input type="text" name="user" placeholder="Griffin Péter"></td>
</tr>
<tr>
<td>Jelszó: </td><td><input type="password" name="pass" placeholder="PéterGriffin"></td>
</tr>
<tr>
<td>Bejelentkezés: </td><td><input type="submit" value="Ok!"></td>
</tr>
</table>
</center>