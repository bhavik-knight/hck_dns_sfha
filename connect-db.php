<?php
# set the variables needed to connect to the db
$servername = "localhost";
$username = "root";
$password = "Mysql@123";
$database = "trial_dns";

# create the connection to the db
$connect = new mysqli($servername, $username, $password, $database);

# check if connected to db successfully of not
if ($connect->connect_error) {
    print("
        <section class='validation card m-2 p-2'>
            <div class='card-text alert alert-danger m-2' role='alert'>
                Connection Error! . $connect->connect_error;
            </div>
        </section>
    ");

    # close the connection here
    $connect->close();
} else {
    print("
        <section class='validation card m-2 p-2'>
            <div class='card-text alert alert-success m-2' role='alert'>
                Connected to DB!
            </div>
        </section>
    ");

}
?>