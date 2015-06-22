@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">添加商品</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/newitem') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">商品名称</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">商品价格</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="price" value="{{ old('price') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">商品折扣</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="discount" value="{{ old('discount') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">商品详情</label>
							<div class="col-md-6">
								<textarea rows = "5" type="text" class="form-control" name="detail" value="{{ old('detail') }}">
								</textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
								加入商品
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
