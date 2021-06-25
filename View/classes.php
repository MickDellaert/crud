<?php require 'includes/header.php'?>

    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Classes page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <form class="mb-3" method="GET">
            <div class="form-group mb-3">

                <button name='page' class='btn btn-primary btn-sm' value='class-new'>Add class</button>
            </div>
        </form>

        <form class="mb-3" method="POST">

            <table class="table">
                <h4>Classes:</h4>

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Teacher Id</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($classes as $class): ?>
                    <tr>
                        <td>
                            <?php echo $class->getId() ?>
                        </td>
                        <td>
                            <?php echo $class->getName() ?>
                        </td>
                        <td>
                            <?php echo $class->getLocation()?>
                        </td>
                        <td>
                            <?php echo $class->getTeacherId()?>
                        </td>
                        <td>
                            <?php echo $teacherLoader->getTeacherById($class->getTeacherId())->getName()?>
                        </td>
                        <td>
                            <button name="detail-class" class='btn btn-info btn-sm' value="<?php echo $class->getId()?>">Details</button>
                        </td>
                        <td>
                            <button name="update-class" class='btn btn-warning btn-sm' value="<?php echo $class->getId()?>">Update</button>
                        </td>
                        <td>
                            <button name="delete-class" class='btn btn-danger btn-sm' value="<?php echo $class->getId()?>">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>


                </tbody>
            </table>
        </form>




    </section>


<?php require 'includes/footer.php'?>