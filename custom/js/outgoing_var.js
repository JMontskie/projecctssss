//Global Variable
var viewOutgoing_var;
var show_outgoing_var; 
	
	show_outgoing();

	$('#viewOutgoing_var').DataTable();
	 function show_outgoing()
        {
            $.ajax({
                type  : "GET",
                url   : "outgoingData",
                async : false,
                dataType : "json",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                // '<td>'+data[i].inVar_id+'</td>'+
                                '<td>'+data[i].outDate+'</td>'+
                                '<td>'+data[i].out_track_control+'</td>'+
                                '<td>'+data[i].outRecipient+'</td>'+
                                '<td>'+data[i].outContent+'</td>'+
                                '<td>'+data[i].outStatus+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm outvar_edit" data-out_track_id="'+data[i].out_track_id+'" data-outDate="'+data[i].outDate+'" data-out_track_control="'+data[i].out_track_control+'" data-outRecipient="'+data[i].outRecipient+'" data-outContent="'+data[i].outContent+'" data-outStatus="'+data[i].outStatus+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-success btn-sm outvar_receive" data-out_track_id="'+data[i].out_track_id+'" data-outStatus="'+data[i].outStatus+'"><i class="fas fa-check-square"></i></a>'+
                                '</td>'+
                                '</tr>';
                     
                    }
                    
                    $('#show_outgoing_var').html(html);
                }
 
            });
        }


        //ADD OUTGOING FILE
        $('#btn_save_outvar').on('click', function(){
            var outDate = $('#outDate').val();
            // var out_track_control = $('#out_track_control').val();
            var outRecipient = $('#outRecipient').val();
            var outContent = $('#outContent').val();
            var outStatus = $('#outStatus').val();

            $.ajax({
                type : "POST",
                url: "saveOutgoing",
                dataType: "JSON",
                data: {outDate:outDate , outRecipient:outRecipient , outContent:outContent , outStatus:outStatus},
                success: function(data){
                    $('[name = "outDate"]').val("");
                    $('[name = "outRecipient"]').val("");
                    $('[name = "outContent"]').val("");
                    $('[name = "outStatus"]').val("");
                    $('#outvarAdd').modal('hide');
                    show_outgoing();
                }//end of success
            });//end of ajax
        });//end of onclick btn_save


        //EDIT OUTGOING DOCUMENTS
        $('#show_outgoing_var').on('click','.outvar_edit',function(){
            var out_track_id    = $(this).data('out_track_id');
            var outDate   = $(this).data('outdate');
            var out_track_control = $(this).data('out_track_control');
            var outRecipient   = $(this).data('outrecipient');
            var outContent  = $(this).data('outcontent');

            $('#outvarEdit').modal('show');
            $('[name="out_track_id_edit"]').val(out_track_id);
            $('[name="outDate_edit"]').val(outDate);
            $('[name="out_track_control_edit"]').val(out_track_control);
            $('[name="outRecipient_edit"]').val(outRecipient);
            $('[name="outContent_edit"]').val(outContent);
        }
        );//end of get data


        //UPDATE OUTGOING VARIOUS
        $('#btn_update_outvar').on('click',function(){
            var out_track_id = $('#out_track_id_edit').val();
            var outDate = $('#outDate_edit').val();
            var out_track_control = $('#out_track_control_edit').val();
            var outRecipient = $('#outRecipient_edit').val();
            var outContent = $('#outContent_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "updateOutgoing",
                dataType : "JSON",
                data : {out_track_id:out_track_id, outDate:outDate , out_track_control:out_track_control , outRecipient:outRecipient , outContent:outContent},
                success: function(data){

                    $('[name = "out_track_id_edit"]').val("");
                    $('[name = "outDate_edit"]').val("");
                    $('[name = "out_track_control_edit"]').val("");
                    $('[name = "outRecipient_edit"]').val("");
                    $('[name = "outContent_edit"]').val("");
                    $('#outvarEdit').modal('hide');
                    show_outgoing();
                }//end of success
            });
            return false;
        });


        //RECEIVE OUTGOING DOCUMENTS
        //GET DATA FOR OUTGOING STATUS
        $('#show_outgoing_var').on('click','.outvar_receive',function(){
            var out_track_id = $(this).data('out_track_id');
            var outStatus = $(this).data('outstatus');

            $('#outvarReceive').modal('show');
            $('[name="out_track_id_receive"]').val(out_track_id);
            $('[name="outStatus_receive"]').val(outStatus);
        }
        );//end of get data

       //RECEIVE OUTGOING
       $('#btn_receive_outvar').on('click',function(){
            var out_track_id = $('#out_track_id_receive').val();

            $.ajax({
                type: "POST",
                url: "receive_Outgoing",
                dataType: "JSON",
                data: {out_track_id:out_track_id},
                success: function(data){
                    $('[name = "out_track_id_receive"]').val("");
                    $('#outvarReceive').modal('hide');
                    show_outgoing();
                }
            });
            return false;
       });