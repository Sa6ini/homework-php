<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <?php    
    $conn = new mysqli("localhost","root","","sergiev_db");
    session_start();

    if(isset($_POST["submit"])){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
        //$remeber = $_POST["remember_me"];
        //$hash = password_hash($pass, PASSWORD_DEFAULT);
        $sqlQuery = "SELECT * FROM `form` WHERE `email` = '$email' AND `pass` = '$pass'";
        $result = $conn->query($sqlQuery);
        //$result = $conn->query("SELECT * FROM `form` WHERE `email`='$email' LIMIT 1");
        $rows = mysqli_num_rows($result);
        //Проверка за потребител
        if($rows > 0){
            $row = mysqli_fetch_assoc($result);
            //while cikul
            if(isset($remeber)){
                setcookie("id", $row['id'], time() + 36000, "/");
            }
            $_SESSION["id"] = $row['id'];
            $id = $row['id'];
            //header('Location:index.php');
             echo "<script>window.location.assign('index.php/?id=$id');</script>";
        }
    }
    ?>
<style>
    
    html,
    body {
    height: 100%;
    }

    .bg {
    position:absolute;
    z-index:-1;
    top:0;
    right:0;
    bottom:0;
    left:0;
    }

    body {
    display: block;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-image: url(153710-abstract-blue-and-green-background-vector-illustration.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    }
    .form-signin {
        width: 100%;
        max-width: 330px;
        margin: auto;
        margin-top: 10%;
        border-style:solid;
        padding: 20px;
        border-radius: 3px;
    }

    .form-signin>.h1 {
        margin-top: 0px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        color:#fff;
        padding:15px;
        text-align:center;
    }

  
    .form-signin>form {
            padding:15px;
        }
        .form-signin>form>.btn{
            color:#fff;
            
        }
        .form-signin>form>.btn>:hover,:focus{
            background: rgba(255,255,255,0.1);
            box-shadow:none;
        }
        
        .form-signin>.form-control:focus {
            border-color:#ced4da;
            box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
        }
    
        .form-signin>.copyright {
            text-align:center;
            color:rgba(255,255,255,0.65);
        }
        
        .form-signin>.form-control {
            background:rgba(255,255,255,0.9);
        }
    
        .form-signin>.form-check {
            display:flex;
            align-items:center;
            color:rgba(255,255,255,0.65);
        }
        .form-signin>.form-check>label{
            font-size:0.9e;
        }
        .form-signin>input {
        margin-right:0.5em;
        }
        .form-signin>input>:checked{
            background-color:#9ce060;
            border-color: #81c63f;
        }
        .form-signin>.form-floating>:focus-within{
            z-index: 2;
        }
        
        input[type="email"] {
            margin-bottom:10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
    
</head>
<body>
    <div class="bg">


    </div>
    <main class="form-signin">
    
        <h1 class="h3">Login page</h1>
        <form method="post">
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" value="1" name="remember_me" id="rememberMeSwitch">
                    <label class="form-check-label" for="rememberMeSwitch"> Remember me</label>
                </div>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>
        <a href="/soc_mreja/register.php" style="color:white;">I don't have an account</a>
    </main>
</body>
</html>
