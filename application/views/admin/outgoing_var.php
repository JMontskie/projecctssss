<br>
			<h1>Outgoing Various
				<small>(Documents)</small>
				<br>
				<div class="float-left"><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#outvarAdd"><i class="fa fa-plus"></i> Add New</a> 
				<button class="btn btn-default"><i class="fas fa-print" aria-hidden="true"></i> Print</button>
				</div>
				<br>
			</h1>
<br>
			<div class="card col-12">
				<div class="card-header col-12">
					Outgoing Various		
				</div>
				<div class="card-body col-md-12">
					<div class="row">
						<div class="col-md-12">
							<table id="viewOutgoing_var" class="table table-striped table-bordered" style="width: 100%">
								<thead>
									<tr >
										<th>Date</th>
										<th>Control No.</th>
										<th>Recipient</th>
										<th>Content</th>
										<th>Status</th>
										<th style="text-align: right;">Actions</th>
									</tr>
								</thead>
								<tbody id="show_outgoing_var">
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

<!-- MODAL ADD -->
				<form>
					<div class="modal fade" id="outvarAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <input type="hidden" name="out_track_id" id="out_track_id" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="outDate" id="outDate" class="form-control" placeholder="Date" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Recipient</label>
                            <div class="col-md-10">
                              <input type="text" name="outRecipient" id="outRecipient" class="form-control" placeholder="Recipient" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Content</label>
                            <div class="col-md-10">
                              <textarea type="text" name="outContent" id="outContent" class="form-control" placeholder="Content" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">Status</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="outStatus" id="outStatus" class="form-control" placeholder="Status" required="true" value="Pending">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="save" type="submit" id="btn_save_outvar" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
				</form>

        <!-- MODAL EDIT -->
        <form>
          <div class="modal fade" id="outvarEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Outgoing Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                          <input type="hidden" name="out_track_id_edit" id="out_track_id_edit" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="outDate_edit" id="outDate_edit" class="form-control" placeholder="Date" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Control Number</label>
                            <div class="col-md-10">
                              <input type="text" name="out_track_control_edit" id="out_track_control_edit" class="form-control" placeholder="Control Number" required="" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Recipient</label>
                            <div class="col-md-10">
                              <input type="text" name="outRecipient_edit" id="outRecipient_edit" class="form-control" placeholder="Recipient" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Content</label>
                            <div class="col-md-10">
                              <textarea type="text" name="outContent_edit" id="outContent_edit" class="form-control" placeholder="Content" required=""></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="save" type="submit" id="btn_update_outvar" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <!-- MODAL RECEIVE -->
          <form>
            <div class="modal fade" id="outvarReceive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="out_track_id_receive" id="out_track_id_receive" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="outStatus_receive" id="outStatus_receive" class="form-control" placeholder="Status" value="Received" readonly="">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_receive_outvar" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>