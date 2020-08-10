@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Data Peminjaman</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Data Peminjaman</h2>
				</div>
				<div class="panel-body">
					{!! $html->table(['class'=>'table-striped']) !!}
					<hr>
<!-- 					<h4>Statistik Peminjaman</h4>
					<canvas id="chartPeminjaman" width="300" height="130"></canvas> -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="/js/Chart.min.js"></script>
<script>
	$(function() {
		// $('\
		// 	<div id="filter_status" class="dataTables_length" style="display: inline-block; margin-left:10px;">\
		// 	<label>Status \
		// 	<select size="1" name="filter_status" aria-controls="filter_status" \
		// 	class="form-control input-sm" style="width: 140px;">\
		// 	<option value="all" selected="selected">Semua</option>\
		// 	<option value="returned">Sudah Dikembalikan</option>\
		// 	<option value="not-returned">Belum Dikembalikan</option>\
		// 	</select>\
		// 	</label>\
		// 	</div>\
		// 	').insertAfter('.dataTables_length');
		$("#dataTableBuilder").on('preXhr.dt', function(e, settings, data) {
			data.status = $('select[name="filter_status"]').val();
		});
		$('select[name="filter_status"]').change(function() {
			window.LaravelDataTables["dataTableBuilder"].ajax.reload();
		});
	});

	// var data = {
	// 	labels: {!! json_encode($BorrowLogs) !!},
	// 	datasets: [{
	// 		label: 'Jumlah buku',
	// 		data: {!! json_encode($counts) !!},
	// 		backgroundColor: "rgba(151,187,205,0.5)",
	// 		borderColor: "rgba(151,187,205,0.8)",
	// 	}]
	// };

	// var options = {
	// 	scales: {
	// 		yAxes: [{
	// 			ticks: {
	// 				beginAtZero:true,
	// 				stepSize: 1
	// 			}
	// 		}]
	// 	}
	// };

	// var ctx = document.getElementById("chartPeminjaman").getContext("2d");
	// var authorChart = new Chart(ctx, {
	// 	type: 'bar',
	// 	data: data,
	// 	options: options
	// });
</script>
{!! $html->scripts() !!}
@endsection