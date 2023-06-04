$(function (e) {
	var allcarddata = $('#allcarddata').DataTable({
		stateSave: true,
		dom: 'Bfrtip',
		buttons: ['copy', 'excel', 'pdf', 'colvis'],
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_ ',
		},
		columnDefs: [
			{ "visible": false, "targets": 2 },
			{ "visible": false, "targets": 3 },
			{ "visible": false, "targets": 6 },
			{ "visible": false, "targets": 7 },
			{ "visible": false, "targets": 11 },
			{ "visible": false, "targets": 12 },
			{ "visible": false, "targets": 13 },
			{ "visible": false, "targets": 14 },
			{ "visible": false, "targets": 15 },
			{ "visible": false, "targets": 16 },
			{ "visible": false, "targets": 17 },
		]
	});
	allcarddata.buttons().container()
		.appendTo('#example_wrapper .col-md-6:eq(0)');


	var carddata = $('#carddata').DataTable({
		lengthChange: false,
		dom: 'Bfrtip',
		buttons: ['copy', 'excel', 'pdf', 'colvis'],
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_ ',
		},
		columnDefs: [
			{ "visible": false, "targets": 5 },
			{ "visible": false, "targets": 6 },
			{ "visible": false, "targets": 7 },
			// { "visible": false, "targets": 9 },
			// { "visible": false, "targets": 10 },
			{ "visible": false, "targets": 11 },
			{ "visible": false, "targets": 12 },
			{ "visible": false, "targets": 16 },
			{ "visible": false, "targets": 17 },

		]
	});
	carddata.buttons().container()
		.appendTo('#example_wrapper .col-md-6:eq(0)');





	//file export datatable
	var table = $('#example').DataTable({
		lengthChange: false,
		buttons: ['copy', 'excel', 'pdf', 'colvis'],
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_ ',
		},
	});
	table.buttons().container()
		.appendTo('#example_wrapper .col-md-6:eq(0)');


	$('#example1').DataTable({
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('#example2').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	var table = $('#example-delete').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		}
	});
	$('#example-delete tbody').on('click', 'tr', function () {
		if ($(this).hasClass('selected')) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});

	$('#button').click(function () {
		table.row('.selected').remove().draw(false);
	});

	//Details display datatable
	$('#example-1').DataTable({
		responsive: true,
		language: {
			searchPlaceholder: 'Search...',
			sSearch: '',
			lengthMenu: '_MENU_',
		},
		responsive: {
			details: {
				display: $.fn.dataTable.Responsive.display.modal({
					header: function (row) {
						var data = row.data();
						return 'Details for ' + data[0] + ' ' + data[1];
					}
				}),
				renderer: $.fn.dataTable.Responsive.renderer.tableAll({
					tableClass: 'table border mb-0'
				})
			}
		}
	});
});