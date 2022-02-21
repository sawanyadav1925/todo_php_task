<?php
session_start();



if(isset($_POST['check'])){
    $_SESSION['incmTask'] = $_SESSION['incomplete'][$_POST['mytask']];
    unset($_SESSION['incomplete'][$_POST['mytask']]);

    if(isset($_SESSION['complete'])){
        array_push($_SESSION['complete'],$_SESSION['incmTask']);
    }
    else{
        $_SESSION['complete'] = array($_SESSION['incmTask']);
    }
}



if(isset($_POST['editBtn'])){
    $_SESSION['task'] = $_SESSION['incomplete'][$_POST['mytask']];
    unset($_SESSION['incomplete'][$_POST['mytask']]);
    if(isset($_SESSION['task'])){
        $_SESSION['count']=1;
    }
    else{
        $_SESSION['count']=0;
    }
}


if(isset($_POST['deleteBtn2'])){
    unset($_SESSION['complete'][$_POST['mytask']]);

}

if(isset($_POST['addBtn'])){
    $_SESSION['count']=0;
}


if(isset($_POST['deleteBtn'])){
    unset($_SESSION['incomplete'][$_POST['mytask']]);
}



if (isset($_POST['addBtn'])) {
    if (isset($_SESSION['incomplete'])) {
        array_push($_SESSION['incomplete'], $_POST['addTask']);
    } else {
        $_SESSION['incomplete'] = array($_POST['addTask']);
    }
}



if(isset($_POST['editBtn2'])){
    $_SESSION['task'] = $_SESSION['complete'][$_POST['mytask']];
    unset($_SESSION['complete'][$_POST['mytask']]);
    if(isset($_SESSION['task'])){
        $_SESSION['count']=1;
    }
    else{
        $_SESSION['count']=0;
    }
}



header('location:todo.php');

?>