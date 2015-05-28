$(document).ready(function(){
   
    $('#submit').click(function(){
        addSpecialRow();
    });
     
     $('.table').on('click', '.delete', function(){
         var td=$(this).parent();
         removeRow(td);
    });
     
          $('.table').on('click', '.edit', function(){
         var tr=$(this).parent().parent();
         loadData(tr);
    });

    
    function addSpecialRow(){
        var row='<tr class="row">';
        row+='<td>'+$('#code').val();
        row+='</td><td>'+$('#name').val();
        row+='</td><td>'+$('#mininv').val();
        row+='</td><td>'+$('#minret').val();
        row+='</td><td>'+$('#maxret').val();
        row+='</td><td><button class="edit">Edit</button>&nbsp;&nbsp;<button class="delete">Delete</button>&nbsp;&nbsp;<button class="save">Save</button></td></tr>';
        
        $('#products').append(row);
    }
    
    //this function edits a row
    function editRow(td) {
        
    }
    function removeRow(td) {
        td.parent().remove();
    }
    function loadData(tr){
      // $('#code').val()=$(tr).;
      
    }
    
 });