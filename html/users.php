<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>
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
                <li><a href="../index.html">Home</a></li>
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

    <div class="wrapper">
        <section class="users">
            <div class="header">
                <?php 
                    include_once "../php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <img src="../php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                        <p>Active</p>
                    </div>
                </div>
                <a href="login.php" class="logout">Logout</a>
            </div>
            <div class="search">
                <span class="text">Select a user to start a chat</span>
                <input type="text" placeholder="Enter name">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
            
            </div>
        </section>
    </div>

    <script src="../javascript/users.js"></script>
</body>

</html>