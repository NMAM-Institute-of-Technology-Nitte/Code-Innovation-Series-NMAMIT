<?php  
 $connect = mysqli_connect("localhost", "root", "", "time");  
$sql = "SELECT * FROM customers INNER JOIN services ON customers.aid = services.aid";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>customer|details</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
           <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
          <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
	  <style>






	

	#customer_data {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customer_data td, #employee_data th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customer_data tr:nth-child(even){background-color:#99ff66;}

#customer_data tr:hover {background-color: yellow;}

#customer_data th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}  
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
	  </style>



	  </head>  
      <body>  
<!--<div class="border">
<!--<div class="responsive">-->


<!--</div> 
    <br>
</div> -->    
		  
           <div class="container-fluid">  
                <h3 align="center">customer details</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="customer_data" >  
                          <thead>  
                               <tr>  
							   <td style="width:50px;">aid</td>
							   <td style="width:200px;">Name</td>
							   <td style="width:230px;">email</td>
                                <td style="width:100px;">phone</td>
									<td style="width:300px;">address</td> 
                                    <td style="width:100px;">Dob</td> 	
                                 <td style="width:100px;">gender</td> 										
                                    <td style="width:100px;">pincode</td>  
                                    <td >city</td>  
                                    <td>car regno</td>  
                                    
									
									
									
							
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
							   <td>'.$row["aid"].'</td> 
							  <td>'.$row["name"].'</td>  
                              <td>'.$row["email"].'</td> 
                                <td>'.$row["phone"].'</td>							  
							   
                                    <td>'.$row["address"].'</td>  
									 <td>'.$row["dob"].'</td>
									 <td>'.$row["gender"].'</td>
                                    <td>'.$row["pincode"].'</td>  
                                    <td>'.$row["city"].'</td>
									<td>'.$row["regno"].'</td> 
									
									    
									
									
</tr>  
                               ';  
                          }  
                          ?>  
                      <tfoot>  
                               <tr>  
							   <td>aid</td>
							   <td>Name</td>
							   <td>email</td>
                                <td>phone</td>
									<td>address</td>  
									<td >dob</td> 
									 <td>gender</td> 
                                    <td>pincode</td>  
                                    <td>city</td>  
                                    <td>car regno</td>  
									
                               
									
									
						
                               </tr>    
                          </tfoot>  
					 </table>  
                </div>  
           </div>  <br>
<center><a href="servicedetail.php" style="text-decoration:none;" class="button">CHECK CUSTOMER SERVICE DETAILS >>></a>	<br>
<center><a href="adminwelcome.php" style="text-decoration:none;" class="button">BACK</a>
      </body>  
      
 </html>  
 <script>  
$(document).ready( function() {
    $('#customer_data').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 
		{
            extend: 'excelHtml5',
            autoFilter: true,
            sheetName: 'Exported data'
        },

		{
            extend: 'pdfHtml5',
            orientation: 'landscape',
            pageSize: 'A4',
		    download :'open'
        },
		'csv','print'
		
		]
    } );
} );


 </script>  
