<html>
<body>

    <?php 
    // You can handle all form fields in a single PHP block
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    ?>

    Welcome <?php echo $name; ?> <br>
    Your email address and password is: <?php echo $email . " and " . $password; ?> <br>

</body>
</html>
