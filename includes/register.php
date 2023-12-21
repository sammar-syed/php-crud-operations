<?php include("header.php"); ?>

<div class="container p-4">
    <div class="card">
        <div class="card-header bg-warning text-center fs-4">
            Registration Form
        </div>
        <div class="card-body p-4" style="margin-left: 8%;">
        <div class="row">
        <div class="col-md-11">

            <form action="code.php" method="POST">
                <!--  -->
                
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                
                <a href="../index.php" class="btn btn-danger"> Exit</a>
                <button type="submit" name="register_btn" class="btn btn-success">Register Now</button>

            </form>

        </div>
    </div>
        </div>
    </div>

</div>

<?php include("footer.php"); ?>
