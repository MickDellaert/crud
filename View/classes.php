<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>

        <h4>Classes page</h4>

        <p><a href="index.php">Back to homepage</a></p>

        <?php foreach ($classes as $class) {
            echo "classes: <br>";
            echo $class->getId();
            echo "<br>";
            echo $class->getName();
            echo "<br>";
            echo $class->getLocation();
            echo "<br>";
            echo $class->getTeacherId();
        };
        ?>

    </section>
<?php require 'includes/footer.php'?>