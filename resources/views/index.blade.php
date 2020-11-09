

<div class="dashboard-content-one">
	<div class="col-lg-12">
		<div class="card dashboard-card-eleven">
			<div class="card-body">
				
				<div class="heading-layout1">
					<div class="item-title">
						<h3>Manage Academic Year</h3>
					</div>
					@if ($errors->any());
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
					</div>
					@endif
				</div>
				<div class="table-box-wrap">
				<div class="table-responsive result-table-box">
					<div id="DataTable_Table_0_wrapper" class="datatables_wrapper no-footer">
						<table class="table display data-table text-nowrap dataTable no-footer" id="DataTable_table_0" role="grid">
							<thead>
								<tr role="row">
								<th class="sorting_asc" rowspan="1" colspan="1" style="width: 20px;" aria-label="ID">
									ID#
								</th>
								<th class="sorting" tabindex="0" aria-controls="DataTable_Table_0" rowspan="1" colspan="1" style="width: 126.45px;" aria-label="Title: activate to sort column ascending">Title</th>
								<th class="sorting" tabindex="0" aria-controls="DataTable_Table_0" rowspan="1" colspan="1" style="width: 94.6167px;" aria-label="Start Date: activate to sort column ascending">Start Date</th>
								<th class="sorting" tabindex="0" aria-controls="DataTable_Table_0" rowspan="1" colspan="1" style="width: 94.6167px;" aria-label="Start Date: activate to sort column ascending">End Date</th>
								<th class="sorting" tabindex="0" aria-controls="DataTable_Table_0" rowspan="1" colspan="1" style="width: 109.933px;" aria-label="Start Date: activate to sort column ascending">Status</th>
								<th class="sorting" tabindex="0" aria-controls="DataTable_Table_0" rowspan="1" colspan="1" style="width: 109.933px;" aria-label="Start Date: activate to sort column ascending">Created at</th>
								<th class="sorting" tabindex="0" aria-controls="DataTable_Table_0" rowspan="1" colspan="1" style="width: 50.933px;" aria-label="Start Date: activate to sort column ascending">Action</th>	
								</tr>
							</thead>
						</tbody>
							@foreach($dataset as $ayear)
							<tr role="row" class="odd">
								<td class="sorting_1">
									{{ $ayear->id }}
								</td>
								<td>{{ $ayear->title}}</td>
								<td>{{ $ayear->start_date}}</td>
								<td>{{ $ayear->end_date}}</td>
								<td>@if($ayear->status == 1)
								Active
							@else
							Inactive
							@endif
						</td>
						<td>{{ $ayear->created_at->format('d-m-y')}}</td>	
						<td>
							<form method="post" action="{{ route('academic-years.destroy', $ayear->id)}}">
								@csrf
								@method('DELETE')
								<a href="{{ route('academic-years.edit', $ayear->id)}}"><i class="fas fa-edit text-dark-pastel-green"></i> Edit</a>
								<button class="delbtn" onclick="return config('Are you sure?')"><i class="fas fa-times text-orange-red"></i> delete
								</button>
							</form>
						</td>
						</tr>
						@endforeach	
						</table>
						
					</div>
					
				</div>	
				</div>
			</div>
		</div>
		
	</div>
	
	@section('script')
	<script type="text/javascript">
		
	</script>
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/propper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/section2.min.js') }}"></script>
	<script src="{{ asset('js/datepicker.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollup.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	@endsection
	