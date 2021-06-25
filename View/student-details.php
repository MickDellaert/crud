<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

    <h4>Students</h4>
    <hr>

    <form class="mb-3" method="POST">

        <table class="table">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Class Id</th>
                <th scope="col">Class Name</th>
                <th scope="col">Class Location</th>
                <th scope="col">Teacher</th>
            </tr>
            </thead>
            <tbody>
            <?php

                echo "<td>{$selectedStudent->getId()}</td>";
                echo "<td>{$selectedStudent->getName()}</td>";
                echo "<td>{$selectedStudent->getEmail()}</td>";
                echo "<td>{$selectedStudent->getClassId()}</td>";
                echo "<td>{$selectedClass->getName()}</td>";
                echo "<td>{$selectedClass->getLocation()}</td>";
                echo "<td>{$selectedTeacher->getName()}</td>";

            ?>
            </tbody>
        </table>
    </form>
</section>
<?php require 'includes/footer.php'?>
