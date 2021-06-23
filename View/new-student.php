<?php require 'includes/header.php' ?>

    <h4>Students page</h4>

    <p><a href="index.php">Back to homepage</a></p>

    <form action="" method="get">

        <div class="row mb-3">
            <label for="student-name" class="col-sm-2 col-form-label">Name</label>
            <input type="text" class="form-control" id="student-name">
        </div>
        <div class="row mb-3">
            <label for="student-email" class="col-sm-2 col-form-label">Email</label>
            <input type="text" class="form-control" id="student-email">
        </div>
        <div class="row mb-3">
            <label for="class-select" class="col-sm-2 col-form-label">Class</label>
            <select class="form-select" name="class-select">
                <?php foreach ($classes as $class) {
                    echo "<option value='{$class->getId()}'>{$class->getName()}</option>";
                };
                ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name='submit-student' class='btn btn-primary' value='submit-student'>Submit student</button>
        </div>

    </form>


<?php require 'includes/footer.php'?>