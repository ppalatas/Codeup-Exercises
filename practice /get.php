<!--

    $_GET requests are like $_POST requests, except they get the data and append it to your
    URL

    If I had a form like this:
    -->

    <form method="get" action="get.php">
        <input type="text" name="username">
        <input type="button" name="submit" value="yes">
    </form>

<!--
    If I were to add an h3 class to the page, referencing the username, I would say
-->
    <?php
        if(isset($_GET['username']))
        {
            $username = $_GET['username'];
        }
        else
        {
            $username = "Guest";
        }
    ?>

    <h3><?php echo $username; ?></h3>

<!--
    If I don't submit... or "isset()", my $username will be "Guest"
    Otherwise, it will be whatever I typed into the "username" input field
-->