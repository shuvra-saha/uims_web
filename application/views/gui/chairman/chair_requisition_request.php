<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Approve Requisition</title>
    <?php include 'chair_header.php';
    if( $this->session->userdata('type') != 'director'){
        header('Location: '.base_url().'login');
    }
    ?>
</head>
<body>

<?php include 'nav.php'?>
<!-- Pushy Menu -->
<?php include 'menu.php' ?>
<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->

<div id="container" style="margin-top: 10px">
    <!-- Menu Button -->
    <button class="menu-btn">&#9776; Menu</button>
    <h1 style=" text-align: center; color: black; border-bottom: 2px grey solid"> Product Requisition</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Sender</th>
            <th>Product</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Sent Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        if($requisition != null){
            foreach ($requisition as $req){
                echo '<tr>';
                echo '<td>'.$i++.'</td>';
                echo '<td>'.$req['name'].'</td>';
                echo '<td>'.$req['pr_name'].'</td>';
                echo '<td>'.$req['cat_name'].'</td>';
                echo '<td>'.$req['quantity'].'</td>';
                echo '<td>'.$req['send_date'].'</td>';
                ?>
                <td>
                    <form method="get"
                          action="<?php echo base_url(); ?>/chairman/approveOrCancelRequisition">
                        <input type="submit" name="action" value="Approve" id="btn"
                               class="btn btn-success"/>
                        <input type="submit" name="action" value="Cancel" id="btn"
                               class="btn btn-danger"/>
                        <input type="hidden" name="r_id"
                               value="<?php echo $req['r_id']; ?>"/>
                    </form>
                </td>
                <?php
                echo '</tr>';
            }
        }
        else{

        }
        ?>
        </tbody>

    </table>

</div>


<footer class="site-footer push"></footer>

<!-- Pushy JS -->
<script src="<?php echo base_url(); ?>/assets/js/pushy.min.js"></script>

</body>
</html>

