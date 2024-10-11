<?php include 'inc/header.php';?>
<?php require_once 'App.php';?>
<?php 
if (!$session->hasSession($session->get("adminId"))) {
    $request->redirect("index.php");
}
?>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">

            <?php 
            if ($session->hasSession($session->get('errors'))) {
            foreach ($session->get('errors') as $error) {?>
            <div class="alert alert-danger"><?=$error ?></div>
                <?php  }
                $session->unset('errors');
            }
            
            ?>
            <form action="./handlers/handleAdd.php" method="POST" enctype="multipart/form-data"  >
                <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name = "name">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "desc"></textarea>
                </div>

                <div class="mb-3">
                <label for="formFile" class="form-label">Image:</label>
                <input class="form-control" type="file" id="formFile" name="img">
                </div>

                <center><button on type="submit" class="btn btn-primary" name="submit">Add</button></center>
            </form>
        </div>
    </div>
</div>


<?php include 'inc/footer.php'; ?>