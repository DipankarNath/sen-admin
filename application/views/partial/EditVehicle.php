<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <p>Edit Vehicle</p>
            <?php
            foreach ($product_data->result() as $row)
            {?>
            <a href="#"><?php echo $row->Pr_name;?></a>
            <?php }
            ?>
        </div>
    </div>
</div>
