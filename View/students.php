<?php require 'includes/header.php'?>

    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Students page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <form class="mb-3" method="get">

            <div class="form-group mb-3">

            <button name='page' class='btn btn-primary btn-sm' value='new-student'>Add student</button>
            </div>


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
            <?php foreach ($students as $student) {
                echo "<tr>";
                echo "<td>{$student->getId()}</td>";
                echo "<td>{$student->getName()}</td>";
                echo "<td>{$student->getEmail()}</td>";
                echo "<td>{$student->getClassId()}</td>";
                echo "<td>{$classLoader->getClassById($student->getClassId())->getName()}</td>";
                echo "<td>
                        <button name='detail-student' class='btn btn-info btn-sm' value='{$student->getId()}'>Details</button>
                    </td>";
                echo "<td>
                        <button type='submit' name='edit-student' class='btn btn-warning btn-sm' value='{$student->getId()}'>Update</button>
                    </td>";
                echo "<td>
                        <button type='submit' name='delete-student' class='btn btn-danger btn-sm' value='{$student->getId()}'>Delete</button>
                    </td>";
                echo "</tr>";
            };
            ?>
            </tbody>
        </table>
        </form>




    </section>


<?php require 'includes/footer.php'?>