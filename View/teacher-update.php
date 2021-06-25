<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

    <h4>Teachers</h4>
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

            echo "<td>{$selectedTeacher->getId()}</td>";
            echo "<td>{$selectedTeacher->getName()}</td>";
            echo "<td>{$selectedTeacher->getEmail()}</td>";
            echo "<td>{$selectedTeacher->getClassId()}</td>";
            echo "<td>{$selectedClass->getName()}</td>";
            echo "<td>{$selectedClass->getLocation()}</td>";
            echo "<td>{$selectedTeacher->getName()}</td>";

            ?>
            </tbody>
        </table>
    </form>
    <form action="" method="POST">

<!--        <div class="row mb-3">-->
<!--            <label for="teacher-id" class="col-sm-2 col-form-label">Id</label>-->
<!--            <input type="text" class="form-control" name="id" value="--><?php //echo $selectedTeacher->getId()?><!--">-->
<!--        </div>-->
        <div class="row mb-3">
            <label for="teacher-name" class="col-sm-2 col-form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $selectedTeacher->getName()?>">
        </div>
        <div class="row mb-3">
            <label for="teacher-email" class="col-sm-2 col-form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $selectedTeacher->getEmail()?>">
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
            <button type="submit" name='submit-update-teacher' class='btn btn-primary btn-sm' value='submit-update-teacher'>Update teacher</button>
        </div>

    </form
</section>
<?php require 'includes/footer.php'?>
