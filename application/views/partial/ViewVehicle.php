<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">Search Record</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>



                <table class="table datatable-basic table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Maker</th>
                        <th>Fuel</th>
                        <th>Model</th>
                        <th>Body Dimension</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($vehicleData->result() as $row)
                    {?>
                    <tr>
                        <td><a href="#"><?php echo $row->Pr_name;?></a></td>
                        <td><?php echo $row->Maker;?></a></td>
                        <td><?php echo $row->Fuel;?></a></td>
                        <td><?php echo $row->Model1;?></a></td>
                        <td><?php echo $row->BDimension;?></a></td>
                        <td>
                            <span class="label label-success">
                                <?php if($row->Status==1){
                                        echo "Active";}
                                ?>
                            </span>
                            <span class="label label-default">
                                <?php if($row->Status==0) {  echo "Inactive";}
                                ?>

                            </span>
                        </td>

                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                        <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                        <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <?php }
                    ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
