
<?php
include "header.php";
include "../user/db.php";
$id=$_GET["id"];
$res=mysqli_query($link,"select * from inventory where id=$id");
$item_code="";
$item_name="";
$item_desc="";
$item_price="";
$retail_price="";
$quantity="";
$location="";
$category="";
$img="";
while($row=mysqli_fetch_array($res)){
$item_code=$row["item_code"];
$item_name=$row["item_name"];
$item_desc=$row["item_desc"];
$item_price=$row["item_price"];
$retail_price=$row["retail_price"];
$quantity=$row["quantity"];
$location=$row["location"];
$category=$row["category"];
$img=$row["img"];
}
?>
<style>
#display_image{
  width: 400px;
  height: 200px;
  border: 2px solid black;
  background-position: center;
  background-size: 400px 200px;
}
</style>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="demo.php"  class="tip-bottom"><i class="icon-home"></i>
            Inventory</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
          <div class="widget-box">
           <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add new Item</h5>
        </div>
        <div class="widget-content nopadding">
          <form name="form1" action="" method="post" class="form-horizontal">
          <div class="span6">  
          <div class="control-group">
              <label class="control-label">Item Code</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Item Code" name="item_code" value=<?php echo $item_code?> readonly>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Item Name</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Item Name" name="item_name" value=<?php echo $item_name?> />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Item Description</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Description" name="item_desc" value=<?php echo $item_desc?> />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Item Price</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Original Price" name="item_price" value=<?php echo $item_price?> />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Item Retail Price</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Retail Price" name="retail_price" value=<?php echo $retail_price?> />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Quantity</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Onhand Quantity" name="quantity" value=<?php echo $quantity?> />
              </div>
            </div>
          </div>

          <div class="span6">

            <div class="control-group">
            <input type="file" id="image_input" accept="image/*;capture=camera">
            <div id="display_image">Upload Item Photo</div></div>

              <div class="control-group">
              <label class="control-label">Item Location</label>
              <div class="controls">
                <select name="location" class="span11">
                <option>FGI-MAIN</option>
                <option>FGI-KAISHA</option>
                <option>FGI-BYAHE</option>
                <option>FGI-BULACAO</option>
                </select>  
              </div>

              <div class="control-group">
              <label class="control-label">Category</label>
                <div class="controls">
                <select name="category" class="span11">
                <option <?php if($category=="Accessories"){echo "selected";}?>>Accessories</option>
                <option <?php if($category=="Bags"){echo "selected";}?>>Bags</option>
                <option <?php if($category=="RTWs"){echo "selected";}?>>RTWs</option>
                <option <?php if($category=="Toys"){echo "selected";}?>>Toys</option>
                <option <?php if($category=="Party Needs"){echo "selected";}?> >Party Needs</option>
                <option <?php if($category=="School Supplies"){echo "selected";}?> >School Supplies</option>
                <option <?php if($category=="Cosmetics"){echo "selected";}?>>Cosmetics</option>
                </select>  
                </div>
                </div>
                </div>
              </div>

            <center>
            <div class="control-group" style="margin-bottom: 25px; margin-top: 25px">
              <button type="submit" name="submit1" class="btn btn-primary"  >Update</button>
            </div>
            </center>
           
            <div class="alert alert-success" id="success" style="display:none">
                <strong>Success!</strong> Item Updated Successfully!
            </div>
         </form>
        </div>
                      </div>
      
                <div class="widget-box" >
                <div class="widget-content" >
            <table name="inventorytable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Item Code</th>
                  <th>Item Name</th>
                  <th>Description</th>
                  <th>Original Price</th>
                  <th>Retail Price</th>
                  <th>Quantity</th>
                  <th>Location</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $res=mysqli_query($link,"select * from inventory");
              while($row=mysqli_fetch_array($res))
              {
                ?>
                <tr>
                  <td><?php echo $row["item_code"]?></td>
                  <td><?php echo $row["item_name"]?></td>
                  <td><?php echo $row["item_desc"]?></td>
                  <td><?php echo $row["item_price"]?></td>
                  <td><?php echo $row["retail_price"]?></td>
                  <td><?php echo $row["quantity"]?></td>
                  <td><?php echo $row["location"]?></td>
                  <td><?php echo $row["category"]?></td>
                  <td><?php echo $row["img"]?></td>
                  <td><a href="edit_item.php?id=<?php echo $row["id"];?>" class="text-success" >Edit Item</td>
                  <td><a href="delete_item.php?id=<?php echo $row["id"];?>" class="text-warning">Delete Item</td>
                </tr>
                  
                <?php
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
            </div>
            </div>
            </div>
        </div>





<script>
 const image_input = document.querySelector("#image_input");
  var uploaded_image;
      image_input.addEventListener('change', function() {
        const reader = new FileReader();
        reader.addEventListener('load', () => {
          uploaded_image = reader.result;
          document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
      });
</script>

<?php
if(isset($_POST["submit1"]))
{
  if(isset($_POST["submit1"])){
    mysqli_query($link,"update inventory set item_code='$_POST[item_code]',item_name='$_POST[item_name]',item_desc='$_POST[item_desc]',item_price='$_POST[item_price]',retail_price='$_POST[retail_price]',quantity='$_POST[quantity]',location='$_POST[location]',category='$_POST[category]',img='$_POST[img]' where id=$id") or die(mysqi_error($link));
    ?>
    <script type="text/javascript">
      document.getElementById("success").style.display="block";
      setTimeout(function(){
        window.location.href="inventory.php";
      }
      ,2500)
    </script>
    <?php
}
}
?>
<!--end-main-container-part-->

<?php
include "footer.php";
?>