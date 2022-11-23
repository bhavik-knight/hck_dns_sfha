<main class="main-container d-flex">
    <section class="page">
        <div class="text-center">
            <h2>Trial and Error</h2>
            <p>Page is created to check new things and see if it works</p>
            <?php
            $query = "SELECT * FROM Library.Authors";
            $result = $connect->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    print("First:" . $row["first_name"]);
                    print("Last:" . $row["last_name"]);
                    print("aka:" . $row["pen_name"]);
                    print("<br>");
                }
            } else {
                print("
                    <p>No results</p>
                ");
            }
            ?>
        </div>
    </section>
</main>