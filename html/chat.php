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

    <div class="wrapper">
        <section class="chat-area">
            <div class="header">
               <?php 
                    include_once "../php/config.php";
                    // $user_id = $_POST['user_id'];
                    // echo $user_id;
                    // if($_SERVER['REQUEST_METHOD'] == 'GET'){
                    //     echo "Request is get";
                    //     print_r($_GET);
                    // }
                    // else{
                    //     echo "request is not get";
                    // }
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id =  {$user_id}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>  
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="../php/images/<?php echo $row['img'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                    <p><?php echo $row['status'] ?></p>
                </div>
            </div>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aperiam veniam. Dolorem
                        </p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../img/portfolio-01.jpg">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aperiam veniam. Dolorem
                            .</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aperiam veniam. Dolorem
                        </p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../img/portfolio-01.jpg">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aperiam veniam. Dolorem
                            .</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aperiam veniam. Dolorem
                        </p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../img/portfolio-01.jpg">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aperiam veniam. Dolorem
                            .</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area">
                <input type="text" placeholder="Type a message here....">
                <button>
                    <i class="fab fa-telegram-plane"></i>
                </button>
            </form>
        </section>
    </div>
</body>

</html>