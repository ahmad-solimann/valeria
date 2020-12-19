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
                                    <td><span class="mt-2">{{$user->id}} </span> </td>
                                    <td><span class="mt-2">{{$user->username}} </span> </td>
                                    <td><span class="mt-2">{{$user->email}}</span></td>
                                    <td>
                                        <span class="mt-2">
                                        @if($user->verified)
                                            Yes
                                        @else
                                            No
                                        @endif

                                        </span>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <a href="#"> <button class="btn btn-primary rounded mr-1" style="width: 4.5rem" >Show</button> </a>
                                        <a href="{{route('users.edit',$user->id)}}"> <button class="btn btn-outline-info rounded mr-1" style="width: 4.5rem" >Edit</button> </a>
                                        <form action="{{route('users.destroy',$user->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger rounded"style="width: 4.5rem" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                            </tr>
                                @endforeach
                            </tbody>


                        </table>
                        <div class="mt-4 text-small ">
                            {{ $users->links() }}
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection