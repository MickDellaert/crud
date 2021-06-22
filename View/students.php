<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Students page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <?php foreach ($students as $student) {
            echo "students: <br>";
            echo $student->getId();
            echo "<br>";
            echo $student->getName();
            echo "<br>";
            echo $student->getEmail();
            echo "<br>";
            echo $student->getclassId();
        };
        ?>

    </section>
<?php require 'includes/footer.php'?>