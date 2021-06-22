<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Students page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <table class="table">
            <h4>Students:</h4>

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">class Id</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $student) {
                echo "<tr>";
                echo "<td class='w-25'>{$student->getId()}</td>";
                echo "<td class='w-25'>{$student->getName()}</td>";
                echo "<td class='w-25'>{$student->getEmail()}</td>";
                echo "<td class='w-25'>{$student->getClassId()}</td>";
                echo "</tr>";
            };
            ?>
            </tbody>
        </table>

    </section>
<?php require 'includes/footer.php'?>