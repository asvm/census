<?php
// Reading form data fields
    $name = $_POST['element_1'];
    $age = $_POST['element_2'];
    $pno = $_POST['element_3'];
    $ocp = $_POST['element_4'];
    $sname = $_POST['element_5'];
    $sage = $_POST['element_6'];
    $ch1 = $_POST['element_7'];
    $ch1age = $_POST['element_8'];
    $ch2 = $_POST['element_9'];
    $ch2age = $_POST['element_10'];
    $home = $_POST['element_11'];

// Writing out From-data fields into a page
    echo $name;
    echo " Family Details:<br><br>";
    echo "name: $name<br/>";
    echo "age: $age <br/>";
    echo "contact_no: $pno<br>";
    echo "occupation: $ocp";
    echo "spouse_name: $sname<br/>";
    echo "age: $sage <br/>";
    echo "First_Child_Name: $ch1<br>";
    echo "age: $ch1age <br/>";
    echo "Second_Child_Name: $ch2 <br/>";
    echo "age: $ch2age<br>";
    echo "Own_House: $home";
?>
