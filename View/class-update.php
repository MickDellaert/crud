<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>
        <form class="mb-3" method="POST">

            <table class="table">
                <h4>Update classes:</h4>

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
        <form action="" method="POST">

            <div class="row mb-3">
                <label for="class-name" class="col-sm-2 col-form-label">Name</label>
                <input type="text" class="form-control" name="id" value="<?php echo $selectedClass->getId()?>">
            </div>
            <div class="row mb-3">
                <label for="class-name" class="col-sm-2 col-form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $selectedClass->getName()?>">
            </div>
            <div class="row mb-3">
                <label for="class-location" class="col-sm-2 col-form-label">Email</label>
                <input type="text" class="form-control" name="location" value="<?php echo $selectedClass->getLocation()?>">
            </div>
            <div class="row mb-3">
                <label for="class-select" class="col-sm-2 col-form-label">Class</label>
                <select class="form-select" name="teacher_id">
                    <?php foreach ($teachers as $teacher) {
                        echo "<option value='{$teacher->getId()}'>{$teacher->getName()}</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name='submit-update-class' class='btn btn-primary btn-sm' value='submit-update-class'>Update class</button>
            </div>

        </form
    </section>
<?php require 'includes/footer.php'?>
<?php
