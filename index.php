<?php include_once "template/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="my-3">

                <?php

                if (isset($_POST['delete'])){
                    if (deleteTownship()){
                        echo showAlert('success','Delete Township Succeed');
                    }else{
                        echo showAlert('danger','Delete Township Failed');
                    }
                }

                ?>


                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>TownShip Name</th>
                        <th>State or Division</th>
                        <th>Control</th>
                        <th>Created_At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (townships() as $row) { ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->state_division_id; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row->id; ?>" class="btn btn-outline-warning">Edit</a>

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
</div>

<?php include_once "template/footer.php"; ?>

