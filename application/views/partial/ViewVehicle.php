<div class="content-wrapper"><!-- Content wrapper -->
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <?php if($this->session->flashdata('addFromValErr')){ ?>
                        <div class="alert bg-danger alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold"> Opps! </span><?php echo $this->session->flashdata('addFromValErr'); ?>
<!--                            Name of the Vehicle and Vehicle Description should not be empty.-->
                        </div>
                    <?php }?>
                        <?php if($this->session->flashdata('addFromSucc')){ ?>
                            <div class="alert bg-success alert-styled-left">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                <span class="text-semibold">Well done!</span> You successfully added a vehicle in the record.
                            </div>
                        <?php } ?>
                    </div>
            </div>
            <div class="panel panel-flat border-top-lg border-top-pink-600 border-bottom-pink-600">
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

                                <?php if($row->Status==1){
                                        echo "<span class=\"label label-success\">Active </span>";}
                                        else { echo "<span class=\"label label-default\">Inactive </span>";}
                                ?>
                        </td>

                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="<?php echo base_url()?>Dashboard/edit/<?php echo $row->Id; ?>"><i class="icon-eraser"></i> Edit</a></li>
                                        <li><a href="<?php echo base_url()?>Dashboard/remove/<?php echo $row->Id; ?>"><i class="icon-file-excel"></i> Remove</a></li>
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
