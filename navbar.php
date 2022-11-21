<!-- bootstrap way to set padding 0: p-0, margin 0: m-0 -->
<header class="m-0 p-0">
    <nav class="navbar m-0 p-0 navbar-fixed-top">
        <!-- div1: hamburger menu -->
        <div class="navbar-menu m-0 p-0">
            <button id="navbar-menu-btn" class="btn" data-bs-target="#hamburger-menu" title="click to open menu">
            </button>
        </div>

        <!-- div2: HCK - text -->
        <div class="navbar-text fs-4 text-white d-flex flex-lg-grow-1 m-0 p-0">
            Halifax Canoe and Kayak
        </div>

        <!-- div3: dark mode switch -->
        <div class=" navbar-dark-mode mx-1 my-0">
            <div class="form form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="dark-mode-switch"
                    name="dark-mode-switch" title="click to switch the mode">
                <label class="form-check-label navbar-text" for="dark-mode-switch" title="click to switch the mode">Dark
                    Mode</label>
            </div>
        </div>

        <!-- div4: paddle logo -->
        <div class="navbar-logo py-0 px-2 mx-1 my-0">
            <button id="home-btn" class="btn" title="home">
            </button>
        </div>
    </nav>
    <!-- end of navbar -->
</header>

<!-- this will display on clicking hamburger menu -->
<div id="hamburger-menu" class="hamburger-menu-items hidden rounded">
    <ul class="list-group">
        <a href="index.php?q=menu.php" class="list-group-items btn">Menu</a>
        <a href="index.php?q=book.php" class="list-group-items btn">Book Trip</a>
        <a href="index.php?q=admin-add.php" class="list-group-items btn">Admin Login</a>
    </ul>
</div>
<!-- end of hamburger menu -->