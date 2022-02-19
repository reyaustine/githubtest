 
        <?php
        include "header.php";
          $result = $link->query("select * from inventory");
          $items = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Basic Datatable</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                      <tr>
                        <th>Item Code
                        </th>
                        <th>Item Name
                        </th>
                        <th>Description
                        </th>
                        <th>Original Price
                        </th>
                        <th>Retail Price
                        </th>
                        <th>Quantity
                        </th>
                        <th>Location
                        </th>
                        <th>Category
                        </th>
                        <th>Image
                        </th>
                        <th>Edit
                        </th>
                      </tr>
                    </thead>
                     <tbody>
                      <?php foreach($items as $items) : ?>
                      <tr>
                        <td>
                          <?php echo $items["item_code"]?>
                        </td>
                        <td>
                          <?php echo $items["item_name"]?>
                        </td>
                        <td>
                          <?php echo $items["item_desc"]?>
                        </td>
                        <td>
                          <?php echo $items["item_price"]?>
                        </td>
                        <td>
                          <?php echo $items["retail_price"]?>
                        </td>
                        <td>
                          <?php echo $items["quantity"]?>
                        </td>
                        <td>
                          <?php echo $items["location"]?>
                        </td>
                        <td>
                          <?php echo $items["category"]?>
                        </td>
                        <td>
                          <?php echo $items["img"]?>
                        </td>
                        <td>
                            <a href="edit_item.php?id=<?php echo $items["id"];?>" class="text-success">Edit Item</a>
                        </td>
                      </tr>
                      <?php endforeach;?>
                      </tbody>
                      <tfoot>
                         <tr>
                        <th>Item Code
                        </th>
                        <th>Item Name
                        </th>
                        <th>Description
                        </th>
                        <th>Original Price
                        </th>
                        <th>Retail Price
                        </th>
                        <th>Quantity
                        </th>
                        <th>Location
                        </th>
                        <th>Category
                        </th>
                        <th>Image
                        </th>
                        <th>Edit
                        </th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
      $('.dataTables_filter input[type="search"]').
        attr('placeholder','Search Items Here...').
        css({'width':'400px','display':'inline-block'});
    </script>

