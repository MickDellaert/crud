<form action="" method="POST">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>ClassID</th>
        </tr>
        <tr>
            <td></td>
            <td><input id="name" name="name"></td>
            <td><input id="email" name="email"></td>
            <td><select name="classId"><?php foreach ($classes as $class) {
                        echo "<option value=" . $class->getId() . ">" . $class->getName() . "</option>";
                    } ?></select></td>
            <td>
                <button name="add" value="add">Add</button>
            </td>
        </tr>
        <?php
        foreach ($students as $student) {
            echo '<tr><td>' . $student->getId() . '</td><td>' . $student->getName() . '</td><td>' . $student->getEmail() . '</td><td>';

            echo '</td><td><button name="update" value="' . $student->getId() . '">Update</button></td><td><button name="delete" value="' . $student->getId() . '">Delete</button></td></tr>';
        }
        ?>

    </table>
</form>