@extends('specs.layouthome')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Product</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('specs.index') }}"> Back</a>

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



<form action="{{ route('specs.store') }}" method="POST">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>الكليه:</strong>

                <input type="text" name="college" class="form-control" placeholder=" الرجا ادخل اسم الكليه">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>القسم:</strong>

                <textarea class="form-control" style="height:150px" name="spec" placeholder="الرجاء ادخل اسم القسم"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection
