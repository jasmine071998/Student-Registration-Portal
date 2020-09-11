<!DOCTYPE html>
<html>
<head>
	<title>Search Student</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color:powderblue;">
	<div class="container">
   <div class="table-responsive">
	<div class="col-md-6" style="margin:0 auto; float:none;">
	<label>Student Id</label>
	<input type="text" name="id" id = "id" class="form-control">
	<button type="SUBMIT" name="load_data" id="load_data" class="btn btn-info">SUBMIT</button>
	<div id="employee_table">
    </div>
</div>
</div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
 $('#load_data').click(function(){
  $.ajax({
   url:"students.csv",
   dataType:"text",
   success:function(data)
   {
    var employee_data = data.split(/\r?\n|\r/);
    var table_data = '<table class="table table-bordered table-striped">';
    for(var count = 0; count<employee_data.length; count++)
    {
      var cell_data1 = employee_data[0].split(",");
     var cell_data = employee_data[count].split(",");
     if(document.getElementById("id").value==cell_data[0]){
     
    for(var cell_count=0; cell_count<cell_data.length; cell_count++)
     {
      table_data += '<tr>';
       table_data += '<td>'+cell_data1[cell_count]+ '</td>'  +'<td>'+cell_data[cell_count]+'</td>';
      table_data += '</tr>';    
     }
     
     }
    }
    table_data += '</table>';
    $('#employee_table').html(table_data);
   }
  });
 });
 
});
</script>
