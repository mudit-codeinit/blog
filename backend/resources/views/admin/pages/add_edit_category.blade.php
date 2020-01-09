@extends("admin.admin_app")

@section("content")
<div class="page-breadcrumb">
	<div class="row align-items-center">
		<div class="col-5">
			<h4 class="page-title">{{ isset($id) ? 'Edit Category ' : 'Add  Category' }}</h4>
			<div class="d-flex align-items-center">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="">Category</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ isset($id) ? 'Edit Category ' : 'Add Category' }}</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-7">
			<div class="text-right upgrade-btn">
				<a href="{{URL::to('admin/category')}}" class="btn btn-primary text-white">View All Category</a>
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
					@if (count($errors) > 0)					
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
						<h4 class="text-danger"><i class="fa fa-exclamation-triangle"></i> Error!</h4>
						<ul class="mb-0 px-0 list-style-none">
							@foreach ($errors->all() as $error)
								<li><i class="fa fa-chevron-right"></i> {{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					@if(Session::has('flash_message'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
							<h4 class="text-success mb-0"><i class="fa fa-check-circle"></i> {{ Session::get('flash_message') }} Successfully</h4>
						</div>
					@endif
				{!! Form::open(array('url' => array('admin/category/addcategory'),'class'=>'','name'=>'category_form','id'=>'category_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
					<input type="hidden" name="id" value="{{isset($id) ? $id : null}}">
                                        
					<div class="form-group row">
						<label for="" class="col-sm-3 control-label">Category  Name</label>
						<div class="col-lg-4 col-md-6 col-sm-9">
							<input type="text" name="category_name" value="{{isset($category->category_name) ? $category->category_name : null}}" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3 control-label">Parent  Name</label>
						<div class="col-lg-4 col-md-6 col-sm-9">
							<select   name="category_name" value=""  >
							@foreach($allcategory as $category)
									<option value="{{$category->id}}">{{$category->category_name}}</option>
									@foreach($category->children as $sub)
										<option value="{{$sub->id}}">-{{$sub->category_name}}</option>
									@endforeach 
								@endforeach 
							<select>
						</div>
					</div>             
                                <div class="form-group row">
                                        <div class="col-md-offset-3 col-sm-9 ">
                                                <button type="submit" class="btn btn-primary">Submit</button>

                                        </div>
                                </div>
					
					{!! Form::close() !!} 
				</div>
			</div>
		</div>
	</div>
</div>
                <!-- END Page Content -->            
@endsection