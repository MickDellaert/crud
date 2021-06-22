<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

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

    <?php foreach ($classes as $class) {
        echo "<br><br>";
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
    <?php foreach ($teachers as $teacher) {
        echo "<br><br>";
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



    <p><a href="index.php?page=info">To info page</a></p>

    <p>Put your content here.</p>
</section>
<?php require 'includes/footer.php'?>