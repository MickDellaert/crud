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
    <form action="" method="POST">

<!--        <div class="row mb-3">-->
<!--            <label for="student-id" class="col-sm-2 col-form-label">Id</label>-->
<!--            <input type="text" class="form-control" name="id" value="--><?php //echo $selectedStudent->getId()?><!--">-->
<!--        </div>-->
        <div class="row mb-3">
            <label for="student-name" class="col-sm-2 col-form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $selectedStudent->getName()?>">
        </div>
        <div class="row mb-3">
            <label for="student-email" class="col-sm-2 col-form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $selectedStudent->getEmail()?>">
        </div>
        <div class="row mb-3">
            <label for="class-select" class="col-sm-2 col-form-label">Class</label>
            <select class="form-select" name="class_id">
                <?php foreach ($classes as $class) {
                    echo "<option value='{$class->getId()}'>{$class->getName()}</option>";
                };
                ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name='submit-update-student' class='btn btn-primary btn-sm' value='submit-update-student'>Update student</button>
        </div>

    </form
</section>
<?php require 'includes/footer.php'?>
