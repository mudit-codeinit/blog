@extends("admin.admin_app")
@section("content")
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<div class="page-breadcrumb">
	<div class="row align-items-center">
		<div class="col-5">
			<h4 class="page-title">Dashboard</h4>
			<div class="d-flex align-items-center">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Library</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-7">
			<div class="text-right upgrade-button">
				<a href="{{ URL::to('dashboard') }}" class="btn btn-primary text-white">View Frontend</a>
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
<!--		<div class="col-lg-3 col-md-6 col-12">
			<div class="card bg-primary text-white">
				<div class="card-body">
					<div class="d-flex no-block align-items-center">
						<a href="{{ URL::to('admin/allproducts') }}"><i class="display-6 mdi mdi-cart text-white" title="LTC"></i></a>
						<div class="ml-3 mt-2">
							<h4 class="font-medium mb-0">Products</h4>
							<h5><a href="{{ URL::to('admin/allproducts') }}" class="text-white">View all products</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="col-lg-3 col-md-6 col-12">
			<div class="card bg-success text-white">
				<div class="card-body">
					<div class="d-flex no-block align-items-center">
						<a href="JavaScript: void(0);"><i class="display-6 mdi mdi-account-multiple-outline text-white"></i></a>
						<div class="ml-3 mt-2">
							<h4 class="font-medium mb-0">Users</h4>
							<h5>{{$users}}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--		<div class="col-lg-3 col-md-6 col-12">
			<div class="card bg-info text-white">
				<div class="card-body">
					<div class="d-flex no-block align-items-center">
						<a href="{{ URL::to('myearning') }}"><i class="display-6 mdi mdi-cash-multiple text-white" title="AMP"></i></a>
						<div class="ml-3 mt-2">
							<h4 class="font-medium mb-0">Earnings</h4>
							<h5><a href="{{ URL::to('myearning') }}" class="text-white">View All Earnings</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>-->
<!--		<div class="col-lg-3 col-md-6 col-12">
			<div class="card bg-cyan text-white">
				<div class="card-body">
					<div class="d-flex no-block align-items-center">
						<a href="{{ URL::to('users/genealogy/'.Auth::user()->id) }}"><i class="display-6 mdi mdi-file-tree text-white" title="AMP"></i></a>
						<div class="ml-3 mt-2">
							<h4 class="font-medium mb-0">Genealogy</h4>
							<h5><a href="{{ URL::to('users/genealogy/'.Auth::user()->id) }}" class="text-white">View your genealogy tree</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>		-->
	</div>
	
	<!-- ============================================================== -->
	<!-- Sales chart -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Table -->
	<!-- ============================================================== -->
	<div class="row">
		<!-- column -->
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<!-- title -->
					<div class="d-md-flex align-items-center">
						<div>
							<h4 class="card-title">Recently Added Members</h4>
							<h5 class="card-subtitle">Overview of recently added members</h5>
						</div>
					</div>
					<!-- title -->
				</div>
				<div class="table-responsive">
					<table class="table v-middle">
						<thead>
							<tr class="bg-light">
								<th class="border-top-0">Products</th>
								<th class="border-top-0">License</th>
								<th class="border-top-0">Support Agent</th>
								<th class="border-top-0">Technology</th>
								<th class="border-top-0">Tickets</th>
								<th class="border-top-0">Sales</th>
								<th class="border-top-0">Earnings</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a class="btn btn-circle btn-info text-white">EA</a></div>
										<div class="">
											<h4 class="m-b-0 font-16">Elite Admin</h4>
										</div>
									</div>
								</td>
								<td>Single Use</td>
								<td>John Doe</td>
								<td>
									<label class="label label-danger">Angular</label>
								</td>
								<td>46</td>
								<td>356</td>
								<td>
									<h5 class="m-b-0">$2850.06</h5>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a class="btn btn-circle btn-orange text-white">MA</a></div>
										<div class="">
											<h4 class="m-b-0 font-16">Monster Admin</h4>
										</div>
									</div>
								</td>
								<td>Single Use</td>
								<td>Venessa Fern</td>
								<td>
									<label class="label label-info">Vue Js</label>
								</td>
								<td>46</td>
								<td>356</td>
								<td>
									<h5 class="m-b-0">$2850.06</h5>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a class="btn btn-circle btn-success text-white">MP</a></div>
										<div class="">
											<h4 class="m-b-0 font-16">Material Pro Admin</h4>
										</div>
									</div>
								</td>
								<td>Single Use</td>
								<td>John Doe</td>
								<td>
									<label class="label label-success">Bootstrap</label>
								</td>
								<td>46</td>
								<td>356</td>
								<td>
									<h5 class="m-b-0">$2850.06</h5>
								</td>
							</tr>
							<tr>
								<td>
									<div class="d-flex align-items-center">
										<div class="m-r-10"><a class="btn btn-circle btn-purple text-white">AA</a></div>
										<div class="">
											<h4 class="m-b-0 font-16">Ample Admin</h4>
										</div>
									</div>
								</td>
								<td>Single Use</td>
								<td>John Doe</td>
								<td>
									<label class="label label-purple">React</label>
								</td>
								<td>46</td>
								<td>356</td>
								<td>
									<h5 class="m-b-0">$2850.06</h5>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Table -->
	<!-- ============================================================== -->
	
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection