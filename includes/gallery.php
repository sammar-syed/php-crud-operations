<?php include("header.php"); ?>

<!--  -->
<div class="container">
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="image">Choose an image:</label>
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form>

</div>



<?php include("footer.php"); ?>