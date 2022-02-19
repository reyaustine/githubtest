    <?php
    include "../user/db.php";
    include "header.php";
    $limit = 10;
    $page = isset($_GET['page'])? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $result = $link->query("select * from inventory limit $start,$limit");
    $items = $result->fetch_all(MYSQLI_ASSOC);
    $result1 = $link->query("select count(id) as id from inventory");
    $itemCount = $result1->fetch_all(MYSQLI_ASSOC);
    $totalItems = $itemCount[0]['id'];
    $pages = ceil($totalItems/$limit);
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
      <!--Container-Fluid-->
    <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form name="form1" action="" method="post" class="form-horizontal">
                  <div class="span6">  
                    <!--SPAN6-->
                    <div class="control-group">
                      <label class="control-label">Item Code
                      </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Item Code" name="item_code" />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Item Name
                      </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Item Name" name="item_name"/>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Item Description
                      </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Description" name="item_desc"/>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Item Price
                      </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Original Price" name="item_price"/>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Item Retail Price
                      </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Retail Price" name="retail_price"/>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Quantity
                      </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Onhand Quantity" name="quantity"/>
                      </div>
                    </div>
                  </div>                          
                  <!--SPAN6-->
                  <div class="span6">
                    <div class="control-group">
                      <input type="file" id="image_input" accept="image/*;capture=camera">
                      <div id="display_image">Upload Item Photo
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Item Location
                      </label>
                      <div class="controls">
                        <select name="location" class="span11">
                          <option>FGI-MAIN
                          </option>
                          <option>FGI-KAISHA
                          </option>
                          <option>FGI-BYAHE
                          </option>
                          <option>FGI-BULACAO
                          </option>
                        </select>  
                      </div>
                      <div class="control-group">
                        <label class="control-label">Category
                        </label>
                        <div class="controls">
                          <select name="category" class="span11">
                            <option>Accessories
                            </option>
                            <option>Bags
                            </option>
                            <option>RTWs
                            </option>
                            <option>Toys
                            </option>
                            <option>Party Needs
                            </option>
                            <option>School Supplies
                            </option>
                            <option>Cosmetics
                            </option>
                          </select>  
                        </div>
                      </div>
                      
                    </div> <!--SPAN6-->
                  </div>
                       <center>
                        <div class="control-group" style="margin-bottom: 25px; margin-top: 25px">
                          <button type="submit" name="submit1" class="btn btn-primary" >Save
                          </button>
                        </div>
                      </center>
                      <div class="alert alert-success" id="success" style="display:none">
                        <strong>Success!
                        </strong> Item Added Successfully!
                      </div>
                      <div class="alert alert-danger" id="error" style="display:none">
                        <strong>Error!
                        </strong> This Item is already added in the Database.
                      </div>
                </form>
               </div>
             </div>
           </div>
      </div><!--span12 -->
        <script>
          const image_input = document.querySelector("#image_input");
          var uploaded_image;
          image_input.addEventListener('change', function() {
            const reader = new FileReader();
            reader.addEventListener('load', () => {
              uploaded_image = reader.result;
              document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image}
    )`;
            }
                                   );
            reader.readAsDataURL(this.files[0]);
          }
                                      );
        </script>
        <?php
    if(isset($_POST["submit1"]))
    {
    $count=0;
    $res=mysqli_query($link,"select * from inventory where item_name='$_POST[item_name]' && item_code='$_POST[item_code]'");
    $count=mysqli_num_rows($res);
    if($count>0){
    ?>
        <script type="text/javascript">
          document.getElementById("success").style.display="none";
          document.getElementById("error").style.display="block";
        </script>
        <?php
    }
    else
    {
    mysqli_query($link,"insert into inventory values (NULL,'$_POST[item_code]','$_POST[item_name]','$_POST[item_desc]','$_POST[item_price]','$_POST[retail_price]','$_POST[quantity]','$_POST[location]','$_POST[category]','$_POST[img]')");
    ?>
        <script type="text/javascript">
          document.getElementById("success").style.display="block";
          document.getElementById("error").style.display="none";
          setTimeout(function(){
            window.location.href=window.location.href;
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
