<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Students page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <?php foreach ($teachers as $teacher) {
            echo "teachers: <br>";
            echo $teacher->getId();
            echo "<br>";
            echo $teacher->getName();
            echo "<br>";
            echo $teacher->getEmail();
            echo "<br>";
            echo $teacher->getClassId();
        };
        ?>
    </section>
<?php require 'includes/footer.php'?>