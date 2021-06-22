<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <h4>Hello <?php echo $student->getId()?>,</h4>
    <h4>Hello <?php echo $student->getName()?>,</h4>
    <h4>Hello <?php echo $student->getEmail()?>,</h4>
    <h4>Hello <?php echo $student->getClassId()?>,</h4>




    <p><a href="index.php?page=info">To info page</a></p>

    <p>Put your content here.</p>
</section>
<?php require 'includes/footer.php'?>