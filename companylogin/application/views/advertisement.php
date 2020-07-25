<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 724px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-body">
              
                <h4 class="card-title"> <a href="<?php echo base_url(); ?>index.php/add_advertisement"> <button type="button" class="btn waves-effect waves-light btn-rounded btn-info"> Add </button></a>
            </h4>
            <h4 class="card-subtitle">Add Advertisement</h4>
            <h4 class="card-subtitle"><?php echo $this->session->flashdata('done'); ?></h4>
            <h4 class="card-subtitle"><?php echo $this->session->flashdata('error'); ?></h4>
            <div class="table-responsive m-t-40">
                                  
                                        <!-- <div class="row">
                                            <div class="col-sm-12 col-md-4">
                                                <div class="dataTables_length" id="config-table_length"><label>Show <select name="config-table_length" aria-controls="config-table" class="form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label></div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="config-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="config-table"></label></div>
                                            </div>
                                        </div> -->
                         
                                        <table id="example" class="table display table-bordered table-striped">
                                                    <thead>
                                                        <tr role="row">
                                                            <th >S No.</th>
                                                            
                                                            <th >Sub Category Name</th>
                                                            <th >Sub Category Name</th>

                                                            <th >Advertisement Name</th>
                                                            <th >Description</th>
                                                            <th >Images</th>
                                                            <th >Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <?php $i = 1;
                                                            if (!empty($category)) {


                                                                foreach ($category as $class) { ?>
                                                        <tr>


                                                            <td><?php echo $i++; ?></td>
                                                            <td><?php echo $class->category_name; ?></td>

                                                            <td><?php echo $class->sub_category; ?></td>
                                                            
                                                            <td><?php echo $class->name; ?></td>
                                                            <td><?php echo $class->description; ?></td>
                                                            
                                                            <td>
                                                            <div>
                                                            <img src="<?php echo base_url()."uploads/".$class->image; ?>" alt="">
                                                            </div>
                                                            
                                                            </td>

                                                            


                                                            <td class="actions">

                                                            <a class="detail-icon" href="<?php echo base_url(); ?>index.php/get_advertisement?advertisement_id=<?php echo $class->advertisement_id; ?>"> <i class="fa fas fa-plus-circle"></i> </a>
                                                                
                                                            <a class="remove" href="<?php echo base_url(); ?>index.php/delete_advertisement?advertisement_id=<?php echo $class->advertisement_id; ?>" onclick="return confirm('Are you sure ?')" class="on-default remove-row"><i class="fas fa-trash"></i></a>
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
                              

            
                        
                        <div></div></div>
    </div>
</div>         