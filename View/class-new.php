<?php require 'includes/header.php' ?>

    <h4>Classes</h4>
    <hr>

    <form action="" method="post">

        <div class="row mb-3">
            <label for="class-name" class="col-sm-2 col-form-label">Name</label>
            <input type="text" class="form-control" name='name' id='name'>
        </div>
        <div class="row mb-3">
            <label for="class-location" class="col-sm-2 col-form-label">Location</label>
            <input type="text" class="form-control" name="location" id="location">
        </div>
        <div class="row mb-3">
            <label for="teacher-select" class="col-sm-2 col-form-label">Teacher</label>
            <select class="form-select" name="teacher_id">
                <?php foreach ($teachers as $teacher) {
                    echo "<option value='{$teacher->getId()}'>{$teacher->getName()}</option>";
                };
                ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name='submit-class' class='btn btn-primary btn-sm' value='submit-class'>Submit new class</button>
        </div>

    </form>


<?php require 'includes/footer.php'?>