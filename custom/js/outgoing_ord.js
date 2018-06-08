// outOrd_id
// outOrdDate
// outOrdControl
// outOrdRecipient
// outOrdContent
// outOrdStat
// btn_save_outord
// btn_update_outord
// btn_receive_outord
var viewOutgoing_ord;
var show_outgoing_ord; 



		show_outgoing_ord();//call function to show incoming data
        
        $('#viewOutgoing_ord').DataTable();

        function show_outgoing_ord()
        {
            $.ajax({
                type  : "GET",
                url   : "readOutgoingOrd",
                async : false,
                dataType : "json",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                // '<td>'+data[i].outOrd_id+'</td>'+
                                '<td>'+data[i].outOrdDate+'</td>'+
                                '<td>'+data[i].outOrdControl+'</td>'+
                                '<td>'+data[i].outOrdRecipient+'</td>'+
                                '<td>'+data[i].outOrdContent+'</td>'+
                                '<td>'+data[i].outOrdStat+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm outord_edit" data-outOrd_id="'+data[i].outOrd_id+'" data-outOrdDate="'+data[i].outOrdDate+'" data-outOrdControl="'+data[i].outOrdControl+'" data-outOrdControl="'+data[i].outOrdControl+'" data-outOrdRecipient="'+data[i].outOrdRecipient+'" data-outOrdContent="'+data[i].outOrdContent+'" data-outOrdStat="'+data[i].outOrdStat+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-success btn-sm outord_receive" data-outOrd_id="'+data[i].outOrd_id+'" data-outOrdStat="'+data[i].outOrdStat+'"><i class="fas fa-check-square"></i></a>'+
                                '</td>'+
                                '</tr>';
                     
                    }

                    $('#show_outgoing_ord').html(html);
                }
 
            });
        }


        //ADD OUTGOING ORD DOCUMENTS
        $('#btn_save_outord').on('click', function(){
            var outOrdDate = $('#outOrdDate').val();
            var outOrdRecipient = $('#outOrdRecipient').val();
            var outOrdContent = $('#outOrdContent').val();
            var outOrdStat = $('#outOrdStat').val();

            $.ajax({
                type : "POST",
                url: "createOutgoingOrd",
                dataType: "JSON",
                data: {outOrdDate:outOrdDate , outOrdRecipient:outOrdRecipient , outOrdContent:outOrdContent , outOrdStat:outOrdStat},
                success: function(data){
                    $('[name = "outOrdDate"]').val("");
                    $('[name = "outOrdRecipient"]').val("");
                    $('[name = "outOrdContent"]').val("");
                    $('[name = "outOrdStat"]').val("");
                    $('#outordAdd').modal('hide');
                    show_outgoing_ord();
                }//end of success
            });//end of ajax
        });//end of onclick btn_save_inord
		
        //GET DATA FOR EDIT
		$('#show_outgoing_ord').on('click','.outord_edit',function(){
            var outOrd_id    = $(this).data('outord_id');
            var outOrdDate   = $(this).data('outorddate');
            var outOrdControl = $(this).data('outordcontrol');
            var outOrdRecipient  = $(this).data('outordrecipient');
            var outOrdContent  = $(this).data('outordcontent');

            $('#outordEdit').modal('show');
            $('[name="outOrd_id_edit"]').val(outOrd_id);
            $('[name="outOrdDate_edit"]').val(outOrdDate);
            $('[name="outOrdControl_edit"]').val(outOrdControl);
            $('[name="outOrdRecipient_edit"]').val(outOrdRecipient);
            $('[name="outOrdContent_edit"]').val(outOrdContent);
            
        }
        );//end of get data



		//EDIT OUTGOING ORD DOCUMENTS
		$('#btn_update_outord').on('click',function(){
            var outOrd_id = $('#outOrd_id_edit').val();
            var outOrdDate = $('#outOrdDate_edit').val();
            var outOrdControl = $('#outOrdControl_edit').val();
            var outOrdRecipient = $('#outOrdRecipient_edit').val();
            var outOrdContent = $('#outOrdContent_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "updateOutgoingOrd",
                dataType : "JSON",
                data : {outOrd_id:outOrd_id, outOrdDate:outOrdDate , outOrdControl:outOrdControl , outOrdRecipient:outOrdRecipient , outOrdContent:outOrdContent },
                success: function(data){

                    $('[name = "outOrd_id_edit"]').val("");
                    $('[name = "outOrdDate_edit"]').val("");
                    $('[name = "outOrdControl_edit"]').val("");
                    $('[name = "outOrdRecipient_edit"]').val("");
                    $('[name = "outOrdContent_edit"]').val("");
                    $('#outordEdit').modal('hide');
                    show_outgoing_ord();
                }//end of success
            });
            return false;
        });

        //GET DATA FOR RECEIVE
         $('#show_outgoing_ord').on('click','.outord_receive',function(){
            var outOrd_id = $(this).data('outord_id');
            var outOrdStat = $(this).data('outordstat');

            $('#outordReceive').modal('show');
            $('[name="outOrd_id_receive"]').val(outOrd_id);
            $('[name="outOrdStat_receive"]').val(outOrdStat);
        }
        );//end of get data

       //RECEIVE
       $('#btn_receive_outord').on('click',function(){
            var outOrd_id = $('#outOrd_id_receive').val();

            $.ajax({
                type: "POST",
                url: "receiveOutgoingOrd",
                dataType: "JSON",
                data: {outOrd_id:outOrd_id},
                success: function(data){
                    $('[name = "outOrd_id_receive"]').val("");
                    $('#outordReceive').modal('hide');
                    show_outgoing_ord();
                }
            });
            return false;
       });

		
