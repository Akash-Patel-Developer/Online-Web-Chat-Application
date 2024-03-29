<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css?v= <?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="box1">
        <form method="POST" enctype="multipart/form-data" class="create">
            <p>
                <?php
                    $conn = new mysqli("localhost","root","","emp");
                    if($conn->connect_error){
                        echo "Problem dedected";
                    }else{
                        if($_SERVER['REQUEST_METHOD']=="POST"){
                            
                            if(isset($_POST['group-name']) && !empty($_POST['group-name'])){
                                $gName = $_POST['group-name'];
                                if($_FILES['icon']){
                                    $icon_name = $_FILES['icon']['name'];
                                    $icon_tmp = $_FILES['icon']['tmp_name'];
                                    $icon_size = $_FILES['icon']['size'];
                                    
                                    $icon_img_extension = pathinfo($icon_name,PATHINFO_EXTENSION);
                                    $icon_img_lc = strtolower($icon_img_extension);

                                    $icon_allowed_ext = array('jpg','jpeg','png');
                                    if(in_array($icon_img_lc,$icon_allowed_ext)){
                                        // $icon_new_img = uniqid("IMG-",TRUE). '.' . $icon_img_lc;
                                        $icon_path = 'upload/' . $icon_name;
                                        move_uploaded_file($icon_tmp,$icon_path);

                                        $sql_insert = "INSERT INTO `chat_group`(`gname`, `icon`) VALUES (?,?)";
                                        $insert_stmt = $conn->prepare($sql_insert);
                                        $insert_stmt->bind_param("ss",$gName,$icon_path);
                                        $insert_stmt->execute();
                                        $insert_stmt->store_result();
                                         
                                         if($insert_stmt->affected_rows==1){
                                             header("location:1.php");
                                         }else{
                                            echo "data can't send";
                                         }

                                        $conn->close();
                                        $insert_stmt->close();
                                    }else{
                                        echo "unknow error occured";
                                        header("location:group.php");
                                    }

                                }else{
                                    echo "plz enter you group icon";
                                }
                            }else{
                                echo "please first enter your group name";
                            }
                        }else{
                            
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
            <input type="submit" value="Save" class="submit" name="save">
        </form>
    </div>
    </div>
</body>
</html>