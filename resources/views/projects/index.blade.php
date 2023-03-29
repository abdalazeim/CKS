
@extends('layouts.layouthome')

@section('home')


  <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2  >ادراة المشاريع</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('projects.create') }}"> اضافة مشروع</a>

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

            <th>الرقم</th>

            <th>اسم المشروع</th>

            <th>اسم المشرف</th>
            <th>نوع المشروع</th>
            <th>حالة المشروع</th>
            <th>المستخلص</th>


            <th width="240px">الحدث</th>

        </tr>

        @foreach ($projects as $project)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $project->name }}</td>

            <td>{{ $project->sup }}</td>
           <td>{{ $project->type }}</td>
            <td>{{ $project->status }}</td>
            <td>{{ $project->abstract }}</td>


            <td>

                <form action="{{ route('projects.destroy',$project->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('projects.show',$project->id) }}">عرض</a>



                    <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">تعديل</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">حذف</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $projects->links() !!}



@endsection