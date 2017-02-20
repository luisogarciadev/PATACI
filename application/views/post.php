<header class="intro-header" style="background-image: url('<?php echo base_url(); ?>img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $news->header; ?></h1>
                        <h2 class="subheading"><?php echo $news->subHeader; ?></h2>
                        <span class="meta">Escrito por <a href="#"><?php echo $news->user->firstName . ' ' . $news->user->lastName; ?></a> el 19 de Noviembre del 2015</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container show-after-intro">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php echo $news->text; ?>
                </div>
            </div>
        </div>
    </article>

    <hr>