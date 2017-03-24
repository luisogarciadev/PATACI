<div class="container">
    <a href="<?php echo base_url('Admin/userAdd'); ?>">A&ntilde;adir usuario</a>
    <br><br><br>
    <div class="container">
    <?php foreach($users as $item) { ?>
        <div class="post-preview">
            <a href="<?php echo base_url('admin/userEdit/' . $item->id); ?>">
                <div class="container">
                    <div class="col-xs-4">
                        <?php echo $item->username; ?>
                    </div>
                    <div class="col-xs-4">
                        <?php echo $item->firstName . ' ' . $item->lastName; ?>
                    </div>
                    <div class="col-xs-4">
                        <a href="<?php echo base_url('Admin/DeleteUser') . '/' . $item->id; ?>">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </div>
                </div>
            </a>
        </div>
        <hr>
    <?php }; ?>
    </div>
</div>