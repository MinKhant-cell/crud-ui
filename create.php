<?php include_once "template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">

            <?php
            if (isset($_POST['save'])){
                if (createTownship()){
                    echo showAlert('success','Create Township Succeed');
                }else{
                    echo showAlert('danger','Create Township Failed');
                }
            }
            ?>

            <form method="post">
                <div class="mb-2">
                    <label class="form-label">Create Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-2">
                    <label class="form-label">Create State Division</label>
                    <input type="text" class="form-control" name="state_division_id" required>
                </div>

                <button class="btn btn-outline-success" name="save">Save</button>
            </form>
        </div>
    </div>
</div>



<?php include_once "template/footer.php"; ?>
