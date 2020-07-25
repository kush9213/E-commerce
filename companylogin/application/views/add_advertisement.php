<div class="page-wrapper" style="min-height: 724px;">

    <div class="container-fluid">

        <div class="col-md-12">

            <div class="card card-body">
                <h3 class="box-title m-b-0"> Add Advertisement</h3>
                <p class="text-muted m-b-30 font-13">
                    <?php echo date("d-m-y"); ?>
                    </h4>
                </p>
                <form class="form-horizontal" action="<?= base_url(); ?>index.php/admin/do_upload" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="date" value="<?php echo date("d-m-y"); ?> ">

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label"> Category Name*</label>
                        <div class="col-4">

                            <select class="custom-select col-12" id="category_id" name="category_id">
                                <option selected="">Choose...</option>
                                <?php if (!empty($fetch_category)) {
                                    foreach ($fetch_category as $class) { ?>
                                        <option value="<?php echo $class->category_id; ?> ">
                                            <?php echo $class->category_name; ?>
                                            
                                        </option>
                                    <?php }
                                } else {  ?>
                                <?php } ?>
                            </select>
                            <?php echo form_error('category_name'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label"> Sub Category*</label>
                        <div class="col-4">

                            <select class="custom-select col-12" id="sub_category" name="sub_category_id">
                                <option selected="">Choose...</option>
                                
                            </select>
                            <?php echo form_error('category_name'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="example-text-input" class="col-2 col-form-label"> Name*</label>
                        <div class="col-4">
                            <input class="form-control" type="text" placeholder="Enter Name" name="name">
                            <?php echo form_error('name'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="example-text-input" class="col-2 col-form-label">Description*</label>
                        <div class="col-4">
                            <textarea class="form-control" name="description" rows="5">  </textarea>
                            <?php echo form_error('description'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="example-text-input" class="col-2 col-form-label">Upload Image*</label>
                        <div class="col-4">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">

                                <input type="file" name="image">

                            </div>
                            <?php echo form_error('image'); ?>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" id="submit" class="btn btn-info waves-effect waves-light m-t-10">Add </button>

                            <button class="btn btn-info waves-effect waves-light btn-danger m-t-10"> <a href="<?= base_url(); ?>index.php/advertisement " style="color: white;"> Cancel</a> </button>

                        </div>
                    </div>
                    <div class="form-group m-b-0">

                    </div>
                </form>
                <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
            $('#category_id').change(function(){
                var category_id = $('#category_id').val();
               
               if(category_id !=''){
                   $.ajax({
                       url:"<?= base_url() ;?>index.php/fetch_sub_category",
                       method: "POST",
                       data:{category_id:category_id},
                       success:function(data){
                            $('#sub_category').html(data);
                            
                       }

                   })
               }
            })
    })


</script>
            </div>
        </div>

    </div>

</div>