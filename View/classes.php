<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Classes page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <table class="table">
            <h4>Classes:</h4>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Location</th>
                <th scope="col">Teacher ID</th>
                <th scope="col">Teacher Name</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($classes as $class) {
                echo "<tr>";
                echo "<td class='w-25'>{$class->getId()}</td>";
                echo "<td class='w-25'>{$class->getName()}</td>";
                echo "<td class='w-25'>{$class->getLocation()}</td>";
                echo "<td class='w-25'>{$class->getTeacherId()}</td>";
                echo "<td class='w-25'>{$teacherLoader->getTeacherById($class->getId())->getName()}</td>";

                echo "</tr>";
            };
            ?>
            </tbody>
        </table>


    </section>
<?php require 'includes/footer.php' ?>