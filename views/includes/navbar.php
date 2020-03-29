<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-darkness">
        <a class="navbar-brand navbar-brand_bis" href="../../index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                    if (empty($_SESSION['isConnected']) && empty($_SESSION['username'])) { ?>
                        <li class='nav-item'>
                            <a class='nav-link nav-link-bis' href='/views/login.php'>Login</a>
                        </li>
                    <?php } else { ?>
                        <li class='nav-item'>
                            <a class='nav-link nav-link-bis' href='/views/profile.php'>Profile</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link nav-link-bis' href='/views/articles/all_articles.php'>Articles</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link nav-link-bis' href='/views/stats.php'>Stats</a>
                        </li>
                    <?php } ?>
                        <li class='nav-item'>
                            <a class='nav-link nav-link-bis' href='../views/contact.php'>Contact</a>
                        </li>
            </ul>
            <?php
                if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true) {
                    echo    "<form method='POST' action='../../index.php' class='form-inline my-2 my-lg-0'>
                                <button type='submit' class='btn btn-outline-danger my-2 my-sm-0' name='logout'><i class='fas fa-sign-out-alt'></i></button>
                            </form>";
                } else { echo "";}
            ?>
        </div>
    </nav>