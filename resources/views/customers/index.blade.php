@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>بيانات الزبون</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('customers.create') }}"> اضافة زبون جديد</a>

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

            <th>الاسم كامل </th>

            <th>رقم الهاتف</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($customers as $customer)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $customer->fullname }}</td>

            <td>{{ $customer->phone }}</td>

            <td>

                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">عرض</a>



                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">تعديل</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">حذف</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $customers->links() !!}



@endsection
