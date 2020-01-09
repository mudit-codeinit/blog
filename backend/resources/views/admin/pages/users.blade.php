@extends("admin.admin_app")

@section("content")
<div class="page-breadcrumb">
	<div class="row align-items-center">
		<div class="col-5">
			<h4 class="page-title">Users</h4>
			<div class="d-flex align-items-center">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Users</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-7">
			<div class="text-right upgrade-btn">
				<a class="btn btn-primary" href="JavaScript: void(0);">All User</a>
<!--				<a href="{{URL::to('admin/users/adduser')}}" class="btn btn-danger text-white">Add Distributor</a>-->
			</div>
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Sales chart -->
	<!-- ============================================================== -->
	<div class="row">
        <div class="col-12">
  
			<!-- Page Content -->
			<div class="card">
				<div class="card-body"> 
					@if(Session::has('flash_message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
							<h4 class="text-success mb-0"><i class="fa fa-check-circle"></i> Distributor {{ Session::get('flash_message') }} Successfully</h4>
						</div>
					@endif
					<!--
						data-order-col-by= ***column number to be sorted*** start from 0
						data-order-col-in= ***sort in desc/asc order***
						data-disable-sort= ***disable sorting of column number*** start from 0
					-->
					<table class="table table-bordered table-striped cat-dataTable-full datatable_custom" data-order-col-by="0" data-order-col-in="asc" data-disable-sort="4">
						<thead>
							<tr>
								<th class="text-center">First Name</th>
								<th class="text-center">Email</th>
								<th class="text-center">Mobile</th> 
                                                                <th class="text-center">Status</th>
								<th class="text-center" style="width: 10%;">Actions</th>
							</tr>
						</thead>
						<tbody>
                                                    @if(isset($allusers))
							@foreach($allusers as $i => $users)
							<tr>
								<td>{{ $users->first_name }}</td>
								<td>{{ $users->email}}</td>
                                                                <td>{{ $users->mobile }}</td>
                                                                <td class="text-center">
									@if($users->user_status=='1')
									<a href="{{url('admin/users/status/'.$users->id)}}" data-toggle="tooltip" title="Set DeActive" class="badge badge-success">Active</a>
									@else
									<a href="{{url('admin/users/status/'.$users->id)}}" data-toggle="tooltip" title="Set Active" class="badge badge-danger">DeActive</a>
									@endif
								</td>
								<td class="text-center">
									<div class="btn-group">
<!--										
										<a href="" class="btn btn-xs btn-cyan text-white"  data-toggle="tooltip" title="Edit">
											<i class="far fa-edit"></i>
										</a>-->

										 <a  href="{{ url('admin/users/delete/'.$users->id) }}" class="btn btn-xs btn-danger"  data-toggle="tooltip" title="Remove" onclick="confirm_alert.call(this,event)" data-title="Are you sure?" data-text="You will not be able to recover this!" data-confirm-btn-text="Yes, delete it!"><i class="fa fa-times"></i></a>
									</div>
								
								</td>
								
							</tr>
						   @endforeach
                                                    @endif
							
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END Page Content -->
@endsection