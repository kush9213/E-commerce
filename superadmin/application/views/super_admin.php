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
        <div class="table-responsive m-t-40">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title"> <a href="<?php echo base_url(); ?>index.php/add_category"> <button type="button" class="btn waves-effect waves-light btn-rounded btn-info"> Add </button></a>
            </h4>
            <h4 class="card-subtitle">Category</h4>
                                    <div id="config-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="config-table" class="table display table-bordered table-striped no-wrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="config-table_info" style="width: 1007px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 79px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">S No.</th>
                                                            <th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 77px;" aria-label="Last name: activate to sort column ascending">Category Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 177px;" aria-label="Position: activate to sort column ascending">Date</th>
                                                            <th class="sorting" tabindex="0" aria-controls="config-table" rowspan="1" colspan="1" style="width: 177px;" aria-label="Position: activate to sort column ascending">Actions</th>
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

                                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i><?php echo $class->date; ?></span> </td>


                                                            <td class="actions">

                                                            <a class="detail-icon" href="<?php echo base_url(); ?>index.php/get_category?category_id=<?php echo $class->category_id; ?>"> <i class="fa fas fa-plus-circle"></i> </a>
                                                                
                                                            <a class="remove" href="<?php echo base_url(); ?>index.php/delete_category?category_id=<?php echo $class->category_id; ?>" onclick="return confirm('Are you sure ?')" class="on-default remove-row"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                            } else {  ?>
                                                             <tr>
                                                        <td colspan="5"> records not found</td>
                                                    </tr>
                                                <?php } ?>
                                                </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="config-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="config-table_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="config-table_previous"><a href="#" aria-controls="config-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="config-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="config-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                        <li class="paginate_button page-item next" id="config-table_next"><a href="#" aria-controls="config-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
         
   