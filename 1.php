<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css?v=<?php echo time(); ?>">
    <title>Online-Chat-Application</title>
    <style></style>
</head>
<body>
<div class="container">
    <div class="box box1">
        <form method="POST" enctype="multipart/form-data" class="create">
            <p>
                <?php
                    $conn = new mysqli("localhost","root","","emp");

                    
                    
                    if($conn->connect_error){
                        echo "problem in database";
                    }else{
                        if($_SERVER['REQUEST_METHOD']){
                            if(isset($_POST['group-name']) && !empty($_POST['group-name'])){
                                $gName = $_POST['group-name'];
                                if(strlen($_POST['group-name'])<=10){
                                    if(isset($_FILES['icon'])){
                                     $icon_name = $_FILES['icon']['name'];
                                     $icon_size = $_FILES['icon']['size'];
                                     $icon_tmp = $_FILES['icon']['tmp_name'];
                                     $icon_ext = pathinfo($icon_name,PATHINFO_EXTENSION);
                                     $icon_strl = strtolower($icon_ext);
                                     $icon_allowed_ext = ['jpg','jpeg','png','svg','webp'];

                                     $icon_arry = in_array($icon_strl,$icon_allowed_ext);
                                     if($icon_arry){
                                        $icno_new_name = uniqid('IMG-',TRUE).'.'.$icon_strl;
                                        $icnon_upload_path = "images/".$icno_new_name;
                                        move_uploaded_file($icon_tmp,$icnon_upload_path);
                                     }else{
                                        echo "it's not working";
                                     }
                                     
                                    //  echo ;
                                     
                                    }else{
                                        echo "Please choose your icon";
                                    }
                                }else{
                                    echo "you group name must be uner 8.";
                                }
                            }else{
                                echo "plz enter you group name";
                            }
                        }else{
                            echo "not world";
                        }
                    }
                ?>
            </p>
            <br>
            <label>Group Name :</label>
            <br>
            <input type="text" name="group-name" placeholder="enter your group name" class="gName">
            <br><br>
            <label>Choose icon :</label>
            <input type="file" name="icon" id="">
            <br><br>
            <input type="submit" value="Save" class="submit">
        </form>
        <div class="h">GROUPS</div>
        <div class="group">
            <p class="p">HACKERS</p>
        </div>

        <div class="add">+
            <p class="add-p">Click and create your own group</p>
        </div>
        
    </div>
    <div class="box box2">
        <div class="friend">
            <h2>FRIENDS</h2>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
        <div class="online">
            <span class="img"></span>
            <div>
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
        </div>
    </div>
    <div class="box box3">
        <div class="person">
            <span class="img"></span>
            <div class="about">
                <span class="nickname">Ezra</span>
                <span class="on-off">Online</span>
            </div>
            <p class="time">15:56</p>
        </div>
        <div class="chat">
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
            <div class="left">Hllo world</div>   
            <p class="right">Hllo world</p>
        </div>
        <div class="inp">
            <label for="">Chat :</label>
            <input type="text" name="chat" placeholder="Chat--here">
        </div>
    </div>
    <div class="box box4">
        <h1>Themes</h1>
        <div class="imgs">
            <img src="./images/download.svg" alt="" class="img">
            <img src="./images/BG1.svg" alt="" class="img">
            <img src="./images/BG2.svg" alt="" class="img">
            <img src="./images/BG3.svg" alt="" class="img">
            <img src="./images/BG4.svg" alt="" class="img">
            <img src="./images/BG5.svg" alt="" class="img">
            <img src="./images/BG6.svg" alt="" class="img">
            <img src="./images/BG7.svg" alt="" class="img">
            <img src="./images/BG8.svg" alt="" class="img">
            <img src="./images/BG9.svg" alt="" class="img">
            <img src="./images/BG10.svg" alt="" class="img">
            <img src="./images/BG11.svg" alt="" class="img">
        </div>
    </div>
</div>
<script src="1.js"></script>
</body>
</html>