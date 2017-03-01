<header class="intro-header" style="background-image: url('<?php echo base_url(); ?>img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $news->header; ?></h1>
                        <h2 class="subheading"><?php echo $news->subHeader; ?></h2>
                        <span class="meta">Escrito por <a href="#"><?php echo $news->user->firstName . ' ' . $news->user->lastName; ?></a> el <?php
                            $time = strtotime($news->date);
                            echo date("d", $time) . " de ";
                            $month = "";
                            switch (date("n", $time)) {
                                case 1: 
                                    $month = "enero";
                                    break;
                                case 2: 
                                    $month = "febrero";
                                    break;
                                case 3: 
                                    $month = "marzo";
                                    break;
                                case 4: 
                                    $month = "abril";
                                    break;
                                case 5: 
                                    $month = "mayo";
                                    break;
                                case 6: 
                                    $month = "junio";
                                    break;
                                case 7: 
                                    $month = "julio";
                                    break;
                                case 8: 
                                    $month = "agosto";
                                    break;
                                case 9: 
                                    $month = "septiembre";
                                    break;
                                case 10: 
                                    $month = "octubre";
                                    break;
                                case 11: 
                                    $month = "noviembre";
                                    break;
                                case 12: 
                                    $month = "diciembre";
                                    break;
                            }
                            echo $month . " del ";
                            echo date("Y", $time);
                            ?></span>
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