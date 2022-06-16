<?php
class CreatePost {
    private $serverName = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "extrinsic_db";
    public $connection;
    public $post_title;
    public $post_body;

    public function __construct() {
        $this->connection = new mysqli($this->serverName, $this->username, $this->password, $this->dbName);
        if($this->connection->connect_error)  die("Something went wrong");
 
    }

    public function saveToExtrinsic($post_title, $post_body, $saved_pic) {
        $myquery = "INSERT INTO `posts`( `title`, `body`, `post_pic`) VALUES ('$post_title', '$post_body', '$saved_pic')";
        $query = mysqli_query($this->connection, $myquery);
        if($query) {
            echo("Post uploaded successfully");
        }
        else{
            echo ("Unsuccessful");
        }
    }

    public function saveUsers($firstname, $lastname, $username, $email, $password) {
        $user_query = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('$firstname', '$lastname', $username',
        '$email', '$password')";
        $query = mysqli_query($this->connection, $user_query);
        if($query) {
            echo("Signed up successfully. Kindly log in with your details");
        }
        else{
            echo ("Required details not provided");
        }
        x

    }
}
?>