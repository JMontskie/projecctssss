//Global Variable
var viewIncoming_ord;
var show_incoming_ord; 

		show_incoming_ord();//call function to show incoming data
        
        $('#viewIncoming_ord').DataTable();

        function show_incoming_ord()
        {
            $.ajax({
                type  : "GET",
                url   : "readIncomingOrd",
                async : false,
                dataType : "json",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                // '<td>'+data[i].inVar_id+'</td>'+
                                '<td>'+data[i].inOrdDate+'</td>'+
                                '<td>'+data[i].inOrdSource+'</td>'+
                                '<td>'+data[i].inOrdContent+'</td>'+
                                '<td>'+data[i].inOrdAdree+'</td>'+
                                '<td>'+data[i].inOrdStat+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm inord_edit" data-inOrd_id="'+data[i].inOrd_id+'" data-inOrdDate="'+data[i].inOrdDate+'" data-inOrdSource="'+data[i].inOrdSource+'" data-inOrdContent="'+data[i].inOrdContent+'" data-inOrdAdree="'+data[i].inOrdAdree+'" data-inOrdStat="'+data[i].inOrdStat+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-success btn-sm inord_receive" data-inOrd_id="'+data[i].inOrd_id+'" data-inOrdStat="'+data[i].inOrdStat+'"><i class="fas fa-check-square"></i></a>'+
                                '</td>'+
                                '</tr>';
                     
                    }

                    $('#show_incoming_ord').html(html);
                }
 
            });
        }


        //ADD INCOMING ORD DOCUMENTS
        $('#btn_save_inord').on('click', function(){
            var inOrdDate = $('#inOrdDate').val();
            var inOrdSource = $('#inOrdSource').val();
            var inOrdContent = $('#inOrdContent').val();
            var inOrdAdree = $('#inOrdAdree').val();
            var inOrdStat = $('#inOrdStat').val();

            $.ajax({
                type : "POST",
                url: "createIncomingOrd",
                dataType: "JSON",
                data: {inOrdDate:inOrdDate , inOrdSource:inOrdSource , inOrdContent:inOrdContent , inOrdAdree:inOrdAdree , inOrdStat:inOrdStat},
                success: function(data){
                    $('[name = "inOrdDate"]').val("");
                    $('[name = "inOrdSource"]').val("");
                    $('[name = "inOrdContent"]').val("");
                    $('[name = "inOrdAdree"]').val("");
                    $('[name = "inOrdStat"]').val("");
                    $('#inordAdd').modal('hide');
                    show_incoming_ord();
                }//end of success
            });//end of ajax
        });//end of onclick btn_save_inord
		
        //GET DATA FOR EDIT
		$('#show_incoming_ord').on('click','.inord_edit',function(){
            var inOrd_id    = $(this).data('inord_id');
            var inOrdDate   = $(this).data('inorddate');
            var inOrdSource = $(this).data('inordsource');
            var inOrdContent  = $(this).data('inordcontent');
            var inOrdAdree  = $(this).data('inordadree');
            

            $('#inordEdit').modal('show');
            $('[name="inOrd_id_edit"]').val(inOrd_id);
            $('[name="inOrdDate_edit"]').val(inOrdDate);
            $('[name="inOrdSource_edit"]').val(inOrdSource);
            $('[name="inOrdContent_edit"]').val(inOrdContent);
            $('[name="inOrdAdree_edit"]').val(inOrdAdree);
            
        }
        );//end of get data

		//EDIT INCOMING ORD DOCUMENTS
		$('#btn_update_inord').on('click',function(){
            var inOrd_id = $('#inOrd_id_edit').val();
            var inOrdDate = $('#inOrdDate_edit').val();
            var inOrdSource = $('#inOrdSource_edit').val();
            var inOrdContent = $('#inOrdContent_edit').val();
            var inOrdAdree = $('#inOrdAdree_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "updateIncomingOrd",
                dataType : "JSON",
                data : {inOrd_id:inOrd_id, inOrdDate:inOrdDate , inOrdSource:inOrdSource , inOrdContent:inOrdContent , inOrdAdree:inOrdAdree },
                success: function(data){

                    $('[name = "inOrd_id_edit"]').val("");
                    $('[name = "inOrdDate_edit"]').val("");
                    $('[name = "inOrdSource_edit"]').val("");
                    $('[name = "inOrdContent_edit"]').val("");
                    $('[name = "inOrdAdree_edit"]').val("");
                    $('#inordEdit').modal('hide');
                    show_incoming_ord();
                }//end of success
            });
            return false;
        });

        //GET DATA FOR RECEIVE
         $('#show_incoming_ord').on('click','.inord_receive',function(){
            var inOrd_id = $(this).data('inord_id');
            var inOrdStat = $(this).data('inordstat');

            $('#inordReceive').modal('show');
            $('[name="inOrd_id_receive"]').val(inOrd_id);
            $('[name="inOrdStat_receive"]').val(inOrdStat);
        }
        );//end of get data

       //RECEIVE
       $('#btn_receive_inord').on('click',function(){
            var inOrd_id = $('#inOrd_id_receive').val();

            $.ajax({
                type: "POST",
                url: "receiveIncomingOrd",
                dataType: "JSON",
                data: {inOrd_id:inOrd_id},
                success: function(data){
                    $('[name = "inOrd_id_receive"]').val("");
                    $('#inordReceive').modal('hide');
                    show_incoming_ord();
                }
            });
            return false;
       });

		
		