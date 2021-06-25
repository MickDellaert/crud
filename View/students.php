<?php require 'includes/header.php'?>

    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Students page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <form class="mb-3" method="GET">
        <div class="form-group mb-3">

            <button name='page' class='btn btn-primary btn-sm' value='new-student'>Add student</button>
        </div>
        </form>

        <form class="mb-3" method="POST">

        <table class="table">
            <h4>Students:</h4>

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Class Id</th>
                <th scope="col">Class Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                <td>
                    <?php echo $student->getId() ?>
                </td>
                <td>
                    <?php echo $student->getName() ?>
                </td>
                <td>
                    <?php echo $student->getEmail()?>
                </td>
                <td>
                    <?php echo $student->getClassId()?>
                </td>
                <td>
                    <?php echo $classLoader->getClassById($student->getClassId())->getName()?>
                </td>
                <td>
                    <button name="detail-student" class='btn btn-info btn-sm' value="<?php echo $student->getId()?>">Details</button>
                </td>
                <td>
                    <button name="update-student" class='btn btn-warning btn-sm' value="<?php echo $student->getId()?>">Update</button>
                </td>
                <td>
                    <button name="delete-student" class='btn btn-danger btn-sm' value="<?php echo $student->getId()?>">Delete</button>
                </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
        </table>
        </form>




    </section>


<?php require 'includes/footer.php'?>