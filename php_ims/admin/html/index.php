    <?php
    include "db.php";
    include "header.php";
    ?>

<!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>
                  </h1>
                  <h6 class="text-white">Dashboard</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
                  <h6 class="text-white">Charts</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>
                  </h1>
                  <h6 class="text-white">Widgets</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6 class="text-white">Tables</h6>
                </div>
              </div>
            </div>
          </div>

           <!-- End of Cards -->
          <div class="row">
            <div class="col-md-12">
              <h5 class="card-title">Calender</h5>
              <div class="card">
                <div class="">
                  <div class="row">
                    <div class="col-lg-3 border-right pe-0">
                      <div class="card-body border-bottom">
                        <h4 class="card-title mt-2">Drag & Drop Event</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div id="calendar-events" class="">
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-info"
                              >
                                <i class="fa fa-circle text-info me-2"></i>Event
                                One
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-success"
                              >
                                <i class="fa fa-circle text-success me-2"></i>
                                Event Two
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-danger"
                              >
                                <i class="fa fa-circle text-danger me-2"></i
                                >Event Three
                              </div>
                              <div
                                class="calendar-events mb-3"
                                data-class="bg-warning"
                              >
                                <i class="fa fa-circle text-warning me-2"></i
                                >Event Four
                              </div>
                            </div>
                            <!-- checkbox -->
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                id="drop-remove"
                              />
                              <label class="form-check-label" for="drop-remove"
                                >Remove after drop</label
                              >
                            </div>
                            <a
                              href="javascript:void(0)"
                              data-toggle="modal"
                              data-target="#add-new-event"
                              class="
                                d-flex
                                align-items-center
                                justify-content-center
                                btn
                                mt-3
                                btn-info
                                d-block
                                waves-effect waves-light
                              "
                            >
                              <i class="mdi mdi-plus fs-4 me-1"></i> Add New
                              Event
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-body b-l calender-sidebar">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- BEGIN MODAL -->
          <div class="modal none-border" id="my-event">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><strong>Add Event</strong></h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button
                    type="button"
                    class="btn btn-success save-event waves-effect waves-light"
                  >
                    Create event
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger delete-event waves-effect waves-light"
                    data-dismiss="modal"
                  >
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal Add Category -->
          <div class="modal fade none-border" id="add-new-event">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><strong>Add</strong> a category</h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Category Name</label>
                        <input
                          class="form-control form-white"
                          placeholder="Enter name"
                          type="text"
                          name="category-name"
                        />
                      </div>
                      <div class="col-md-6">
                        <label class="control-label"
                          >Choose Category Color</label
                        >
                        <select
                          class="form-select shadow-none form-white"
                          data-placeholder="Choose a color..."
                          name="category-color"
                        >
                          <option value="success">Success</option>
                          <option value="danger">Danger</option>
                          <option value="info">Info</option>
                          <option value="primary">Primary</option>
                          <option value="warning">Warning</option>
                          <option value="inverse">Inverse</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="
                      btn btn-danger
                      waves-effect waves-light
                      save-category
                    "
                    data-dismiss="modal"
                  >
                    Save
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- END MODAL -->

          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        <?php
include "footer.php";
?>