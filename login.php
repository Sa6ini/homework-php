<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @mixin glassmorphism() {
     background: rgba(255,255,255,0.05);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(255,255,255,0.2);
    border-left: 1px solid rgba(255,255,255,0.2);
    box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
    }
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
        border-style:solid;
        padding: 20px;
        @include glassmorphism();
        border-radius: 3px;
    }

        .h1 {
            @include glassmorphism();
            margin-top: 0px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            color:#fff;
            padding:15px;
            text-align:center;
        }

  
        form {
            padding:15px;
            
            .btn {
                @include glassmorphism;
                color:#fff;
            
                &:hover, &:focus {
                    background: rgba(255,255,255,0.1);
                    box-shadow:none;
                }
            }
    
            .form-control:focus {
            border-color:#ced4da;
            box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
            }
        }
        
        .form-control:focus {
            border-color:#ced4da;
            box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
        }
    
        .copyright {
            text-align:center;
            color:rgba(255,255,255,0.65);
        }
        
        .form-control {
            background:rgba(255,255,255,0.9);
        }
    
        .form-check {
            display:flex;
            align-items:center;
            color:rgba(255,255,255,0.65);
            label {
            font-size:0.9em;
            }
        }
        input {
        margin-right:0.5em;
        
            &:checked {
                background-color:#9ce060;
                border-color: #81c63f;
            }
        }
        .form-floating {
            &:focus-within {
                z-index: 2;
            }
        }
        
        input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
        <a href="test php.php">I don't have an account</a>
    </main>
    <?php 
    $conn = new mysqli("localhost","root","","sergiev_db",);
    if(isset($_POST["submit"])){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);
        $con_pass = filter_input(INPUT_POST, "con_pass", FILTER_SANITIZE_SPECIAL_CHARS);
        $gender = $_POST["gender"];
        //$rem = $_POST["remember_me"];
        //$exist = "SELECT FROM form (email)";
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
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO form (email, pass, gender) VALUES(?, ?, ?)");
            $stmt->bind_param("sss", $email, $hash, $gender);
            if($stmt->execute()){
                echo "User is registered!";
            }
            else{
                echo "User cannot be registered!";
            }
            $stmt->close();
        }

    }
    ?>
</body>
</html>