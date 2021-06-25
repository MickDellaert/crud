<?php require 'includes/header.php'?>

    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Teachers page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <form class="mb-3" method="GET">
            <div class="form-group mb-3">

                <button name='page' class='btn btn-primary btn-sm' value='teacher-new'>Add teacher</button>
            </div>
        </form>

        <form class="mb-3" method="POST">

            <table class="table">
                <h4>Teachers:</h4>

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Class Id</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($teachers as $teacher): ?>
                    <tr>
                        <td>
                            <?php echo $teacher->getId() ?>
                        </td>
                        <td>
                            <?php echo $teacher->getName() ?>
                        </td>
                        <td>
                            <?php echo $teacher->getEmail()?>
                        </td>
                        <td>
                            <?php echo $teacher->getClassId()?>
                        </td>

                        <td>
                            <button name="detail-teacher" class='btn btn-info btn-sm' value="<?php echo $teacher->getId()?>">Details</button>
                        </td>
                        <td>
                            <button name="update-teacher" class='btn btn-warning btn-sm' value="<?php echo $teacher->getId()?>">Update</button>
                        </td>
                        <td>
                            <button name="delete-teacher" class='btn btn-danger btn-sm' value="<?php echo $teacher->getId()?>">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>


                </tbody>
            </table>
        </form>




    </section>


<?php require 'includes/footer.php'?>