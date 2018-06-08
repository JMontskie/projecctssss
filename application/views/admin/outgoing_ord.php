<br>
<br>
					<h1>Outgoing Office of the Regional Director
						<small>(Documents)</small>
						<br>
						<div class="float-left"><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#outordAdd"><i class="fa fa-plus"></i> Add New</a> 
						<button class="btn btn-default"><i class="fas fa-print" aria-hidden="true"></i> Print</button>
						</div>
						<br>
					</h1>
	<br>
				<div class="card col-12">
					<div class="card-header col-12">
						Outgoing ORD		
					</div>
					<div class="card-body col-md-12">
						<div class="row">
							<div class="col-md-12">
								<table id="viewOutgoing_ord" class="table table-striped table-bordered" style="width: 100%">
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
									<tbody id="show_outgoing_ord">
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- MODAL ADD -->
				<form>
					<div class="modal fade" id="outordAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <input type="hidden" name="outOrd_id" id="outOrd_id" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="outOrdDate" id="outOrdDate" class="form-control" placeholder="Date" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Recipient</label>
                            <div class="col-md-10">
                              <input type="text" name="outOrdRecipient" id="outOrdRecipient" class="form-control" placeholder="Recipient" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Content</label>
                            <div class="col-md-10">
                              <textarea type="text" name="outOrdContent" id="outOrdContent" class="form-control" placeholder="Content" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">Status</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="outOrdStat" id="outOrdStat" class="form-control" placeholder="Status" required value="Pending">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="save" type="submit" id="btn_save_outord" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
				</form>

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="outordEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="outOrd_id_edit" id="outOrd_id_edit" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="outOrdDate_edit" id="outOrdDate_edit" class="form-control" placeholder="Date" autofocus="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Control Number</label>
                            <div class="col-md-10">
                              <input type="text" name="outOrdControl_edit" id="outOrdControl_edit" class="form-control" placeholder="Control Number" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Recipient</label>
                            <div class="col-md-10">
                              <input type="text" name="outOrdRecipient_edit" id="outOrdRecipient_edit" class="form-control" placeholder="Recipient">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Content</label>
                            <div class="col-md-10">
                              <textarea type="text" name="outOrdContent_edit" id="outOrdContent_edit" class="form-control" placeholder="Content"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update_outord" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <!-- MODAL RECEIVE -->
          <form>
            <div class="modal fade" id="outordReceive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="outOrd_id_receive" id="outOrd_id_receive" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="outOrdStat_receive" id="outOrdStat_receive" class="form-control" placeholder="Status" value="Received" readonly="">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_receive_outord" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
