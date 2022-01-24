<?php

include_once "inc/header.php";


?>




    <section class="mt-5">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <?php 
                if(isset($_SESSION['$success'])){
            ?>
                <div class="alert alert-success">
                    <p><?= $_SESSION['$success'] ?></p>
                </div>
            <?php
                }
            ?>
            <div class="card">
                <div class="card-header">
                    <h2>Sign Up</h2>
                </div>
                     <div class="card-body">
                        <form action="siginupaction.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                                
                                <?php
                                    if(isset($_SESSION['nameError'])){
                                        printf("<p style='color:red;'> %s </p>", $_SESSION['nameError']);
                                    }
                                
                                ?>

                            </div>
                       
                       
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="User Name" name="uname"> 
                                <?php
                                    if(isset($_SESSION['unameError'])){
                                        echo "<P style='color:red;'>".$_SESSION['unameError']."</p>";
                                    }
                                
                                ?>
                            </div>
                        
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Email" name="email"> 

                                <?php
                                    if(isset($_SESSION['emailError'])){
                                        echo "<P style='color:red;'>".$_SESSION['emailError']."</p>";
                                    }
                                
                                ?>
                            </div>
                       
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password"> 
                                <?php
                                    if(isset($_SESSION['passwordError'])){
                                        echo "<P style='color:red;'>".$_SESSION['passwordError']."</p>";
                                    }
                                
                                ?>
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Conform Password" name="conformpassword"> 
                                <?php
                                    if(isset($_SESSION['conformpasswordError'])){
                                        echo "<P style='color:red;'>".$_SESSION['conformpasswordError']."</p>";
                                    }
                                
                                ?>
                            </div>

                           
                            <div class="mb-3">
                                <input type="file" class="form-control" name="photo"> 
                                <?php
                                    if(isset($_SESSION['photoError'])){
                                        echo "<P style='color:red;'>".$_SESSION['photoError']."</p>";
                                    }
                                
                                ?>
                            </div>
                            
                       
                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-primary" name="submit" value="submit"> 
                            </div>
                        </form>
                 </div>
            </div>
        </div>
    </div>
</div>
</section>


<?php

session_unset();
include_once "inc/footer.php";

?>

                                

    

   