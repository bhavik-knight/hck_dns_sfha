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
                <?php
                if (!$connect->connect_error) {
                    print("
                        <div class='mt-1 pt-1'>
                            <p class='text-center m-0 p-0'>Inserting Data</p>
                        </div>
                    ");
                }
                ?>
            </div>
        </section>

        <!-- insert data into db
        <?php
        # insert only if db is connected
        if (!$connect->connect_error) {
            # prepare the data to prevent sql injection
            $tripInfo = $connect->prepare("
                INSERT INTO trial_adventure (heading, duration, tripDate, summary)
                VALUES (?, ?, ?, ?)
            ");

            # bind the parameters
            $tripInfo->bind_param("siss", $heading, $duration, $tripDate, $summary);

            # execute the query
            $tripInfo->execute();
        }
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
                    Congratulations, Your trip to <strong><em>
                            <?= $adventureHeading ?>
                        </em></strong> for <strong>
                        <?= $duration ?>&nbsp;days
                    </strong> is added successfully to the <strong><em>Database!</em></strong><br>
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