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
                                <th>Id</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Verified</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr style="vertical-align: center">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->verified)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('users.edit',$user->id)}}"> <button class="btn btn-primary rounded mr-1" style="width: 4.5rem" >Edit</button> </a>
                                        <form>
                                            <button class="btn btn-danger rounded"style="width: 4.5rem" >Delete</button>
                                        </form>
                                    </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection