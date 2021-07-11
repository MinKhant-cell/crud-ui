<?php include_once "template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">

            <?php
            if (isset($_POST['update'])){
                if (updateTownship()){
                    echo showAlert('success','Update Township Succeed');
                }else{
                    echo showAlert('danger','Update Township Failed');
                }
            }
            ?>

            <form method="post">
                <div>
                    <input type="hidden" class="form-control" name="id" value="<?php echo township($_GET['id'])->id;?>">
                </div>
                <div class="mb-2">
                    <label class="form-label">Create Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo township($_GET['id'])->name;?>" required>
                </div>

                <div class="mb-2">
                    <label class="form-label">Create State Division</label>
                    <input type="text" class="form-control" name="state_division_id" value="<?php echo township($_GET['id'])->state_division_id;?>" required>
                </div>

                <button class="btn btn-outline-info" name="update">Update</button>
            </form>
        </div>
    </div>
</div>

<?php include_once "template/footer.php"; ?>
