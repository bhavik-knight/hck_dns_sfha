<!-- start of main container -->
<main class="main-container d-flex">
    <div class="page">
        <!-- image section -->
        <section id="canoe-img card">
            <div class="bg-img-container m-2 p-2 img-fluid">
                <div class="text-over-img">
                    <h1 class="display-4">Come Experience</h1>
                    <h1 class="display-4">Canada</h1>
                </div>
            </div>
        </section>

        <!-- events section -->
        <section id="events" class="card m-2 p-2">
            <div class="card-title text-center">
                <h1 class="mx-auto">Upcoming Adventures</h1>
            </div>

            <!-- place: 1-->
            <!-- <div class="places card-body container-fluid mx-0 my-1 p-0">
                <div id="places-halifax" class="card m-0 p-0">
                    <h3 class="card-title mx-auto my-2">Halifax</h3>
                    <dl class="card-body row mx-auto p-2">
                        <dt class="col-sm-6">Date</dt>
                        <dd class="col-sm-6">2022-09-01</dd>
                        <dt class="col-sm-6">Duration</dt>
                        <dd class="col-sm-6">4 days</dd>
                    </dl>
                    <h5 class="card-title mx-auto my-2">Summary</h5>
                    <p class="card-text text-justify m-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div> -->

            <!-- place: 2-->
            <!-- <div class="places card-body container-fluid mx-0 my-1 p-0">
                <div id="places-sydney" class="card m-0 p-0">
                    <h3 class="card-title mx-auto my-2">Sydney</h3>
                    <dl class="card-body row mx-auto p-2">
                        <dt class="col-sm-6">Date</dt>
                        <dd class="col-sm-6">2022-09-05</dd>
                        <dt class="col-sm-6">Duration</dt>
                        <dd class="col-sm-6">2 days</dd>
                    </dl>
                    <h5 class="card-title mx-auto my-2">Summary</h5>
                    <p class="card-text text-justify m-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div> -->

            <!-- place: 3-->
            <!-- <div class="places card-body container-fluid mx-0 my-1 p-0">
                <div id="places-antigonish" class="card m-0 p-0">
                    <h3 class="card-title mx-auto my-2">Antigonish</h3>
                    <dl class="card-body row mx-auto p-2">
                        <dt class="col-sm-6">Date</dt>
                        <dd class="col-sm-6">2022-11-21</dd>
                        <dt class="col-sm-6">Duration</dt>
                        <dd class="col-sm-6">3 days</dd>
                    </dl>
                    <h5 class="card-title mx-auto my-2">Summary</h5>
                    <p class="card-text text-justify m-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div> -->

            <!-- display the adventures stored in the db -->
            <?php
            # select query to get all data from the db
            $query = "SELECT * FROM adventures";
            $result = $connect->query($query);

            # if we find some results we need to display those, else show them appropriate message
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    # advanture: #x
                    print("
                        <div class='places card-body container-fluid mx-0 my-1 p-0'>
                            <div id='places-sydney' class='card m-0 p-0'>
                                <h3 class='card-title mx-auto my-2'>{$row["adventure_heading"]}</h3>
                                <dl class='card-body row mx-auto p-2'>
                                    <dt class='col-sm-6'>Date</dt>
                                    <dd class='col-sm-6'>{$row["adventure_tripDate"]}</dd>
                                    <dt class='col-sm-6'>Duration</dt>
                                    <dd class='col-sm-6'>{$row["adventure_duration"]}</dd>
                                </dl>
                                <h5 class='card-title mx-auto my-2'>Summary</h5>
                                <p class='card-text text-justify m-2'>{$row["adventure_summary"]}</p>
                            </div>
                        </div>
                    ");
                }
            } else {
                print("
                    <div class='places card-body container-fluid mx-0 my-1 p-0'>
                        <p class='text-center'>No adventures are planned yet, Please add some!</p>
                    </div>
                ");
            }
            ?>

        </section>
    </div>
</main>
<!-- end of main container-->