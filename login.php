<?php
    require_once 'inc/header.php';
?>


<section class="mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="loginaction.php" method="POST">
                            <div class="md-3">
                                <input type="text" placeholder="Email or Username" class="form-control" name="email">
                                <?php
                                    if(isset($_SESSION['emailError'])){
                                        echo "<P style='color:red;'>".$_SESSION['emailError']."</p>";
                                    }
                                
                                ?>
                            </div>
                            <div class="md-3">
                                <input type="password" placeholder="Passeword" class="form-control" name="password">
                                <?php
                                    if(isset($_SESSION['passwordError'])){
                                        echo "<P style='color:red;'>".$_SESSION['passwordError']."</p>";
                                    }
                                
                                ?>
                            </div>
                            <div class="md-3">
                                <input type="submit" value="Login" class="form-control btn btn-primary" name="submit">
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
