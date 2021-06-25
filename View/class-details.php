<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
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

            </tr>
            </thead>
            <tbody>
            <?php

            echo "<td>{$selectedClass->getId()}</td>";
            echo "<td>{$selectedClass->getName()}</td>";
            echo "<td>{$selectedClass->getLocation()}</td>";
            echo "<td>{$selectedTeacher->getId()}</td>";
            echo "<td>{$selectedTeacher->getName()}</td>";

            ?>
            </tbody>
        </table>
    </form>
</section>
<?php require 'includes/footer.php'?>
