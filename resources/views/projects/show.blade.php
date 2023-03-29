

@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> عرض قائمة المشاريع</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.index') }}">  رجوع</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>  </th>
            <th>اسم المشروع</th>
            <th>اسم المشرف</th>
			<th>نوع المشروع</th>
		    <th>حالة المشروع</th>
		       <th>عن المشروع</th>


           
        </tr>
        <tr>
		
            <td></td>
			
            <td>{{ $project->name }}</td>
			
            <td>{{ $project->sup }}</td>
			            <td>{{ $project->type }}</td>
            <td>{{ $project->status }}</td>
            <td>{{ $project->abstract }}</td>

						  


                   
                    

                </form>
            </td>
        </tr>
        
    </table>


@endsection
