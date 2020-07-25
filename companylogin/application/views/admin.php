<div class="page-wrapper" style="min-height: 724px;">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Data</h4>

                <ul class="nav nav-tabs" role="tablist">


                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Basic Info</span></a> </li>


                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Description</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Images</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#video" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Gallery Images</span></a> </li>

                    <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#s" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Listing Features</span></a> </li> -->
                </ul>
                <!-- Tab panes -->
                <form class="" method="post" action="<?= base_url(); ?>index.php/edit_basic_info ">

                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="p-20">
                                <h3>Update Basic Info</h3>
                                <?php echo $this->session->flashdata('done'); ?>
                                <?php echo $this->session->flashdata('error'); ?>
                                <input type="hidden" name="basic_info_id" value="<?php echo $basic_info['basic_info_id']; ?> ">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 control-label col-form-label">Company Name*</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="company_name" value="<?php echo $basic_info['company_name'] ?>" class="form-control" id="inputEmail3" placeholder="Enter Company Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3  control-label col-form-label">Owned By*</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="owner" value="<?php echo $basic_info['owner'] ?>" class="form-control" id="inputEmail3" placeholder="Enter Owner Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3  control-label col-form-label">Email*</label>
                                    <div class="col-sm-4">
                                        <input type="email" name="email" value="<?php echo $basic_info['email'] ?>" class="form-control" id="inputEmail3" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3  control-label col-form-label">Location*</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="location" value="<?php echo $basic_info['location'] ?>" class="form-control" id="inputEmail3" placeholder="Enter Location">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3  control-label col-form-label">Mobile No.*</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="mobile" value="<?php echo $basic_info['mobile'] ?>" class="form-control" id="inputEmail3" placeholder="Enter Mobile No.">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3  control-label col-form-label">GST No.*</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="gst" value="<?php echo $basic_info['gst'] ?>" class="form-control" id="inputEmail3" placeholder="Enter GST No.">
                                    </div>
                                </div>

                                <div class="form-group m-b-0">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Update Info</button>
                                    </div>
                                    <!-- </form> -->
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane p-20" id="messages" role="tabpanel">


                            <h3>Update Description</h3>
                            <!-- <?php echo $this->session->flashdata('done'); ?> -->
                            <!-- <form class="form-horizontal" method="post" action="<?= base_url(); ?>index.php/edit_basic_info "> -->
                            <!-- <input type="hidden" name="basic_info_id" value="<?php echo $basic_info['basic_info_id']; ?> "> -->
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 control-label col-form-label">Description*</label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" name="description" rows="5">  <?php echo $basic_info['description'] ?></textarea>

                                </div>
                            </div>



                            <div class="form-group m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Update Description</button>
                                </div>
                            </div>
                </form>

            </div>



            <div class="tab-pane p-20" id="profile" role="tabpanel">
                <div class="p-20">

                    <form class="form-horizontal" method="post" action="<?= base_url(); ?>index.php/edit_images " enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Upload Landing Image*</label>
                            <div class="col-4">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <input type="file" name="landing_image">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Upload Your Pic*</label>
                            <div class="col-4">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <input type="file" name="pics">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Update Images</button>
                            </div>
                        </div>
                    </form>


                    <div class="card">
                            <div class="card-body">
                            <div class="table-responsive m-t-40">
                                    <table id="example" class="table display table-bordered table-striped">
                                                    <thead>
                                                        <tr role="row">
                                                            <th >Landing Image</th>
                                                            
                                                            <th >Your Image</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <?php $i = 1;
                                                            if (!empty($images)) {


                                                                foreach ($images as $class) { ?>
                                                        <tr>
                                                       
                                                            
                                                            <td>
                                                            <div>
                                                           
                                                            <img src=" <?php echo base_url()."uploads/". $class->landing_image ?>" alt="">
                                                            </div>
                                                            
                                                            </td>

                                                            <td>
                                                            <div>
                                                           
                                                            <img src=" <?php echo base_url()."uploads/". $class->pics ?>" alt="">
                                                            </div>
                                                            
                                                            </td>


                                                            <!-- <td class="actions">

                                                            <a class="detail-icon" href="<?php echo base_url(); ?>index.php/get_gallery_id?gallery_images_id=<?php echo $class->gallery_images_id; ?>"> <i class="fa fas fa-plus-circle"></i> </a>
                                                                
                                                            <a class="remove" href="<?php echo base_url(); ?>index.php/delete_gallery_images?gallery_images_id=<?php echo $class->gallery_images_id; ?>" onclick="return confirm('Are you sure ?')" class="on-default remove-row"><i class="fas fa-trash"></i></a>
                                                            </td> -->
                                                        </tr>
                                                    <?php }
                                                            } else {  ?>
                                                             <tr>
                                                        <td colspan="7"> records not found</td>
                                                    </tr>
                                                <?php } ?>
                                                </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-pane p-20" id="video" role="tabpanel">
                <div class="p-20">
                    <form action="<?= base_url(); ?>index.php/gallery" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Upload Gallery Images*</label>
                            <div class="col-4">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <input type="file" name="gallery_images">
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Add New Image</button>
                            </div>
                        </div>
                    </form>



                    <div class="card">
                            <div class="card-body">
                            <div class="table-responsive m-t-40">
                                    <table id="example" class="table display table-bordered table-striped">
                                                    <thead>
                                                        <tr >
                                                            <th >S No.</th>
                                                            
                                                            <th >Uploaded Images</th>
                                                       
                                                           
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php $i = 1;
                                                            if (!empty($gallery_imagess)) {


                                                                foreach ($gallery_imagess as $class) { ?>
                                                        <tr>


                                                            <td><?php echo $i++; ?></td>

                                                       
                                                            
                                                            <td>
                                                            <div>
                                                           
                                                            <img src=" <?php echo base_url()."../login/gallery_images/". $class->gallery_images ?>" alt="">
                                                            </div>
                                                            
                                                            </td>

                                                            


                                                            <td class="actions">

                                                            <!-- <a class="detail-icon" href="<?php echo base_url(); ?>index.php/get_gallery_id?gallery_images_id=<?php echo $class->gallery_images_id; ?>"> <i class="fa fas fa-plus-circle"></i> </a> -->
                                                                
                                                            <a class="remove" href="<?php echo base_url(); ?>index.php/delete_gallery_images?gallery_images_id=<?php echo $class->gallery_images_id; ?>" onclick="return confirm('Are you sure ?')" class="on-default remove-row"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                            } else {  ?>
                                                             <tr>
                                                        <td colspan="7"> records not found</td>
                                                    </tr>
                                                <?php } ?>
                                                </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                    </div>

                </div>
            </div>


            <div class="tab-pane p-20" id="s" role="tabpanel">
                <div class="p-20">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>