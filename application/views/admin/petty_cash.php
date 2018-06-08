<br>
<br>
					<h1>Petty Cash
						<small>(Documents)</small>
						<br>
						<div class="float-left"><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#pettyAdd"><i class="fa fa-plus"></i> Add New</a> 
						<button class="btn btn-default"><i class="fas fa-print" aria-hidden="true"></i> Print</button>
						</div>
						<br>
					</h1>
	<br>
				<div class="card col-12">
					<div class="card-header col-12">
						Petty Cash	
					</div>
					<div class="card-body col-md-12">
						<div class="row">
							<div class="col-md-12">
								<table id="viewPettyCash" class="table table-striped table-bordered" style="width: 100%">
									<thead>
										<tr >
                      
											<th>Date</th>
											<th>Control No.</th>
											<th>Supplier</th>
											<th>Quantity</th>
											<th>Description</th>
                      <th>Receiver</th>
                      <th>(&#8369;) &nbsp; Amount</th>
                     <!--  <th>Status</th> -->
											<!-- <th style="text-align: right;">Actions</th> -->
										</tr>
									</thead>
									<tbody id="show_pettycash">
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- MODAL ADD -->
				<form>
					<div class="modal fade" id="pettyAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Petty Cash Document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                          <input type="hidden" name="pettycash_id" id="pettycash_id" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="pettyDate" id="pettyDate" class="form-control" placeholder="Date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Supplier</label>
                            <div class="col-md-10">
                              <input type="text" name="pettySupplier" id="pettySupplier" class="form-control" placeholder="Supplier" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Quantity</label>
                            <div class="col-md-10">
                              <input type="number" name="pettyQuantity" id="pettyQuantity" class="form-control" placeholder="Quantity" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                              <textarea type="text" name="pettyDescript" id="pettyDescript" class="form-control" placeholder="Description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Receiver</label>
                            <div class="col-md-10">
                              <input type="text" name="pettyReceiver" id="pettyReceiver" class="form-control" placeholder="Receiver" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Amount</label>
                            <div class="col-md-10">
                              <input type="text" name="pettyAmount" id="pettyAmount" class="form-control" placeholder="Amount" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">Status</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="pettyStat" id="pettyStat" class="form-control" placeholder="Status" required value="Pending">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="save" type="submit" id="btn_save_petty" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
				</form>

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="regEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <input type="hidden" name="regSupply_ID_edit" id="regSupply_ID_edit" class="form-control">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                              <input type="date" name="regSupDate_edit" id="regSupDate_edit" class="form-control" placeholder="Date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Control Number</label>
                            <div class="col-md-10">
                              <input type="number" name="regSupControl_edit" id="regSupControl_edit" class="form-control" placeholder="Control Number" required readonly="">
                            </div>
                        </div>
                        <div class="form-group row"
                            <label class="col-md-2 col-form-label">Recipient</label>
                            <div class="col-md-10">
                              <input type="" name="regSupRecipient_edit" id="regSupRecipient_edit" class="form-control" placeholder="Recipient" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Quantity</label>
                            <div class="col-md-10">
                              <input type="number" name="regSupQuantity_edit" id="regSupQuantity_edit" class="form-control" placeholder="Content" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                              <textarea type="text" name="regSupDescript_edit" id="regSupDescript_edit" class="form-control" placeholder="Description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Receiver</label>
                            <div class="col-md-10">
                              <input type="text" name="regsupRecevier_edit" id="regsupRecevier_edit" class="form-control" placeholder="Receiver" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">(&#8369;) &nbsp; Amount</label>
                            <div class="col-md-10">
                              <input type="number" name="regSupAmount_edit" id="regSupAmount_edit" class="form-control" placeholder="Amount" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-md-2 col-form-label">Status</label> -->
                            <div class="col-md-10">
                              <input type="hidden" name="regSupStat_edit" id="regSupStat_edit" class="form-control" placeholder="Status" required value="Pending">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update_reg" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <!-- MODAL RECEIVE -->
          <form>
            <div class="modal fade" id="regReceive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="regSupply_ID_receive" id="regSupply_ID_receive" class="form-control" placeholder="ID" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="regSupStat_receive" id="regSupStat_receive" class="form-control" placeholder="Status" value="Received" readonly="">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_receive_reg" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
