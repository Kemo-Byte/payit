<?php
session_start();
    include "connect.php";


     $stmt = $conn ->prepare("SELECT username FROM users WHERE username=?");

        // $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        $stmt->execute(array($_POST['username']));

        if($stmt->rowCount() > 0 ){
            echo "1";
        }else{
            $user_name = $_POST['username'];
            $full_name = $_POST['full'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            
            $hashed_password = password_hash($password,PASSWORD_DEFAULT);
            if($password !== $confirm){
                echo "2";
            }else{
		
                $s= $conn->prepare("INSERT INTO users(username,password,fullname) VALUES (?,?,?)");
                // mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
                $s->execute(array($user_name,$hashed_password,$full_name));
            
		  echo "3";
        //   $s = $conn->prepare( 'INSERT INTO users SET username = :user, password = :pass, fullname = :full');

          // Clean data
	/*
          $this->title = htmlspecialchars(strip_tags($this->title));
          $this->body = htmlspecialchars(strip_tags($this->body));
          $this->author = htmlspecialchars(strip_tags($this->author));
          $this->category_id = htmlspecialchars(strip_tags($this->category_id));
	*/
          // Bind data
        //   $s->bindParam(':user', $user_name);
        //   $s->bindParam(':pass', $password);
        //   $s->bindParam(':full', $full_name);


          // Execute query
        //   $s->execute();
               
	
            }
        }
    // if(isset($_POST['save'])) {
    //     $user_name = $_POST['username'];
    //     $full_name = $_POST['full'];
    //     $password = $_POST['pass'];
    //     $confirm = $_POST['confirm'];

    //     // $sql = "SELECT username FROM users WHERE username='$user_name'";
    //     $stmt = $conn ->prepare("SELECT username FROM users WHERE username=?");

    //     // $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    //     $stmt->execute(array($user_name));

    //     $row = $stmt->fetch();
    //     // $row = mysqli_fetch_assoc($resultset);
        
    // if(!$row['username']){
    //     $s= $conn->prepare("INSERT INTO users(username,password,fullname) VALUES (?,?,?)");
    //     // mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
    //     $s->execute(array($user_name,$password,$full_name));
    //     echo "registered";
    // }
    // // elseif($password !== $confirm){
    // //     echo "2";
    // // }  
    // else {
    // echo "1";
    // }
    
?>

<?php
    // if(isset($_POST['btn-save'])) {
    // $user_name = $_POST['user_name'];
    //     $user_email = $_POST['user_email'];
    //     $user_password = $_POST['password'];
    //     $sql = "SELECT email FROM users WHERE email='$user_email'";
    //     $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    //     $row = mysqli_fetch_assoc($resultset);
    //     if(!$row['email']){
    //     $sql = "INSERT INTO users(`uid`, `user`, `pass`, `email`, `profile_photo`) VALUES (NULL, '$user_name', '$user_password', '$user_email', NULL)";
    //     mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
    //     echo "registered";
    // } else {
    // echo "1";
    // }
    // }
?>
