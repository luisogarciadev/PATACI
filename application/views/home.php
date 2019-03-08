    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo base_url(); ?>img/home.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>PATA</h1>
                        <hr class="small">
                        <span class="subheading">Esteriliza</span>
                        <span class="subheading">Spay &amp; Neuter</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container show-after-intro">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach($news as $item) { ?>
                <div class="post-preview">
                    <a href="<?php echo base_url('news/' . $item->id); ?>">
                    <h2 class="post-title">
                            <?php echo $item->header; ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $item->subHeader; ?>
                        </h3>
                    </a>
                </div>
                <hr>
            <?php }; ?>
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    