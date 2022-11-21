<!-- start of html for the form -->
<main class="main-container d-flex">
    <div class="page">
        <section class="book-heading card">
            <div class="card-title mb-2 text-center">
                <h2>Welcome to Halifax Canoe and Kayak!</h3>
            </div>
            <hr>
            <p class="card-body text-center">
                Please fill the form below to book your trip.
            </p>
        </section>

        <!-- to check the server-side validation -->
        <?php

        # to check the validation of the form
        $isFormComplete = false;

        # get all variables
        $name = trim(htmlspecialchars($_GET["name"] ?? "", ENT_QUOTES));
        $email = trim(htmlspecialchars($_GET["email"] ?? "", ENT_QUOTES));
        $location = trim(htmlspecialchars($_GET["location"] ?? "", ENT_QUOTES));
        $tripDate = trim(htmlspecialchars($_GET["trip-date"] ?? "", ENT_QUOTES));
        $comments = trim(htmlspecialchars($_GET["comments"] ?? "", ENT_QUOTES));

        # check if form is valid or not
        if (isset($_GET["check"]) && $_GET["check"] === "Validate") {
            $isFormComplete = true;
            $errorMessages = [];

            # check if name is given
            if (trim($name) === "") {
                $isFormComplete = false;
                array_push($errorMessages, "Name is missing");
            }

            # check if email is given
            if (trim($email) === "") {
                $isFormComplete = false;
                array_push($errorMessages, "Email is required");
            } else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $isFormComplete = false;
                array_push($errorMessages, "Invalid email");
            }

            # check is location is selected from the given locations
            if (!in_array($location, ["Halifax", "Sydney", "Antigonish"])) {
                $isFormComplete = false;
                array_push($errorMessages, "Where do you want to go?");

            }

            # check if date is selected
            if (trim($tripDate) === "") {
                $isFormComplete = false;
                array_push($errorMessages, "Please select the date of the trip");
            }

            # check if comment is given, this can be optional, so don't do anything
            if (trim($comments) === "") {
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
                        Please check the details and hit the <b>confirm</b> button!
                    </div>
                </section>
                ');
            }
        }
        ?>

        <section class="book-form card">
            <div class="card-title text-center">
                <h1>Book A Trip</h1>
            </div>

            <!-- pre-fill the incomplete form with the date provided by the user -->
            <form action="" method="get" class="card-body text-end">
                <!-- name: text field -->
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $name; ?>"
                            placeholder="John Doe" />
                    </div>
                </div>

                <!-- email: email field -->
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $email; ?>"
                            placeholder="email@example.com" />
                    </div>
                </div>

                <!-- location: select from list-->
                <div class="mb-3 row">
                    <label for="location" class="col-sm-2 col-form-label">Location
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-select" id="location" name="location" aria-label="select-location">
                            <!-- this first option is dummy -->
                            <option selected disabled value="" <?php if ($location === "") {
                                echo " selected";
                            } ?>>
                                Choose
                                Location </option>
                            <option value="Halifax" <?php if ($location === "Halifax") {
                                echo " selected";
                            } ?>>
                                Halifax
                            </option>
                            <option value="Sydney" <?php if ($location === "Sydney") {
                                echo " selected";
                            } ?>>
                                Sydney
                            </option>
                            <option value="Antigonish" <?php if ($location == "Antigonish") {
                                echo " selected";
                            } ?>>
                                Antigonish</option>
                        </select>
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

                <!-- comments: text area -->
                <div class="mb-3 row">
                    <label for="comments" class="col-sm-2 col-form-label">Comments
                        <span class="text-danger"></span>
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="comments" name="comments" placeholder="Any suggestions?"><?php
                        foreach (explode("\n", $comments) as $comment) {
                            print($comment);
                        } ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <?php if (!$isFormComplete) { ?>
                    <!-- if form is not complete redirect to this page (book.php) -->
                    <input class=" visually-hidden" type="text" value="book.php" id="q" name="q" />
                    <input type="submit" name="check" value="Validate" class="btn btn-primary w-auto mx-auto"
                        title="click to validate" />
                    <?php } else { ?>
                    <input class=" visually-hidden" type="text" value="thank-you.php" id="q" name="q" />
                    <input type="submit" name="submit" value="Confirm" class="btn btn-primary w-auto mx-auto"
                        title="click to confirm the booking" />
                    <?php } ?>
                </div>
            </form>
        </section>

        <section class=" book-ck-info card m-2 p-2">
            <div class="card-title">
                <h5 class="text-center">The Difference Between Canoe v Kayak</h5>
            </div>
            <div class="d-flex">
                <!-- canoe info -->
                <div class="canoe-info card m-0 p-1 w-50">
                    <div class="row g-0">
                        <div class="col-sm-4 p-2 m-auto img-container">
                            <img src="images/canoe-logo.png" class="img-fluid rounded" alt="canoe image" />
                        </div>
                        <div class="col-sm-8 card-body">
                            <ul class="list-group list-group-flush rounded">
                                <li class="list-group-item">open-vessels</li>
                                <li class="list-group-item">paddle: single-blade</li>
                                <li class="list-group-item">stable but less efficient</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- kayak info -->
                <div class="kayak-info card m-0 p-1 w-50">
                    <div class="row g-0">
                        <div class="col-sm-8 card-body">
                            <ul class="list-group list-group-flush rounded">
                                <li class="list-group-item">enclosed-vessels</li>
                                <li class="list-group-item">paddle: double-blade</li>
                                <li class="list-group-item">more efficient but less stable</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 p-2 m-auto img-container">
                            <img src="images/kayak-logo.png" class="img-fluid rounded" alt="kayak image" />
                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>