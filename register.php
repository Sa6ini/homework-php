<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    
    background-image: radial-gradient(circle at 30% 86%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 55% 100%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 40% 75%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 7% 99%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 69% 76%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 2% 35%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 14% 48%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 28% 87%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 65% 14%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 51% 36%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 6% 93%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),linear-gradient(135deg, rgb(23, 233, 173),rgb(29, 24, 208));
    }

    body {
    display: block;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }
    .form-signin {
        width: 100%;
        max-width: 330px;
        margin: auto;
        margin-top: 5%;
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
        input[type="text"] {
            margin-bottom:10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
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
    
        <h1 class="h3">Register page</h1>
        <form method="post">
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="text" name="fname" class="form-control" id="floatingInput" placeholder="First name" required>
                <label for="floatingInput">First name</label>
            </div>
            <div class="form-floating">
                <input type="text" name="lname" class="form-control" id="floatingInput" placeholder="Last name" required>
                <label for="floatingInput">Last name</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" name="con_pass" class="form-control" id="floatingPassword" placeholder="Confirm password" required>
                <label for="floatingPassword">Confirm password</label>
            </div>
            <label for="gender">Gender</label>
            <div>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="html">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label><br>
            </div>
            <div class="checkbox mb-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" value="1" name="remember_me" id="rememberMeSwitch">
                    <label class="form-check-label" for="rememberMeSwitch"> Remember me</label>
                </div>
            </div>
            <input type="submit" name="submit" value="Register">
        </form>
        <a href="login.php" style="color: white;">I already have an account</a>
    </main>
    <?php 
    $conn = new mysqli("localhost","root","","sergiev_db",);
    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
        $con_pass = filter_input(INPUT_POST, "con_pass", FILTER_SANITIZE_SPECIAL_CHARS);
        $gender = $_POST["gender"];
        //$rem = $_POST["remember_me"];
        if(empty($email)||empty($pass)){
            echo  "Please enter email/password";
        }
        elseif($pass != $con_pass){
            echo "Password doesn't match";
        }
        $result = $conn->query("SELECT * FROM form WHERE email='$email'");
        if($result->num_rows > 0){
            echo "This email already exists";
        }
        else{
            //$hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `form`(`id`, `username`,`name` , `lastname`, `email`, `pass`, `gender`, `time`) VALUES (NULL, '$username','$fname', '$lname','$email','$pass','$gender', current_timestamp())";
            $conn -> query($sql);
            echo "<script>window.location.assign('index.php');</script>";
        }

    }
    ?>
</body>
</html>