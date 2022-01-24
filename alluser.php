<?php
    include "inc/header.php";
    include_once "db.php";
    
    

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    
    
    $query = "SELECT id, name, uname, email, photo, status FROM users";
    
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result)){
        $datas = mysqli_fetch_all($result, true);
    }
    
?>



    <section class="mt-5">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h2>All User</h2>
                </div>
                     <div class="card-body">

                     <table class="table table-bordered">
                         <tr class="table-dark">
                             <th>Id</th>
                             <th>Photo</th>
                             <th>Name</th>
                             <th>User name</th>
                             <th>Email</th>
                             <th>Status</th>
                             <th>Action</th>
                         </tr>

                         <?php
                         foreach ($datas as $key => $data){
                         ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><img src="uploads/profile/<?= $data['photo'] ?>" width="80"
                                 alt="<?= $data['name'] ?>"></td>
                                <td><?= $data['name'] ?></td>
                                <td><?= $data['uname'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?php echo $data['status']==1 ?"<span class='btn btn-success'>Active</span>" :"<span class='btn btn-danger'>Deactive</span>" ?>
                                
                                <?php
                                        if($data['status']==1){
                                            ?>
                                        
                                        <a class="btn btn-danger" href="statusupdate.php?id=<?= $data['id']?>">Deactive </a>
                                        
                                        <?php
                                        }else{
                                            ?>
                                            <a class="btn btn-success" href="statusupdate.php?id=<?= $data['id']?>">Active</a>
                                            <?php
                                        }
                                    ?>

                                </td>
                                <td>
                                    <a href="user.php?id=<?= $data['id']?>" class='btn btn-primary'>View</a>
                                    <a href="useredit.php?id=<?= $data['id']?>" class='btn btn-primary'>Edit</a>
                                    <a href="userdelete.php?id=<?= $data['id']?>" class='btn btn-primary'>Delete</a>
                                </td>   
                            </tr>
                        <?php
                         }
                         ?>
                    
                     </table>
                 </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php
include "inc/footer.php";

?>
