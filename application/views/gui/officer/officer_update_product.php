<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Update Product</title>
    <?php
    if( $this->session->userdata('type') != 'officer'){
        header('Location: '.base_url().'login');
    }
    include 'officer_header.php';?>
    <?php include 'officer_nav_menu.php';?>
</head>
<body>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->

<div id="container">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black;"> Update Product</h1><hr>
    <form id="requisition" onsubmit="return updateProductValidation()" action="<?php echo base_url() ?>officer/updateQuantity" method="get">
        <select name="category" id="category" style="width: 250px; padding: 10px; margin: 10px">
            <option value="">Select Category</option>
            <?php
            if($cat_list != null){
                foreach ($cat_list as $category){?>
                    <option value="<?php echo $category['c_id']; ?>"><?php echo $category['cat_name']; ?></option>
               <?php }
            }
            ?>
        </select>
        <p id="wrongCategory" style="color: red;margin-left: 10px"></p>
        <select disabled="" name="product" id="product" style="width: 250px; padding: 10px; margin: 10px">
           <option value="default">Select Product</option>

        </select>
        <p id="wrongProduct" style="color: red;margin-left: 10px"></p>
        <input type="number" id="quantity" name="quantity" min="0" placeholder="Enter added quantity" style="width: 250px; padding: 10px; margin: 10px" required> <br>
        <input type="submit" value="Update"  class="btn btn-success" style="width: 250px; padding: 10px; margin: 10px"><br>
        <input type="reset" value="Cancel"  class="btn btn-danger" style="width: 250px; padding: 10px; margin: 10px">
    </form>
</div>
<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="<?php echo base_url();?>/assets/js/pushy.min.js"></script>
<script>
    $(document).ready(function () {
        $('#category').on('change',function () {
            var category_id = $(this).val();
           // alert(category_id);
            if(category_id == ""){
                $('#product').prop('disabled',true);
            }else{
                $('#product').prop('disabled',false);
                $.ajax({
                    url: "<?php echo base_url()?>officer/getProductByCid",
                    type: "POST",
                    data: {'category_id': category_id},
                    dataType: 'json',
                    success : function (data) {
                        //alert('ok');
                        $('#product').html(data);
                    },
                    error: function () {
                        alert('No product available of this category');
                    }
                });
            }
        });
    });

</script>

</body>
</html>

