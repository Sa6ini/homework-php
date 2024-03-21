<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        /* Resetting default browser styles */
        body, h1, h2, h3, p, ul, li, form, input, textarea, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav ul {
            list-style: none;
        }

        header nav ul li {
            display: inline;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }

        section {
            padding: 50px 0;
        }

        .about-me {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .about-me img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .about-me .bio h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .skills-list {
            list-style: none;
            padding-left: 0;
        }

        .skills-list li {
            display: inline-block;
            background-color: #eee;
            padding: 8px 16px;
            margin: 4px;
            border-radius: 4px;
        }

        .portfolio-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .portfolio-item {
            flex-basis: calc(33.33% - 20px);
            margin-bottom: 20px;
        }

        .portfolio-item img {
            max-width: 100%;
            border-radius: 8px;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
        }

        .contact-form textarea {
            resize: vertical;
        }

        .contact-form button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 768px) {
            .container {
                padding: 0 10px;
            }

            .about-me img {
                width: 150px;
                height: 150px;
                margin-right: 10px;
            }

            .about-me .bio h2 {
                font-size: 24px;
            }

            .portfolio-item {
                flex-basis: calc(50% - 10px);
            }
        }

        @media only screen and (max-width: 480px) {
            .about-me img {
                width: 100px;
                height: 100px;
                margin-right: 10px;
            }

            .about-me .bio h2 {
                font-size: 20px;
            }

            .portfolio-item {
                flex-basis: 100%;
            }
        }

    </style>
</head>
<body>
    <?php
        error_reporting(0);
        $conn = new mysqli("localhost","root","","sergiev_db");
        $profile_page_id = $_GET["id"];
        $sqlSelect = "SELECT * FROM `form` WHERE `id` = '$profile_page_id'";
        $result = $conn->query($sqlSelect);
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $lname = $row["lastname"];
        $username = $row["username"];
        $gender = $row["gender"];
        $image = $row["images"];
        if($image == ""){
            $image = "../user_images/default-profile-pic.jpg";
        }
        else{
            $image = "../user_images/$image";
        }
    ?>
    <header>
        <div class="container">
            <h1>About Me</h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="about" class="section">
        <div class="container">
            <div class="about-me">
                <img src="https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/U6PMNLLFATSSOZAODKKJN2RH4U.jpg&w=750&h=495" alt="Your Photo">
                <div class="bio">
                    <h2>Hello, I'm <?php echo $name;?>  <?php echo $lname; ?></h2>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis tristique sollicitudin nibh sit amet commodo nulla facilisi nullam. In fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Id aliquet risus feugiat in ante metus dictum. Ut consequat semper viverra nam libero justo. Malesuada fames ac turpis egestas sed tempus. Tellus at urna condimentum mattis pellentesque id nibh tortor. Molestie a iaculis at erat pellentesque. Nunc mi ipsum faucibus vitae aliquet. Nam aliquam sem et tortor. Vulputate eu scelerisque felis imperdiet. Viverra justo nec ultrices dui. Bibendum ut tristique et egestas quis. At elementum eu facilisis sed odio morbi. Urna neque viverra justo nec ultrices dui sapien. Neque convallis a cras semper.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="skills" class="section">
        <div class="container">
            <h2>Skills</h2>
            <ul class="skills-list">
                <li>HTML/CSS</li>
                <li>JavaScript</li>
                <li>Python</li>
                <!-- Add more skills as needed -->
            </ul>
        </div>
    </section>
    <section id="portfolio" class="section">
        <div class="container">
            <h2>Pictures</h2>
            <div class="portfolio-items">
                <!-- Add your portfolio items here -->
                <div class="portfolio-item">
                <img id="upload_image" src="<?php echo $image;?>" class="profile_img" onclick="chooseFile_1()">
                <form method="post" enctype="multipart/form-data">
                    <input class="upload_image_input" id="fileInput_1" name="fileInput_1" type="file" onchange="loadFile1(event)" style="display: none;"></input>
                    <input type="submit" id="upload_image_submit" name="upload_image_submit" style="display: none;">
                    <script>
                        function chooseFile_1() {
                            document.getElementById("fileInput_1").click();
                        } 
                        var loadFile1 = function(event) {
                            var output = document.getElementById("upload_image");
                            upload_image.src = URL.createObjectURL(event.target.files[0]);
                            upload_image.onload = function() {
                                URL.revokeObjectURL(upload_image.src) // free memory
                            }
                            document.getElementById("upload_image_submit").click();
                        };
                    </script>
                </form> 
                <p>Diam sollicitudin tempor id eu nisl nunc mi ipsum. Risus nec feugiat in fermentum posuere. Nunc mattis enim ut tellus elementum sagittis vitae et. Quam quisque id diam vel quam. Tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vestibulum morbi blandit cursus risus at. Vitae elementum curabitur vitae nunc sed velit dignissim. A lacus vestibulum sed arcu non odio euismod lacinia. </p>
                </div>
                <!-- Add more portfolio items as needed -->
            </div>
        </div>
    </section>
    <section id="contact" class="section">
        <div class="container">
            <h2>Contact</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Soc mreja. All rights reserved.</p>
        </div>
    </footer>
    
    <?php
        
        if(isset($_POST["upload_image_submit"])){
            $folder = 'user_images/';
            if($_FILES['fileInput_1']['tmp_name']!="") {
                unlink($image);
                $temp = explode(".", $_FILES["fileInput_1"]["name"]);
                // will be changed by the time and user's username
                $filename1 = round(microtime(true)) . '.' . end($temp);
                //declaring variables
                $filetmpname = $_FILES['fileInput_1']['tmp_name'];
                //folder where images will be uploaded
                //function for saving the uploaded images in a specific folder
                move_uploaded_file($filetmpname, $folder.$filename1);
                //inserting image details (in eg. image name) in the database
            }
            $sqlUpdate = "UPDATE `form` SET `images`='$filename1' WHERE `id` = '$profile_page_id'";
            if($conn->query($sqlUpdate)) {
                echo "
                    <script>
                    window.location.assign('');
                    </script>
                ";
            }
        }
    ?>
</body>
</html>
