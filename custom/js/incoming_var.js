//Global Variable
var viewIncoming_var;
var show_incoming_var;  

        show_incoming();//call function to show incoming data
        
        $('#viewIncoming_var').DataTable();

        
        //READ DATA FROM THE DATABASE
        //function show all incoming data in database

        //INCOMING VARIOUS
        function show_incoming()
        {
            $.ajax({
                type  : "GET",
                url   : "incomingData",
                async : false,
                dataType : "json",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                // '<td>'+data[i].inVar_id+'</td>'+
                                '<td>'+data[i].inVarDate+'</td>'+
                                '<td>'+data[i].inVarSource+'</td>'+
                                '<td>'+data[i].inVarPart+'</td>'+
                                '<td>'+data[i].inVarAdree+'</td>'+
                                '<td>'+data[i].inVarStat+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm invar_edit" data-inVar_id="'+data[i].inVar_id+'" data-inVarDate="'+data[i].inVarDate+'" data-inVarSource="'+data[i].inVarSource+'" data-inVarPart="'+data[i].inVarPart+'" data-inVarAdree="'+data[i].inVarAdree+'" data-inVarStat="'+data[i].inVarStat+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-success btn-sm invar_receive" data-inVar_id="'+data[i].inVar_id+'" data-inVarStat="'+data[i].inVarStat+'"><i class="fas fa-check-square"></i></a>'+
                                '</td>'+
                                '</tr>';
                     
                    }

                    $('#show_incoming_var').html(html);
                }
 
            });
        }



        //ADD INCOMING DOCUMENTS
        $('#btn_save_invar').on('click', function(){
            var inVarDate = $('#inVarDate').val();
            var inVarSource = $('#inVarSource').val();
            var inVarPart = $('#inVarPart').val();
            var inVarAdree = $('#inVarAdree').val();
            var inVarStat = $('#inVarStat').val();

            $.ajax({
                type : "POST",
                url: "saveIncoming",
                dataType: "JSON",
                data: {inVarDate:inVarDate , inVarSource:inVarSource , inVarPart:inVarPart , inVarAdree:inVarAdree , inVarStat:inVarStat},
                success: function(data){
                    $('[name = "inVarDate"]').val("");
                    $('[name = "inVarSource"]').val("");
                    $('[name = "inVarPart"]').val("");
                    $('[name = "inVarAdree"]').val("");
                    $('[name = "inVarStat"]').val("");
                    $('#invarAdd').modal('hide');
                    show_incoming();
                }//end of success
            });//end of ajax
        });//end of onclick btn_save


        //GET DATA FOR UPDATE INCOMING
        $('#show_incoming_var').on('click','.invar_edit',function(){
            var inVar_id    = $(this).data('invar_id');
            var inVarDate   = $(this).data('invardate');
            var inVarSource = $(this).data('invarsource');
            var inVarPart   = $(this).data('invarpart');
            var inVarAdree  = $(this).data('invaradree');
            var inVarStat   = $(this).data('invarstat');

            $('#invarEdit').modal('show');
            $('[name="inVar_id_edit"]').val(inVar_id);
            $('[name="inVarDate_edit"]').val(inVarDate);
            $('[name="inVarSource_edit"]').val(inVarSource);
            $('[name="inVarPart_edit"]').val(inVarPart);
            $('[name="inVarAdree_edit"]').val(inVarAdree);
            $('[name="inVarStat_edit"]').val(inVarStat);
        }
        );//end of get data


        //UPDATE INCOMING VARIOUS
        $('#btn_update_invar').on('click',function(){
            var inVar_id = $('#inVar_id_edit').val();
            var inVarDate = $('#inVarDate_edit').val();
            var inVarSource = $('#inVarSource_edit').val();
            var inVarPart = $('#inVarPart_edit').val();
            var inVarAdree = $('#inVarAdree_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "updateIncoming",
                dataType : "JSON",
                data : {inVar_id:inVar_id, inVarDate:inVarDate , inVarSource:inVarSource , inVarPart:inVarPart , inVarAdree:inVarAdree },
                success: function(data){

                    $('[name = "inVar_id_edit"]').val("");
                    $('[name = "inVarDate_edit"]').val("");
                    $('[name = "inVarSource_edit"]').val("");
                    $('[name = "inVarPart_edit"]').val("");
                    $('[name = "inVarAdree_edit"]').val("");
                    $('#invarEdit').modal('hide');
                    show_incoming();
                }//end of success
            });
            return false;
        });



       //RECEIVE INCOMING DOCUMENTS
       //GET STATUS
       $('#show_incoming_var').on('click','.invar_receive',function(){
            var inVar_id = $(this).data('invar_id');
            var inVarStat = $(this).data('invarstat');

            $('#invarReceive').modal('show');
            $('[name="inVar_id_receive"]').val(inVar_id);
            $('[name="inVarStat_receive"]').val(inVarStat);
        }
        );//end of get data

       //RECEIVE
       $('#btn_receive_invar').on('click',function(){
            var inVar_id = $('#inVar_id_receive').val();

            $.ajax({
                type: "POST",
                url: "receive_Incoming",
                dataType: "JSON",
                data: {inVar_id:inVar_id},
                success: function(data){
                    $('[name = "inVar_id_receive"]').val("");
                    $('#invarReceive').modal('hide');
                    show_incoming();
                }
            });
            return false;
       });

