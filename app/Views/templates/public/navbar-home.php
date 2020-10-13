<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarhome">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url() ?>">Husni</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('post') ?>">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->
</header>