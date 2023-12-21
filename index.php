<?php include("includes/header.php"); ?>

<?php include("includes/navbar.php"); ?>

<div class="container p-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10 text-center">
                    <h4>CRUD OPERATIONS IN PHP</h4>
                </div>
                <div class="col-md-2">
                    <a href="./includes/register.php" class="btn btn-dark float-right"> Add Data / Register</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php
                  // Creating DB Connection
                $conn = mysqli_connect("localhost","root","","register");
            ?>
            <?php  

                $register = "SELECT * FROM rgstr";
                $register_run = mysqli_query($conn, $register);

                if(mysqli_num_rows($register_run) > 0) 
                { 
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Edit/Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($reg_row = mysqli_fetch_array($register_run))
                        {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $reg_row['id'];?></th>
                        <td><?php echo $reg_row['fname'];?></td>
                        <td><?php echo $reg_row['lname'];?></td>
                        <td><?php echo $reg_row['email'];?></td>
                        <td><?php echo $reg_row['password'];?></td>
                        <td><?php echo $reg_row['phone'];?></td>
                        <td><a href="includes/update.php?id=<?php echo $reg_row['id']?>" class="btn btn-info"> Edit</a></td>
                        <td>
                            <form action="includes/code.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $reg_row['id'];?>">
                                <button type="submit" name="register_delete_btn" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <?php
                    }       
                    else
                    {
                        echo "No Record Found";
                    }
            ?>

        </div>
    </div>

    <?php
     
    ?>
    
</div>