<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href=" <?= base_url(); ?>">
        <span class=" d-block d-lg-none">Studio Developer</span>
        <span class="d-none d-lg-block">
            <div class="p-3 mb-3  alert ">
                <p><?= $title; ?></p>
            </div>
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets/img/') . $image; ?>" alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <a class="nav-link js-scroll-trigger" href="#home">Home</a>
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
            <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
        </ul>
    </div>
</nav>