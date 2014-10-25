<html>
  <head>

 <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>




    
	
  </head>
  <body>
	<div id="PeopleTableContainer" style="width: 600px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Sales Orders',
				paging: true,
				pageSize: 10,
				sorting: true,
				defaultSorting: 'salesOrderDate DESC',
				actions: {
					listAction: 'soactions.php?action=list',
					createAction: 'PersonActionsPagedSorted.php?action=create',
					updateAction: 'PersonActionsPagedSorted.php?action=update',
					deleteAction: 'PersonActionsPagedSorted.php?action=delete'
				},
				fields: {
					salesOrderId: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					customerId: {
						title: 'Customer',
						width: '40%'
					},
					notes: {
						title: 'Notes',
						width: '30%'
					},
					salesOrderDate: {
						title: 'Sales Order date',
						width: '30%',
						type: 'date',
						create: false,
						edit: false
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
 
  </body>
</html>
