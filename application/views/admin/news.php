<a href="<?php echo base_url('Admin/newsAdd'); ?>">A&ntilde;adir noticia</a>
<?php foreach($news as $item) { ?>
    <div class="post-preview">
        <a href="<?php echo base_url('admin/newsEdit/' . $item->id); ?>">
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