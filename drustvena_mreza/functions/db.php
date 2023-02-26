
<?php
$con=mysqli_connect('localhost','root','','drustvena_mreza');

function escape($string){
    global $con;
    return mysqli_real_escape_string($con,$string);
}

function query($query){
    global $con;
    return mysqli_query($con, $query);
}
function confim($result){
    global $con;
    if(!$result){
        die("QUERYY FAILED" . mysqli_error(($con)));
    }
}
