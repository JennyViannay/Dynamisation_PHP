<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                    if(empty($_SESSION['isConnected']) && empty($_SESSION['username'])){
                        echo    "<li class='nav-item'>
                                    <a class='nav-link' href='../pages/login.php'>Login</a>
                                </li>"; 
                    } else { echo "";}
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/content.php">Actuality</a>
                </li>
                <?php
                    if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] === true){
                        echo    "<form method='POST' action='../index.php'>
                                    <li class='nav-item'>
                                        <button type='submit' class='btn btn-danger' name='logout'>Logout</button>
                                    </li>
                                </form>";
                    } else { echo "";}
                ?>
            </ul>
        </div>
    </nav>