<?php
include_once 'header.php';
?>

<section>
    <h2>Anmelden</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Benutzername/Email...">
        <input type="password" name="pwd" placeholder="Passwort...">
        <button type="submit" name="submit">Anmelden</button>
    </form>
</section>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fülle alles aus!</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p>Benutzername oder Passwort stimmt nicht überein!</p>";
    }
}
?>

<?php
include_once 'footer.php';
?>

