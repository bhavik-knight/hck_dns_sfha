<?php
$adventureHeading = trim(htmlspecialchars($_POST["adventure-heading"] ?? "", ENT_QUOTES));
$tripDate = trim(htmlspecialchars($_POST["trip-date"] ?? "", ENT_QUOTES));
$duration = trim(htmlspecialchars($_POST["duration"] ?? "", ENT_QUOTES));
$summary = trim(htmlspecialchars($_POST["summary"] ?? "", ENT_QUOTES));
?>

<main class="main-container d-flex">
    <div class="page">
        <section class="thank-you-heading card m-2 p-2">
            <div class="card-body text-center">
                <h2>Thank You</h2>
            </div>
        </section>

        <!-- execute the query and see if inserted correctly -->
        <?php

        # insert operation
        $query = "
            INSERT INTO trial_adventures (heading, tripDate, duration, summary)
            VALUES (?, ?, ?, ?)
        ";

        # prepare the data to prevent sql injection
        $tripInfo = $connect->prepare($query);

        # bind the parameters
        $tripInfo->bind_param("ssis", $adventureHeading, $tripDate, $duration, $summary);

        # execute the query and create a section to display the success or error message for the query insert
        if ($tripInfo->execute() === TRUE) {
            print("
                <section class='validation card m-2 p-2'>
                <div class='card-text alert alert-success m-2' role='alert'>
                    The <strong>new</strong> adventure is added to the <em><strong>Database</strong></em>.
                </div>
            </section>
            ");
        } else {
            print("
                <section class='validation card m-2 p-2'>
                <div class='card-text alert alert-danger m-2' role='alert'>
                    <strong>Error!</strong> . $query . <br> . $connect->error
                </div>
            </section>
            ");
        }

        # close connection to db
        $tripInfo->close();
        $connect->close();
        ?>

        <section class="thank-you-detail card m-2 p-2">
            <div class="card-title m-2 pt-2 text-center">
                <h4>Trip Details</h4>
            </div>
            <hr>
            <div class="card-body mx-auto">
                <dl class="row mx-2 p-2">
                    <dt class="col-sm-6">Heading:</dt>
                    <dd class="col-sm-6">
                        <?= $adventureHeading ?>
                    </dd>
                    <dt class="col-sm-6">Duration:</dt>
                    <dd class="col-sm-6">
                        <?= $duration ?>&nbsp;days
                    </dd>
                    <dt class="col-sm-6">Trip Date:</dt>
                    <dd class="col-sm-6">
                        <?= $tripDate ?>
                    </dd>
                    <dt class="col-sm-6">Summary:</dt>
                    <dd class="col-sm-6">
                        <?php foreach (explode("\n", $summary) as $summary) {
                            print($summary . ", ");
                        } ?>
                    </dd>
                </dl>
            </div>
            <hr>
            <div class="mx-2 p-2">
                <p class="text-center">
                    Congratulations, Trip to <strong><em>
                            <?= $adventureHeading ?>
                        </em></strong> for <strong>
                        <?= $duration ?>&nbsp;days
                    </strong> on <strong>
                        <?= $tripDate ?>
                    </strong> is listed successfully!
                </p>
            </div>
        </section>

        <section class="thank-you-detail card m-2 p-2">
            <a href="index.php?q=admin-add.php" class="btn btn-primary col-sm-4 mx-auto" type="button"
                title="click to add another trip">Add Another</a>
        </section>

        <section class="thank-you-detail card m-2 p-2">
            <a href="index.php?q=all-adventures.php" class="btn btn-success col-sm-4 mx-auto" type="button"
                title="click to add another trip">View All Adventures</a>
        </section>


    </div>
</main>