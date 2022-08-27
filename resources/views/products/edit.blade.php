@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
            <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Edit Product</h2>
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


    <form action="{{ route('products.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Price : </strong>
		            <input type="text" name="price" class="form-control" value="{{ $product->price}}">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
		        </div>
		    </div>
		    <div class="mt-2">
		      <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-info" href="{{ route('products.index') }}"> Back</a>
		    </div>
		</div>
    </form>
 </div>
</div>
@endsection