@extends('admin.master')

@section('content')

<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role='main'>
    <h1>Dashboard</h1>
    <div class="col-md-6">
        <h1>BMW</h1>
        <h1>Add New</h1>

        <div class="panel-body">
            {!! Form::open(['route'=>'products.store', 'method'=>'post', 'files'=>true]) !!}

            <div class="form-group">
                    {{ Form::lable('Prodname', 'Name')}}

                    {{ Form::text('prod_name', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5')) }}
                </div>

                <div class="form-group">
                    {{ Form::lable('Code', 'Code')}}

                    {{ Form::text('prod_code', null, array('class'=>'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::lable('Price', 'Price')}}

                    {{ Form::text('prod_price', null, array('class'=>'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::lable('Description', 'Description')}}

                    {{ Form::text('prod_info', null, array('class'=>'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::lable('Image', 'Image')}}

                    {{ Form::text('image', null, array('class'=>'form-control')) }}
                </div>

                <div class="form-group">
                    {{ Form::lable('Sale Price', 'Sale Price')}}

                    {{ Form::text('spl_price', null, array('class'=>'form-control')) }}
                </div>

                {{ Form::submit('Submit', array('class'=>'btn btn-primary'))}}

            {{!! Form::close() !!}}
        </div>

    </div>
</main>

@endsection
