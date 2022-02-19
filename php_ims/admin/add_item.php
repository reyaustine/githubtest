<?php
include "header.php";
?>


<div id="content">
      <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb">
          <a href="demo.php"  class="tip-bottom">
            <i class="icon-home">
            </i>
            Inventory
          </a>
        </div>
      </div>
      <!--End-breadcrumbs-->
      <!--Action boxes-->
      <!--Container-Fluid-->
      <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> 
                <span class="icon"> 
                  <i class="icon-align-justify">
                  </i> 
                </span>
                <h5>Add new Item
                </h5>
              </div>
              <div class="widget-content nopadding">
                <!--FORM-->
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
                  
                  <!--DATATABLE -->
            
              </div>
              </div><!--span12 -->
            </div>
          </div> 
          <!--Container-Fluid-->
        </div> 

        <?php
include "footer.php";
?>
