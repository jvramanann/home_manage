    
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


