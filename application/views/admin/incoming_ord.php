	
<br>
<br>
					<h1>Incoming Office of the Regional Director
						<small>(Documents)</small>
						<br>
						<div class="float-left"><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#inordAdd"><i class="fa fa-plus"></i> Add New</a> 
						<button class="btn btn-default"><i class="fas fa-print" aria-hidden="true"></i> Print</button>
						</div>
						<br>
					</h1>
	<br>
				<div class="card col-12">
					<div class="card-header col-12">
						Incoming ORD		
					</div>
					<div class="card-body col-md-12">
						<div class="row">
							<div class="col-md-12">
								<table id="viewIncoming_ord" class="table table-striped table-bordered" style="width: 100%">
									<thead>
										<tr >
                      <!-- <th>ID</th> -->
											<th>Date</th>
											<th>Source</th>
											<th>Content</th>
											<th>Address</th>
											<th>Status</th>
											<th style="text-align: right;">Actions</th>
										</tr>
									</thead>
									<tbody id="show_incoming_ord">
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- MODAL ADD -->
				<form>
					<div class="modal fade" id="inordAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Incoming Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                          <input type="hidden" name="inOrd_id" id="inOrd_id" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="inOrdDate" id="inOrdDate" class="form-control" placeholder="Date" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Source</label>
                            <div class="col-md-10">
                              <input type="text" name="inOrdSource" id="inOrdSource" class="form-control" placeholder="Source" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Content</label>
                            <div class="col-md-10">
                              <input type="text" name="inOrdContent" id="inOrdContent" class="form-control" placeholder="Content" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <textarea type="text" name="inOrdAdree" id="inOrdAdree" class="form-control" placeholder="Address" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">Status</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="inOrdStat" id="inOrdStat" class="form-control" placeholder="Status" required="true" value="Pending">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="save" type="submit" id="btn_save_inord" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
				</form>

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="inordEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Incoming ORD Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">ID</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="inOrd_id_edit" id="inOrd_id_edit" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="inOrdDate_edit" id="inOrdDate_edit" class="form-control" placeholder="Date" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Source</label>
                            <div class="col-md-10">
                              <input type="text" name="inOrdSource_edit" id="inOrdSource_edit" class="form-control" placeholder="Source">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Content</label>
                            <div class="col-md-10">
                              <input type="text" name="inOrdContent_edit" id="inOrdContent_edit" class="form-control" placeholder="Content">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <textarea type="text" name="inOrdAdree_edit" id="inOrdAdree_edit" class="form-control" placeholder="Address"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update_inord" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <!-- MODAL RECEIVE -->
          <form>
            <div class="modal fade" id="inordReceive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Receive Document?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">ID</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="inOrd_id_receive" id="inOrd_id_receive" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="inOrdStat_receive" id="inOrdStat_receive" class="form-control" placeholder="Status" value="Received" readonly="">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_receive_inord" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
