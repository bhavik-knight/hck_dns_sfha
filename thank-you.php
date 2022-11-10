<?php
$name = htmlspecialchars($_GET["name"] ?? "", ENT_QUOTES);
$email = htmlspecialchars($_GET["email"] ?? "", ENT_QUOTES);
$location = htmlspecialchars($_GET["location"] ?? "", ENT_QUOTES);
$tripDate = htmlspecialchars($_GET["trip-date"] ?? "", ENT_QUOTES);
$comments = htmlspecialchars($_GET["comments"] ?? "", ENT_QUOTES);
?>

<main class="main-container d-flex">
    <div class="page">
        <section class="thank-you-heading card m-2 p-2">
            <div class="card-body text-center">
                <h2>Thank you<h2>
            </div>
        </section>

        <section class="thank-you-detail card m-2 p-2">
            <div class="card-title m-2 pt-2 text-center">
                <h4>Trip Details</h4>
            </div>
            <hr>
            <div class="card-body mx-auto">
                <dl class="row mx-2 p-2">
                    <dt class="col-sm-6">Name:</dt>
                    <dd class="col-sm-6">
                        <?= $name ?>
                    </dd>
                    <dt class="col-sm-6">Location:</dt>
                    <dd class="col-sm-6">
                        <?= $location ?>
                    </dd>
                    <dt class="col-sm-6">Trip Date:</dt>
                    <dd class="col-sm-6">
                        <?= $tripDate ?>
                    </dd>
                    <dt class="col-sm-6">Comments:</dt>
                    <dd class="col-sm-6">
                        <?= $comments ?>
                    </dd>
                </dl>
            </div>
            <hr>
            <div class="mx-2 p-2">
                <p class="text-center">
                    Congratulations, <b>
                        <?= $name ?>
                    </b>. Your booking is succcessful!<br>
                    We will contact you shortly through your email: <em><b>
                            <?= $email ?>
                        </b></em>.
                </p>
            </div>
        </section>

        <section class="thank-you-detail card m-2 p-2">
            <a href="index.php?q=book.php" class="btn btn-primary col-sm-4 mx-auto" type="button">Book Another</a>
        </section>
    </div>
</main>