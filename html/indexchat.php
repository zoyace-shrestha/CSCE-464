<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Zo</title>
    <link rel="stylesheet" href="../style.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
</head>

<body class="chatBody">
    <header>
        <a href="https://github.com/zoyace-shrestha/CSCE-464" target="_blank">
            <img src="../img/sumologo.png" alt="Sumo World Page" width="120px" />
        </a>
        <nav class="navbar">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Services</a>
                    <ul>
                        <li><a href="indexchat.php">Chat Zo</a></li>
                    </ul>
                </li>
                <li><a href="../index.html">Projects + </a>
                    <ul>
                        <li><a href="../html/nebraska.html">DXG UNL</a></li>
                        <li><a href="../html/bhoomi.html">Bhommi</a></li>
                        <li><a href="../html/sumoworld.html">SumoWorld</a></li>
                        <li><a href="../html/esatya.html">Esatya</a></li>
                    </ul>
                </li>
                <li><a href="../index.html">Contact +</a>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/zoyace-shrestha/" target="_blank">LinkedIn</a></li>
                        <li><a href="https://github.com/zoyace-shrestha" target="_blank">Github</a></li>
                        <li><a href="mailto:shresthazoyace@gmail.com">Email</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="wrapper body-form">
        <section class="form signup">
            <h1>Chat Along in Real Time</h1>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Email Address" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already Signed Up? <a href="login.php">Login</a></div>
        </section>
    </div>
    <script src="../javascript/password-show-hide.js"></script>
    <script src="../javascript/signup.js"></script>

</body>

</html>