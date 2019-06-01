@extends('admin.master')

@section('content')

@forelse($products as $product)
<li>
    <h4>Product name: {{ $product->prod_name }}</h4>

    {{ Form::open(array('route'=>array('product.destroy', $product->id), 'method'=>'post'))}}
        {{csrf_field}}
        {{method_field('DELETE')}}

        {{ Form::submit('Delete', $attributes=array('class'=>'btn btn-sm btn-danger'))}}

    {{ Form::close() }}

</li>

@empty


<h3>No products found</h3>

@endforelse

@endsection
