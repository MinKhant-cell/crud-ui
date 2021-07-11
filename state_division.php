<?php include_once "template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">

            <?php

            if (isset($_POST['save'])) {
                if (createStateDivision()) {
                    echo showAlert('success', 'Create State or Division Succeed');
                } else {
                    echo showAlert('danger', 'Create State or Division Failed');
                }
            }


            if (isset($_POST['update'])) {
                if (updateStateDivision()) {
                    echo showAlert('success', 'Update State or Division Succeed');
                } else {
                    echo showAlert('danger', 'Update State or Division Failed');
                }
            }
            ?>

            <?php
            if (isset($_GET['edit'])){
                $row = stateDivision($_GET['edit']);

                ?>
                <form method="post" class="d-flex align-items-end my-3">
                    <div class="me-2">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <label class="form-label">Create Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" required>
                    </div>
                    <button class="btn btn-outline-success" name="update">Update</button>
                </form>
            <?php }else{ ?>
                <form method="post" class="d-flex align-items-end my-3">
                    <div class="me-2">
                        <label class="form-label">Create Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <button class="btn btn-outline-success" name="save">Save</button>
                </form>
           <?php } ?>

        </div>
    </div>



    <div class="row">
        <div class="col-12">

            <?php

            if (isset($_POST['delete'])){
                if (deleteStateDivision()){
                    echo showAlert('success','Delete State or Division Succeed');
                }else{
                    echo showAlert('danger','Delete State or Division Failed');
                }
            }




            ?>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>State or Division Name</th>
                    <th>Control</th>
                    <th>Created_At</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach (stateDivisions() as $row) { ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td>
                            <a href="?edit=<?php echo $row->id; ?>" class="btn btn-outline-warning">Edit</a>

                            <form method="post" class="d-inline-block">
                                <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                <button class="btn btn-outline-danger" name="delete" >Delete</button>
                            </form>

                        </td>
                        <td><?php echo $row->created_at; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php include_once "template/footer.php"; ?>
