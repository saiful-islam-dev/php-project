<?php
    include_once "db.php";

    $id = $_GET['id'];
    
    $query = "SELECT id, name, uname, email, photo FROM users WHERE id = $id";

    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)){
        $data = mysqli_fetch_assoc($result);
    }


    



//uplode query


    $error = [];
    if(isset($_POST['submit'])){
        $name = trim(htmlentities($_POST["name"]));
        $uname = trim(htmlentities($_POST["uname"]));
        $email = trim(htmlentities($_POST["email"]));
        $photo = $_FILES["photo"];



        
        if(empty($error)){  
            if($photo['name']){

                $img_ext = explode('.', $photo['name']);
    
                $photo_name = $name."-".time().'.'.end($img_ext);
                
                
                $upload = move_uploaded_file($photo['tmp_name'], "uploads/profile/" .$photo_name);

                $filePath = "uploads/profile/". $data['photo'];
    

                if(file_exists($filePath)){
                    unlink($filePath);
                }else{
                    echo "Image is not found!";
                }
                
                $query = "UPDATE users SET name='$name',uname='$uname',email='$email', photo='$photo_name' WHERE id = $id";
                $result = mysqli_query($conn, $query);

            }else{
                $query = "UPDATE users SET name='$name',uname='$uname',email='$email' WHERE id = $id";
                $result = mysqli_query($conn, $query);  //conectine with database
            }

            if ($result){
                header("Location: alluser.php");
            }

        }

    }


    include "inc/header.php";
    ?>




    <section class="mt-5">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <?php 
                if(isset($success)){
            ?>
                <div class="alert alert-success">
                    <p><?= $success ?></p>
                </div>
            <?php
                }
            ?>
            <div class="card">
                <div class="card-header">
                    <h2>Edit User</h2>
                </div>
                     <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="text" class="form-control" value="<?= $data['name']?>" name="name">
                                
                                <?php
                                    if(isset($error['nameError'])){
                                        printf("<p style='color:red;'> %s </p>", $error['nameError']);
                                    }
                                
                                ?>

                            </div>
                       
                       
                            <div class="mb-3">
                            <input type="text" class="form-control" value="<?= $data['uname']?>" name="uname">
                                
                                <?php
                                    if(isset($error['unameError'])){
                                        printf("<p style='color:red;'> %s </p>", $error['unameError']);
                                    }
                                
                                ?>

                            </div>
                        
                            <div class="mb-3">
                                <input type="text" class="form-control" value="<?= $data['email']?>" name="email"> 

                                <?php
                                    if(isset($error['emailError'])){
                                        echo "<P style='color:red;'>".$error['emailError']."</p>";
                                    }
                                
                                ?>
                            </div>


                           
                            <div class="mb-3">
                                <input type="file" class="form-control" name="photo"> 
                                <?php
                                    if(isset($error['photoError'])){
                                        echo "<P style='color:red;'>".$error['photoError']."</p>";
                                    }
                                
                                ?>
                                <div class="mt-6">
                                    <img src="uploads/profile/<?= $data['photo'] ?>" width="80"
                                    alt="<?= $data['name'] ?>">
                                </div>
                            </div>
                       
                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-primary" name="submit" value="update"> 
                            </div>
                        </form>
                 </div>
            </div>
        </div>
    </div>
</div>
</section>


<?php
include_once "inc/footer.php";

?>

                                

    

   