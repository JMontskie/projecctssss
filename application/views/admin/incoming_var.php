	
	<br>
<br>
					<h1>Incoming Various
						<small>(Documents)</small>
						<br>
						<div class="float-left"><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#invarAdd"><i class="fa fa-plus"></i> Add New</a> 
						<button class="btn btn-default"><i class="fas fa-print" aria-hidden="true"></i> Print</button>
						</div>
						<br>
					</h1>
	<br>
				<div class="card col-12">
					<div class="card-header col-12">
						Incoming Various		
					</div>
					<div class="card-body col-md-12">
						<div class="row">
							<div class="col-md-12">
								<table id="viewIncoming_var" class="table table-striped table-bordered" style="width: 100%">
									<thead>
										<tr >
                      <!-- <th>ID</th> -->
											<th>Date</th>
											<th>Source</th>
											<th>Particular</th>
											<th>Address</th>
											<th>Status</th>
											<th style="text-align: right;">Actions</th>
										</tr>
									</thead>
									<tbody id="show_incoming_var">
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- MODAL ADD -->
				<form>
					<div class="modal fade" id="invarAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <input type="hidden" name="inVar_id" id="inVar_id" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="inVarDate" id="inVarDate" class="form-control" placeholder="Date" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Source</label>
                            <div class="col-md-10">
                              <input type="text" name="inVarSource" id="inVarSource" class="form-control" placeholder="Source" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Particular</label>
                            <div class="col-md-10">
                              <input type="text" name="inVarPart" id="inVarPart" class="form-control" placeholder="Particular" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <textarea type="text" name="inVarAdree" id="inVarAdree" class="form-control" placeholder="Address" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">Status</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="inVarStat" id="inVarStat" class="form-control" placeholder="Status" required="true" value="Pending">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="save" type="submit" id="btn_save_invar" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
				</form>

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="invarEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Invarious Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">ID</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="inVar_id_edit" id="inVar_id_edit" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="inVarDate_edit" id="inVarDate_edit" class="form-control" placeholder="Date" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Source</label>
                            <div class="col-md-10">
                              <input type="text" name="inVarSource_edit" id="inVarSource_edit" class="form-control" placeholder="Source">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Particular</label>
                            <div class="col-md-10">
                              <input type="text" name="inVarPart_edit" id="inVarPart_edit" class="form-control" placeholder="Particular">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <textarea type="text" name="inVarAdree_edit" id="inVarAdree_edit" class="form-control" placeholder="Address"></textarea>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update_invar" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <!-- MODAL RECEIVE -->
          <form>
            <div class="modal fade" id="invarReceive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="inVar_id_receive" id="inVar_id_receive" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="inVarStat_receive" id="inVarStat_receive" class="form-control" placeholder="Status" value="Received" readonly="">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_receive_invar" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
