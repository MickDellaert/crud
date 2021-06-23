<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

    <p><a href="index.php?page=info">To info page</a></p>
    <p><a href="index.php?page=classes">To classes page</a></p>
    <p><a href="index.php?page=students">To students page</a></p>
    <p><a href="index.php?page=teachers">To teachers page</a></p>



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

    <table class="table">
        <h4>Teachers:</h4>

        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">class Id</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($teachers as $teacher) {
            echo "<tr>";
            echo "<td class='w-25'>{$teacher->getId()}</td>";
            echo "<td class='w-25'>{$teacher->getName()}</td>";
            echo "<td class='w-25'>{$teacher->getEmail()}</td>";
            echo "<td class='w-25'>{$teacher->getClassId()}</td>";
            echo "</tr>";
        };
        ?>
        </tbody>
    </table>

    <table class="table">
        <h4>Classes:</h4>

        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
            <th scope="col">Teacher</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($classes as $class) {
            echo "<tr>";
            echo "<td class='w-25'>{$class->getId()}</td>";
            echo "<td class='w-25'>{$class->getName()}</td>";
            echo "<td class='w-25'>{$class->getLocation()}</td>";
            echo "<td class='w-25'>{$class->getTeacherId()}</td>";
            echo "</tr>";
        };
        ?>
        </tbody>
    </table>



</section>
<?php require 'includes/footer.php'?>