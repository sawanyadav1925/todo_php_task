<?php
session_start();
?>

<html>

<head>
    <title>TODO List</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="form.php" method="POST">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>

            <input id="new-task" name="addTask" type="text" value="<?php echo $_SESSION['task']; ?>"><button name="addBtn">

                <?php
                if ($_SESSION['count'] == 0) {
                ?>
                    ADD
                <?php
                } else {
                ?>
                    UPDATE
                <?php
                    $_SESSION['count'] = 0;
                }
                ?></button>
        </form>

        <h3>Todo</h3>
        <ul id="incomplete-tasks">
            <?php
            if (isset($_SESSION['incomplete'])) {
                foreach ($_SESSION['incomplete'] as $key => $value) {
                    echo '<form action = "form.php" method="POST"><li><input type="checkbox" onchange="this.form.submit()" name="check"><label>' . $value . '</label><input type = "text"><button class = "edit" name="editBtn">Edit</button><button class="delete" name="deleteBtn">Delete</button></li><input type="text" hidden name="mytask" value="' . $key . '"></form>';
                }
            } else echo ""
            ?>
        </ul>

        <h3>Completed</h3>
        <ul id="completed-tasks">
        

            <?php
            if (isset($_SESSION['complete'])) {
                foreach ($_SESSION['complete'] as $key2 => $value2) {
                    echo '<form action = "form.php" method="POST"><li><input type="checkbox"  name="check"><label>' . $value2 . '</label><input type = "text"><button class = "edit" name="editBtn2">Edit</button><button class="delete" name="deleteBtn2">Delete</button></li><input type="text" hidden name="mytask" value="' . $key2 . '"></form>';
                }
            }
            ?>
        </ul>
    </div>

</body>

</html>
