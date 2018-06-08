// regSupply_ID
// regSupDate
// regSupControl
// regSupRecipient
// regSupQuantity
// regSupDescript
// regsupRecevier
// regSupAmount
// regSupStat
// btn_save_reg
// btn_update_reg
// btn_receive_reg
var viewreg_ord;
var show_regsupply; 

show_regsupply();//call function to show incoming data

show_pettycash();

        $('#viewRegSupply').DataTable();
        $('#viewPettyCash').DataTable();

        function show_regsupply()
        {
            $.ajax({
                type  : "GET",
                url   : "readRegSupply",
                async : false,
                dataType : "json",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                // '<td>'+data[i].regSupply_ID+'</td>'+
                                '<td>'+data[i].regSupDate+'</td>'+
                                '<td>'+data[i].regSupControl+'</td>'+
                                '<td>'+data[i].regSupRecipient+'</td>'+
                                '<td>'+data[i].regSupQuantity+'</td>'+
                                '<td>'+data[i].regSupDescript+'</td>'+
                                '<td>'+data[i].regsupRecevier+'</td>'+
                                '<td>&#8369; &nbsp;'+data[i].regSupAmount+'</td>'+
                                // '<td>'+data[i].regSupStat+'</td>'+
                                // '<td style="text-align:right;">'+
                                //     '<a href="javascript:void(0);" class="btn btn-info btn-sm reg_edit" data-regSupply_ID="'+data[i].regSupply_ID+'" data-regSupDate="'+data[i].regSupDate+'" data-regSupControl="'+data[i].regSupControl+'" data-regSupRecipient="'+data[i].regSupRecipient+'" data-regSupQuantity="'+data[i].regSupQuantity+'" data-regSupDescript="'+data[i].regSupDescript+'" data-regsupRecevier="'+data[i].regsupRecevier+'" data-regSupAmount="'+data[i].regSupAmount+'"  data-regSupStat="'+data[i].regSupStat+'">Edit</a>'+' '+
                                //     '<a href="javascript:void(0);" class="btn btn-success btn-sm regreceive" data-regSupply_ID="'+data[i].regSupply_ID+'" data-regSupStat="'+data[i].regSupStat+'"><i class="fas fa-check-square"></i></a>'+
                                // '</td>'+
                                '</tr>';
                     
                    }

                    $('#show_regsupply').html(html);
                }
 
            });
        }


        function show_pettycash()
        {
            $.ajax({
                type  : "GET",
                url   : "readPettyCash",
                async : false,
                dataType : "json",
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                // '<td>'+data[i].pettycash_id+'</td>'+
                                '<td>'+data[i].pettyDate+'</td>'+
                                '<td>'+data[i].pettyControl+'</td>'+
                                '<td>'+data[i].pettySupplier+'</td>'+
                                '<td>'+data[i].pettyQuantity+'</td>'+
                                '<td>'+data[i].pettyDescript+'</td>'+
                                '<td>'+data[i].pettyReceiver+'</td>'+
                                '<td>&#8369; &nbsp;'+data[i].pettyAmount+'</td>'+
                                // '<td>'+data[i].pettyStat+'</td>'+
                                // '<td style="text-align:right;">'+
                                //     '<a href="javascript:void(0);" class="btn btn-info btn-sm petty_edit" data-pettycash_id="'+data[i].pettycash_id+'" data-pettyDate="'+data[i].pettyDate+'" data-pettyControl="'+data[i].pettyControl+'" data-pettySupplier="'+data[i].pettySupplier+'" data-pettyQuantity="'+data[i].pettyQuantity+'" data-pettyDescript="'+data[i].pettyDescript+'" data-pettyReceiver="'+data[i].pettyReceiver+'" data-pettyAmount="'+data[i].pettyAmount+'"  data-pettyStat="'+data[i].pettyStat+'">Edit</a>'+' '+
                                //     '<a href="javascript:void(0);" class="btn btn-success btn-sm petty_receive" data-pettycash_id="'+data[i].pettycash_id+'" data-pettyStat="'+data[i].pettyStat+'"><i class="fas fa-check-square"></i></a>'+
                                // '</td>'+
                                '</tr>';
                     
                    }

                    $('#show_pettycash').html(html);
                }
 
            });
        }


        //ADD REGULAR SUPPLY DOCUMENTS
        $('#btn_save_reg').on('click', function(){
            var regSupDate = $('#regSupDate').val();
            var regSupControl = $('#regSupControl').val();
            var regSupRecipient = $('#regSupRecipient').val();
            var regSupQuantity = $('#regSupQuantity').val();
            var regSupDescript = $('#regSupDescript').val();
            var regsupRecevier = $('#regsupRecevier').val();
            var regSupAmount = $('#regSupAmount').val();
            var regSupStat = $('#regSupStat').val();

            $.ajax({
                type : "POST",
                url: "createRegSupply",
                dataType: "JSON",
                data: {regSupDate:regSupDate , regSupControl:regSupControl , regSupRecipient:regSupRecipient , regSupQuantity:regSupQuantity , regSupDescript:regSupDescript , regsupRecevier:regsupRecevier , regSupAmount:regSupAmount, regSupStat:regSupStat},
                success: function(data){
                    $('[name = "regSupDate"]').val("");
                    $('[name = "regSupControl"]').val("");
                    $('[name = "regSupRecipient"]').val("");
                    $('[name = "regSupQuantity"]').val("");
                    $('[name = "regSupDescript"]').val("");
                    $('[name = "regsupRecevier"]').val("");
                    $('[name = "regSupAmount"]').val("");
                    $('[name = "regSupStat"]').val("");
                    $('#regAdd').modal('hide');
                    show_regsupply();
                }//end of success
            });//end of ajax
        });//end of onclick btn_save_reg
		


        //ADD PETTY CASH DOCUMENTS
        $('#btn_save_petty').on('click', function(){
            var pettyDate = $('#pettyDate').val();
            var pettyControl = $('#pettyControl').val();
            var pettySupplier = $('#pettySupplier').val();
            var pettyQuantity = $('#pettyQuantity').val();
            var pettyDescript = $('#pettyDescript').val();
            var pettyReceiver = $('#pettyReceiver').val();
            var pettyAmount = $('#pettyAmount').val();
            var pettyStat = $('#pettyStat').val();

            $.ajax({
                type : "POST",
                url: "createPettyCash",
                dataType: "JSON",
                data: {pettyDate:pettyDate , pettyControl:pettyControl , pettySupplier:pettySupplier , pettyQuantity:pettyQuantity , pettyDescript:pettyDescript , pettyReceiver:pettyReceiver , pettyAmount:pettyAmount, pettyStat:pettyStat},
                success: function(data){
                    $('[name = "pettyDate"]').val("");
                    $('[name = "pettyControl"]').val("");
                    $('[name = "pettySupplier"]').val("");
                    $('[name = "pettyQuantity"]').val("");
                    $('[name = "pettyDescript"]').val("");
                    $('[name = "pettyReceiver"]').val("");
                    $('[name = "pettyAmount"]').val("");
                    $('[name = "pettyStat"]').val("");
                    $('#pettyAdd').modal('hide');
                    show_pettycash();
                }//end of success
            });//end of ajax
        });//end of onclick btn_save_reg



  //       //GET DATA FOR EDIT
		// $('#show_outgoing_ord').on('click','.outord_edit',function(){
  //           var outOrd_id    = $(this).data('outord_id');
  //           var outOrdDate   = $(this).data('outorddate');
  //           var outOrdControl = $(this).data('outordcontrol');
  //           var outOrdRecipient  = $(this).data('outordrecipient');
  //           var outOrdContent  = $(this).data('outordcontent');
            

  //           $('#outordEdit').modal('show');
  //           $('[name="outOrd_id_edit"]').val(outOrd_id);
  //           $('[name="outOrdDate_edit"]').val(outOrdDate);
  //           $('[name="outOrdControl_edit"]').val(outOrdControl);
  //           $('[name="outOrdRecipient_edit"]').val(outOrdRecipient);
  //           $('[name="outOrdContent_edit"]').val(outOrdContent);
            
  //       }
  //       );//end of get data

		// //EDIT INCOMING ORD DOCUMENTS
		// $('#btn_update_outord').on('click',function(){
  //           var outOrd_id = $('#outOrd_id_edit').val();
  //           var outOrdDate = $('#outOrdDate_edit').val();
  //           var outOrdControl = $('#outOrdControl_edit').val();
  //           var outOrdRecipient = $('#outOrdRecipient_edit').val();
  //           var outOrdContent = $('#outOrdContent_edit').val();
            
  //           $.ajax({
  //               type : "POST",
  //               url  : "updateOutgoingOrd",
  //               dataType : "JSON",
  //               data : {outOrd_id:outOrd_id, outOrdDate:outOrdDate , outOrdControl:outOrdControl , outOrdRecipient:outOrdRecipient , outOrdContent:outOrdContent },
  //               success: function(data){

  //                   $('[name = "outOrd_id_edit"]').val("");
  //                   $('[name = "outOrdDate_edit"]').val("");
  //                   $('[name = "outOrdControl_edit"]').val("");
  //                   $('[name = "outOrdRecipient_edit"]').val("");
  //                   $('[name = "outOrdContent_edit"]').val("");
  //                   $('#outordEdit').modal('hide');
  //                   show_outgoing_ord();
  //               }//end of success
  //           });
  //           return false;
  //       });

  //       //GET DATA FOR RECEIVE
  //        $('#show_outgoing_ord').on('click','.outord_receive',function(){
  //           var outOrd_id = $(this).data('outord_id');
  //           var outOrdStat = $(this).data('outordstat');

  //           $('#outordReceive').modal('show');
  //           $('[name="outOrd_id_receive"]').val(outOrd_id);
  //           $('[name="outOrdStat_receive"]').val(outOrdStat);
  //       }
  //       );//end of get data

  //      //RECEIVE
  //      $('#btn_receive_outord').on('click',function(){
  //           var outOrd_id = $('#outOrd_id_receive').val();

  //           $.ajax({
  //               type: "POST",
  //               url: "receiveOutgoingOrd",
  //               dataType: "JSON",
  //               data: {outOrd_id:outOrd_id},
  //               success: function(data){
  //                   $('[name = "outOrd_id_receive"]').val("");
  //                   $('#outordReceive').modal('hide');
  //                   show_outgoing_ord();
  //               }
  //           });
  //           return false;
  //      });