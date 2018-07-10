<script src="<?php echo base_url(); ?>lib/jquery-1.11.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/jquery.dataTables.css"/>

<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>lib/jquery.dataTables.js"></script>
<H2>Issued Book List</h2>
<hr/>
      <?php 
            $message = $this->session->flashdata('message');
            if(isset($message)){
                echo $message;
            }
       ?>
<table id="mytableId" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
<script>
$(document).ready( function () {
    $('#mytableId').DataTable();
} );
</script>
