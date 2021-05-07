<?php
include_once 'header.php';
?>
    <section>
        <h2>Registrieren</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Voller Name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Benutzername...">
            <input type="password" name="pwd" placeholder="Passwort...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button type="submit" name="submit">Registrieren</button>
        </form>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fülle alles aus!</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Gebe einen korrekten Benutzernamen an!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Benutze eine korrekte Email!</p>";
            }
            else if ($_GET["error"] == "passworddontmatch") {
                echo "<p>Passwort stimmt nicht überein!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Es ist ein Fehler aufgetreten, versuche es nochmal!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Benutzername schon vorhanden!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>Registrierung erfolgreich!</p>";
            }
        }
    ?>
    </section>
            <p>some Stuff</p>
            <?php
    include_once 'footer.php';
    ?>
