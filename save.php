<?php
require("users_end.php");
        if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if($username=="Janet Oduleke" && $password=12345){
                    
                }
        };

        if(isset($_POST['createpost'])) {
            $post_title = $_POST["title"];
            $post_body = $_POST["body"];
            $post_category = $_POST['selectCategory'];

            for($i=0; $i<count($_FILES['pic']['name']); $i++){
                $filename = $_FILES['pic']['name'][$i];
                if($_FILES['pic']['size'][$i]> 10240){
                    print("file is too big");
                }
                    $random = time().$i;
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $saved_pic = move_uploaded_file($_FILES['pic']['tmp_name'][$i], "pictures/$random.$ext");
                    // print_r($saved_pic);
                    if($saved_pic){
                        $createdPost = new CreatePost;
                        $createdPost->saveToExtrinsic($post_title, $post_body, $saved_pic);
                    }
                
            }
        }

        if(isset($_POST['signup'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $createdPost = new CreatePost;
            $createdPost->saveusers($firstname, $lastname, $username, $email, $password);
        }
        

?>