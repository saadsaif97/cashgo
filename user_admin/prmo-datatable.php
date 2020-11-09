<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
   <link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" type="text/css" rel="stylesheet">
   <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h3 class="title" style="text-align:center;"><font color="red" align="center"> Top
                                Investors</font></h3>
     <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>UserID</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Plan</th>
                                    <th>Self Deposit</th>
                                    <th>Level-1</th>
                                    <th>Level-2</th>
                                    <th>Level-3</th>
                                    <th>Level-4</th>
                                    <th>Level-5</th>
                                    <th>Total Downline Investment</th>
                                    <th>From</th>
                                    <th>To</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25</td>
                                    <td>Saint Nicolas colorbook</td>
                                    <td>2017/09/12</td>
                                    <td>Planned</td>
                                    <td>€510,00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                               
                            </tbody>
                        </table>
                        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script>
    $(document).ready(function() {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.
	document.title='Simple DataTable';
	// DataTable initialisation
	$('#example').DataTable(
		{
			"dom": '<"dt-buttons"Bf><"clear">lirtp',
			"paging": true,
			"autoWidth": true,
			"buttons": [
				'colvis',
				'copyHtml5',
        'csvHtml5',
				'excelHtml5',
        'pdfHtml5',
				'print'
			]
		}
	);
});
    </script>
   
</body>
</html>