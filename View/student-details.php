<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
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




//                echo "<td>{$selectedClass->getClassById($selectedStudent->getClassId())->getName()}</td>";



            //                echo "<td>
//                        <button name='detail-student' class='btn btn-info' value='{$student->getId()}'>Details</button>
//                    </td>";
//                echo "<td>{$student->getId()}</td>";
//
//                echo "<td>
//                        <button type='submit' name='edit-student' class='btn btn-warning' value='{$student->getId()}'>Update</button>
//                    </td>";
//                echo "<td>
//                        <button type='submit' name='delete-student' class='btn btn-danger' value='{$student->getId()}'>Delete</button>
//                    </td>";
//                echo "</tr>";

            ?>
            </tbody>
        </table>
    </form>
</section>
<?php require 'includes/footer.php'?>
