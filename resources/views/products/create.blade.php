@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
            <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Add New Product</h2>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-danger" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
    	@csrf

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Price : </strong>
		            <input type="text" name="price" class="form-control" placeholder="price">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>

            </div>
        </div>
@endsection