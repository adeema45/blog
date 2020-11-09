@extends('layouts.portal')
@section('content')
@include('layouts.header-menu')
@include('layouts.sidebar')
<div class="dashboard-content-one">
	<div class="card height-auto">
		<div class="card-body">
		<div class="heading-layout1">
		<div class="item-title">
						<h3>Add Academic Year</h3>
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
					<form class="new-added-form" method="post" action="{{ route('academic-years.update', $dataset->id)}}">
						@scrf
						@method('PUT')
				<div class="row">
				<div class="col-xl-4 col-lg-6 col-12 form-group">
					<label>Title</label>
					<input type="text" name="title" placeholder="Title name" class="form-control" value="{{$dataset->title}}">
						</div>
						<div class="col-xl-4 col-lg-6 col-12 form-group">
					<label>Start Date</label>
					<input type="text" name="start_date" placeholder="Title name" class="form-control" value="{{$dataset->title}}">
						</div>
						<div class="col-xl-4 col-lg-6 col-12 form-group">
					<label>End Date</label>
					<input type="text" name="end date" placeholder="Title name" class="form-control" value="{{$dataset->title}}">
						</div>
							<div class="col-12 form-group mg-t-8">
					<button type="submit" class="btn-fill-lg bg-gradient-yellow btn-hover-bluedark">Update</button>
					<button type="resett" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
						</div>
							</div>
						</form>
					</div>
				</div>
	@endsection
	@section('script')
		
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
	