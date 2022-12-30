<?php
// # set the variables needed to connect to the db
// $servername = "us-cdbr-east-06.cleardb.net";
// $username = "b9b5c9775a88f2";
// $password = "031f22f8";
// $database = "heroku_52a475b9eb521fe";

# aws-rds
$servername = "dns-sfha-hck-bk.c2hxhq9147t7.ca-central-1.rds.amazonaws.com";
$username = "root";
$password = "Mysql_123";
$database = "dns_sfha_hck_bk";
$port = 3306;

// $servername = "localhost";
// $username = "root";
// $password = "Mysql@123";
// $database = "dns_hck";

# create the connection to the db
$connect = new mysqli($servername, $username, $password, $database, $port);

# check if connected to db successfully of not
if ($connect->connect_error) {
    print("
        <section class='validation card m-2 p-2'>
            <div class='card-text alert alert-danger m-2' role='alert'>
                Connection Error! . $connect->connect_error;
            </div>
        </section>
    ");

    # equivalent to exit
    die();
} else {
    # connected to db
    /*
    print("
    <section class='validation card m-2 p-2'>
    <div class='card-text alert alert-success m-2' role='alert'>
    Connected to DB!
    </div>
    </section>
    ");
    */
}
?>