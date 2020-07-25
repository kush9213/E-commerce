
<div class="page-wrapper" style="min-height: 724px;">

<div class="container-fluid">

    <div class="col-md-12">

        <div class="card card-body">
            <h3 class="box-title m-b-0"> Add Category</h3>
            <p class="text-muted m-b-30 font-13"> 
                <?php echo date("d-m-y"); ?> 
             </h4></p>
            <form class="form-horizontal" action="<?= base_url(); ?>index.php/add_sub_category" method="post">
            <div class="form-group row">
            <input type="hidden" name="date" value=" <?php echo $class['sub_category_id'];?>  ">

                    <input type="hidden" name="date" value=" <?php echo date("d-m-y"); ?> ">
                                      <label for="example-text-input" class="col-2 col-form-label"> Category Name*</label>
                                      <div class="col-4">

                                      <select class="custom-select col-12" name="category_id">
                                        <option selected="">Choose...</option>
                                        <?php if (!empty($fetch_category)) {
                        foreach ($fetch_category as $clss) { ?>
                            <option value="<?php echo $clss->category_id; ?> ">
                                <?php echo $clss->category_name; ?>

                            </option>
                        <?php }
                    } else {  ?>
                    <?php } ?>
                                    </select>
                                        <?php echo form_error('category_name');?>
                                      </div>
                                    </div>
                                    <div class="form-group row">

                      <label for="example-text-input" class="col-2 col-form-label">Sub Category Name*</label>
                     <div class="col-4">
                    <input type="text" name="sub_category" value="<?php echo $class['sub_category'];?>  " class="form-control" >
                    <?php echo form_error('sub_category');?>
                  </div>
                </div>
                                  

                <div class="form-group m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" id="submit" class="btn btn-info waves-effect waves-light m-t-10">Add </button>

                        <button  class="btn btn-info waves-effect waves-light btn-danger m-t-10"> <a href="<?= base_url(); ?>index.php/view_sub_category " style="color: white;"> Cancel</a> </button>

                    </div>
                </div>
                <div class="form-group m-b-0">

                </div>
            </form>

        </div>
    </div>
 
</div>

</div>
