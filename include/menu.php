<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<?= ($activePage == '') ? 'active' : ''; ?>
<!-- Begin: Header -->
<header data-scroll-section>
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="invitation.php">Invitation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="e-magazine.php">E-magazine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer-service.php">Customer Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publication.php">Publication</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fal fa-user"></i>Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="themeBtn" href="get-started.php">Get Started</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END: Header -->

<main data-scroll-container>