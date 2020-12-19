@extends('admin.dashboard')
@section('content')
    <div class="container px-5 mt-4">
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="text-xl text-gray font-weight-bold">Users Info</h3>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Project Owner</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Style</th>
                                <th>Budget</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questionnaires as $key => $questionnaire)
                                <tr style="vertical-align: center">
                                    <td><span class="mt-2">{{$questionnaire->id}} </span> </td>
                                    <td><span class="mt-2">{{$questionnaire->user->username}} </span> </td>
                                    <td><span class="mt-2">{{$questionnaire->project_name}}</span></td>
                                    <td><span class="mt-2">{{$questionnaire->category->name}}</span></td>
                                    <td><span class="mt-2">{{$questionnaire->style->name}}</span></td>
                                    <td><span class="mt-2">{{$questionnaire->budget_range}}</span></td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('questionnaires.show',$questionnaire->id)}}"> <button class="btn btn-dark rounded mr-1" style="width: 4.5rem" >Show</button> </a>
                                        <a href="#"> <button class="btn btn-default rounded mr-1" style="width: 4.5rem" >Edit</button> </a>
                                        <form action="{{route('questionnaires.destroy',$questionnaire->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger rounded"style="width: 4.5rem" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>

{{--                                        <a href="{{route('questionnaires.show',$questionnaire->id)}}"> <span class="fa fa-user fa-2x mr-2 mt-1"></span> </a>--}}
{{--                                        <a href="#"> <span class="fa fa-edit fa-2x mr-3 mt-1" ></span> </a>--}}
{{--                                        <form action="{{route('questionnaires.destroy',$questionnaire->id)}}" method="POST">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <span class="fa fa-remove fa-2x mt-1"onclick="return confirm('Are you sure?')"></span>--}}
{{--                                        </form>--}}

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>


                        </table>
                        <div class="mt-4 text-small ">
                            {{ $questionnaires->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection