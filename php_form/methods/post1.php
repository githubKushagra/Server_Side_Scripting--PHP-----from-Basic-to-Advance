<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- executing our php code here -->
<?php

    $username_error = "";
    $useremail_error = "";
    $userpassword_error = "";
    $username = "";
    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST["username"])) {
            $username_error = "Please enter your username";
        }
        else {
            // sanitizing the username data before submitting to the server that comes from the form
            // htmlspecialchars(): Converts special characters (<, >, &, ', ") into HTML entities to prevent code injection attacks like XSS.
            $username = htmlspecialchars(trim($_POST['username']));

            // checking for any special symbol or no.
            // "/^[a-zA-Z ]+$/" means name can have a to z , A to Z and space with it and + means it can have space "or" characters
            if(!preg_match("/^[a-zA-Z ]+$/" , $username)){
                $username_error = "Username should contain only characters and space.";
            }
        }

        if(empty($_POST["email"])) {
            $useremail_error = "Please enter your email";
        } else {
            // Sanitize email and store it in a variable
            // $email = trim($email);
            // sanitizing the username data before submitting to the server that comes from the form
            // filter_var(): This function is versatile and can sanitize inputs based on the specified filter. For example:

            //     FILTER_SANITIZE_STRING: Removes tags and encodes special characters.
            //     FILTER_SANITIZE_EMAIL: Removes all illegal characters from an email address.
            //     FILTER_SANITIZE_URL: Removes all illegal characters from a URL.
            $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

        }

        if(empty($_POST["password"])) {
            $userpassword_error = "Please enter your password";
        } else {
            $password = $_POST['password'];
            if(strlen($password) > 10 || strlen($password) < 4) {
                $userpassword_error = "Password should be between 4 to 10 characters long.";
            }
            elseif (!preg_match("#[0-9]+#" , $password)) {
                $userpassword_error = "Password should contain atleast a digit";
            }
            elseif (!preg_match("#[a-z]+#" , $password)) {
                $userpassword_error = "Password should contain atleast a lowercase character";
            }
            elseif (!preg_match("#[A_Z]+#" , $password)) {
                $userpassword_error = "Password should contain atleast a uppercase character";
            }

            
        }

        // If both email and password are provided, show the success message and clear the form
        if(empty($username_error) && empty($useremail_error) && empty($userpassword_error)) {
            // alert message
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> Your email ' . $email . ' and password ' . $password . ' has successfully been sent to the database.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

            // Clear form by resetting the variables
            $username = "";
            $email = "";
            $password = "";
        }
    }

?>




<!-- form -->

    <!-- form -->
    <div class="container mt-5">
        <h1>Kindly fill the form</h1>
        <form action="/Server_Side_Scripting/php_form/methods/post1.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp"
                    value="<?php echo $username; ?>"> <!-- This will reflect the reset $username_error -->
                <span style="color: red"> <?php echo $username_error; ?> </span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                    value="<?php echo $email; ?>"> <!-- This will reflect the reset $email -->
                <span style="color: red"> <?php echo $useremail_error; ?> </span>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"
                    value="<?php echo $password; ?>"> <!-- This will reflect the reset $password -->
                <span style="color: red"> <?php echo $userpassword_error; ?> </span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>