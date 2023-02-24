<main class="main-container d-flex">
    <div class="page">
        <!-- adventure heading section -->
        <section class="adventure-heading card m-2 p-2">
            <div class="card-body mb-2 text-center">
                <h2>Admin - Add Adventures</h2>
            </div>
            <hr>
            <p class="card-body text-center">
                Please input details about the trip.
            </p>
        </section>

        <!-- to check server-side adventure form validation -->
        <?php
        # set the form completeness variable
        $isFormComplete = false;

        # get all variables
        $adventureHeading = trim(htmlspecialchars($_POST["adventure-heading"] ?? "", ENT_QUOTES));
        $tripDate = trim(htmlspecialchars($_POST["trip-date"] ?? "", ENT_QUOTES));
        $duration = trim(htmlspecialchars($_POST["duration"] ?? "", ENT_QUOTES));
        $summary = trim(htmlspecialchars($_POST["summary"] ?? "", ENT_QUOTES));
        $defaultSummary = "
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        ";

        # check if form is valid or not
        if (isset($_POST["check"]) && $_POST["check"] === "Validate") {
            $isFormComplete = true;
            $errorMessages = [];

            # check if adventure heading is given
            if (trim($adventureHeading) === "") {
                $isFormComplete = false;
                array_push($errorMessages, "What is the location? Please add a heading");
            }

            # check if date is selected
            if (trim($tripDate) === "") {
                $isFormComplete = false;
                array_push($errorMessages, "Please provide the date of the trip");
            }

            # check is duration is selected: and must be a number in the range 1-999
            if (trim($duration) === "") {
                $isFormComplete = false;
                array_push($errorMessages, "How long is this trip?");
            } else if (!is_numeric(trim($duration))) {
                $isFormComplete = false;
                array_push($errorMessages, "Trip duration must be a number");
            } else if (trim($duration) < 1 || trim($duration > 999)) {
                $isFormComplete = false;
                array_push($errorMessages, "Trip duration must be in the range: 1-999");
            }

            # check if comment is given, this can be optional, so don't do anything
            if (trim($summary) === "") {
            }

            if (!$isFormComplete) {
                # <!-- create alerts for validation errors -->
                print('
                    <section class="validation card m-2 p-2">
                    <div class="card-text alert alert-danger m-2" role="alert">
                    <ul>
                ');
                # iterate over each error messages to be displayed
                foreach ($errorMessages as $error) {
                    print("<li>$error</li>");
                }
                print('</ul></div></section>');
            } else {
                print('
                 <section class="validation card m-2 p-2">
                    <div class="card-text alert alert-success m-2" role="alert">
                        Please check the details and hit the <b>Add</b> button!
                    </div>
                </section>
                ');
            }
        }
        ?>

        <!-- adventure form -->
        <section class="adventure-form card">
            <div class="card-title text-center">
                <h1>Add An Adventure</h1>
            </div>

            <!-- pre-fill the incomplete form with the date provided by the user -->
            <form action="" method="post" class="card-body text-end">
                <!-- heading: text field -->
                <div class="mb-3 row">
                    <label for="adventure-heading" class="col-sm-2 col-form-label">Heading
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="adventure-heading" name="adventure-heading"
                            value="<?= $adventureHeading; ?>" placeholder="Alaska" />
                    </div>
                </div>

                <!-- date: date field -->
                <div class="mb-3 row">
                    <label for="trip-date" class="col-sm-2 col-form-label">Trip Date
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="trip-date" name="trip-date"
                            value="<?= $tripDate; ?>" />
                    </div>
                </div>

                <!-- duration: duration field -->
                <div class="mb-3 row">
                    <label for="duration" class="col-sm-2 col-form-label">Duration
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-10 d-flex">
                        <input type="number" min="1" max="999" class="form-control" id="duration" name="duration"
                            value="<?= $duration; ?>" placeholder="100" />
                        <input readonly type="text" value="days" class="form-control ms-2" />
                    </div>
                </div>

                <!-- summary: text area -->
                <div class="mb-3 row">
                    <label for="summary" class="col-sm-2 col-form-label">Summary
                        <span class="text-danger"></span>
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="summary" name="summary" placeholder="<?= $defaultSummary ?>"><?php
                          foreach (explode("\n", $summary) as $summary) {
                              print($summary);
                          } ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <?php if (!$isFormComplete) { ?>
                    <!-- if form is not complete redirect to this page (book.php) -->
                    <input class=" visually-hidden" type="text" value="admin-add.php" id="q" name="q" />
                    <input type="submit" name="check" value="Validate" class="btn btn-primary w-auto mx-auto"
                        title="click to validate" />
                    <?php } else { ?>
                    <input class=" visually-hidden" type="text" value="admin-confirm.php" id="q" name="q" />
                    <input type="submit" name="submit" value="Add" class="btn btn-primary w-auto mx-auto"
                        title="click to add the adventure" />
                    <?php } ?>
                </div>
            </form>
        </section>
    </div>
</main>