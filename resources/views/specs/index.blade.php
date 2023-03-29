@extends('layouts.layouthome')

@section('home')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>بيانات المجال</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('specs.create') }}"> اضافة مجال جديد</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>اسم الكليه</th>

            <th>القسم</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($specs as $spec)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $spec->college }}</td>

            <td>{{ $spec->spec }}</td>

            <td>

                <form action="{{ route('specs.destroy',$spec->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('specs.show',$spec->id) }}">عرض</a>



                    <a class="btn btn-primary" href="{{ route('specs.edit',$spec->id) }}">تعديل</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">حذف</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $specs->links() !!}



@endsection
