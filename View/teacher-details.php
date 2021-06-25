<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <form class="mb-3" method="POST">

        <table class="table">
            <h4>Teachers:</h4>

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Class Id</th>
                <th scope="col">Class Name</th>
                <th scope="col">Class Location</th>
            </tr>
            </thead>
            <tbody>
            <?php

            echo "<td>{$selectedTeacher->getId()}</td>";
            echo "<td>{$selectedTeacher->getName()}</td>";
            echo "<td>{$selectedTeacher->getEmail()}</td>";
            echo "<td>{$selectedTeacher->getClassId()}</td>";
            echo "<td>{$selectedClass->getName()}</td>";
            echo "<td>{$selectedClass->getLocation()}</td>";
            ?>
            </tbody>
        </table>
    </form>
</section>
<?php require 'includes/footer.php'?>
