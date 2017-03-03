    
   /* function add_row(){
      alert('jjkdhjgh');
    }*/

$(function(){
  $("#add_row").click(function(){
    alert('jjkdhjgh');
    var tbl_tow = "";
    var set_id =0;
    
    tbl_row = "<tr><td><label id='sl_no' class='sl_no'></label></td><td><input type='text' name='in_mode[]' class='in_mode' ></td><td><input type='text' name='in_desc[]' class='in_desc' ></td><td><input type='text' name='in_amt[]' class='in_amt'></td><input type='hidden' name='id' value=''><td><a class='add_row'><i class='fa fa-plus'></i></a>&nbsp;&nbsp;<a href='javascript();'><i class='fa fa-trash'></i></a></td></tr>";
  $('table tbody').append(tbl_row);

  });

});


/* $('.in_amt').each(function(){
  
    sum = 0+parseFloat(this.value);*/

     //$('#tot_income').text(sum);
//});
//alert($('.in_amt').val());
  //$('.in_amt').each(function(){
    //      var tot = $('#tot_income').text();
    //var inc = $('#in_amt').val();
    /*     if(tot==0)    
    sum += parseFloat(ins);
  else
    sum = parseFloat(tot)+parseFloat(ins);     */
   // sum += parseFloat($('#tot_income').text());

//$('#tot_income').text(sum);
 //}


 
/*$('.in_amt').change(function(){
  $('.in_amt').each(function(){
    sum += parseFloat(this.value);
    sum += parseFloat($('#tot_income').text());
    $('#tot_income').text(sum);
});

});

*/
/*$('#frame_budjet').each(function(){
  var totalPoints = 0;
  $(this).find('.in_amt').each(function(){
    totalPoints += $(this).val();

  });
  alert(totalPoints);
});
*/

/*$(document).on("change", ".in_amt", function() {
    var sum = 0;
    $(".in_amt").each(function(){
        sum += +$(this).val();
    });
    $(".tot_income").text(sum);
});*/






  /*  $(".delete_row").click(function(){
      //alert('hai');

    });

function delete_row(){
 
 // $(this).closest('tr').remove();
  $(this).closest('tr').remove();
   alert('hai');
}

$(document).ready(function(){
  $("#add_row").click(function(){
    alert('jjkdhjgh');
    var tbl_tow = "";
    var set_id =0;
    
    tbl_row = "<tr><td><label id='sl_no' class='sl_no'></label></td><td><input type='text' name='in_mode[]' class='in_mode' ></td><td><input type='text' name='in_desc[]' class='in_desc' ></td><td><input type='text' name='in_amt[]' class='in_amt'></td><input type='hidden' name='id' value=''><td><a class='add_row'><i class='fa fa-plus'></i></a>&nbsp;&nbsp;<a href='javascript();'><i class='fa fa-trash'></i></a></td></tr>";
  $('table tbody').append(tbl_row);

  })

});
*/