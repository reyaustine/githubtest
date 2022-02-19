    <?php
    include "db.php";
    include "header.php";
    ?>
    <link
      href="../assets/libs/magnific-popup/dist/magnific-popup.css"
      rel="stylesheet"
    />
    <!--main-container-part-->
      <!--Container-Fluid-->
    <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
           <div class="row">
            <div class="col-md-12"><!-- FORM CONTAINER -->
              <div class="card">
                <form id="form1" name="form1" action="" method="post" class="form-vertical">
                  <div class="card-body">
                    <h4 class="card-title">Add New Item</h4>
                    <div class="form-group row">
                      <label
                        for="item_code"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM CODE : </label>
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id = "item_code"
                          name="item_code"
                          value="FGI-0000123"
                          placeholder="FGI-000000"
                          
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="item_name"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM NAME : </label>
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="item_name"
                          name="item_name"
                          placeholder="ITEM NAME"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="item_desc"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM DESCRIPTION : </label>
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="item_desc"
                          name="item_desc"
                          placeholder="ITEM DESCRIPTION"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="item_price"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM PRICE : </label>
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="item_price"
                          name="item_price"
                          placeholder="ITEM ORIGINAL PRICE FROM SUPPLIER"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="retail_price"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM RETAIL PRICE : </label>
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="retail_price"
                          name="retail_price"
                          placeholder="ITEM RETAIL PRICE"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="quantity"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM QUANTITY : </label>
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="quantity"
                          name="quantity"
                          placeholder="ITEM QUANTITY ARRIVED"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label
                        for="quantity"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM STOCK LOCATION : </label>
                      <div class="col-sm-9">
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
                    </div>

                    <div class="form-group row">
                      <label
                        for="quantity"
                        class="col-sm-3 text-end control-label col-form-label"
                        >ITEM CATEGORY : </label>
                      <div class="col-sm-9">
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
                    <div class="form-group row">
                      <div class="col-md-4">
                      <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p>
                       
                            </p>
                          </div>
                    </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                             <div class="row el-element-overlay"> 
                            <div class="col-lg-6 col-md-12">
                              <div class="card">
                                <div class="el-card-item">
                                  <div class="el-card-avatar el-overlay-1">
                                    <img id="output" src="../assets/images/no_img.jpg" width="100" height="100" alt="item" />
                                    <div class="el-overlay">
                                      <ul class="list-style-none el-info">
                                        <li class="el-item">
                                          <a id ="magnify-item-photo"
                                            class="
                                              btn
                                              default
                                              btn-outline
                                              image-popup-vertical-fit
                                              el-link
                                            "
                                            href="../assets/images/no_img.jpg"
                                            ><i class="mdi mdi-magnify-plus"></i
                                          ></a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="el-card-content">
                                    <h4 class="mb-0">Upload a photo</h4>
                                     <div class="custom-file">
                                      <input name="item_img" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])
                                        getElementById('magnify-item-photo').href = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <span class="text-muted"></span>
                                     <button name="submit1" onclick="myFunction()" type="button" class="btn btn-primary">Submit</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                           </div> 
                          </div>
                        </div>
                      </div>
                         <div class="alert alert-danger" id="error" style="display:none">
                        <strong>Error!</strong> This username already exist! Please try another username.
                      </div>
                      <div class="alert alert-success" id="success" style="display:none">
                        <strong>Success!</strong> User Updated Successfully!
                      </div>
                      <div class="border-top">
                        <div class="card-body">
                          <div class="form-group row">
                            <button name="submit1"  type="button" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </div>
                     </div> 

                   </div>  <!--END CARD BODY -->      
                   
                    
                   <!-- CARD BODY END-->
                </form>
              </div>
            </div> 
        </div>
      </div>
      <script>
        function myFunction() {
          <?php
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
    else {
      mysqli_query($link,"insert into inventory values (NULL,'$_POST[item_code]','$_POST[item_name]','$_POST[item_desc]','$_POST[item_price]','$_POST[retail_price]','$_POST[quantity]','$_POST[location]','$_POST[category]','$_POST[output]')");
    ?>
        <script type="text/javascript">
            document.getElementById("success").style.display="block";
            document.getElementById("error").style.display="none";
            setTimeout(function(){
            window.location.href=window.location.href;},2500)
        </script>
        <?php
        
      }
          ?>
          <?php
          document.getElementById("success").innerHTML = "Hello World";
          document.getElementById("success").style.display = "block";
        }
        ?>
        </script>
        
    <?php
if(isset($_POST["submit1"]))
{
  alert("It is set!");
}
?>
    <!--END OF ISSET -->

<!--end-main-container-part-->
 
    <?php
    include "footer.php";
    ?>
