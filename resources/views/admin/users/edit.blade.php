@extends('admin.dashboard')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4>Update current user</h4>
            </div>
            <div class="card-body">
                <form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" placeholder="Username" class="form-control" name="username" value="{{$user->username ? $user->username : "" }}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Email Address" class="form-control" name="email" value="{{$user->email ? $user->email : "" }}">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="verified" {{$user->verified == 1 ? "checked" : ""}} > Verified</label>
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" class="form-control" name="first_name" value="{{$user->first_name ? $user->first_name : "" }}">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="{{$user->last_name ? $user->last_name : "" }}">
                    </div>
                    <div class="form-group">
                        <label>Emarites National ID</label>
                        <input type="text" placeholder="Emarites National ID" class="form-control" name="emirates_national_id" value="{{$user->emirates_national_id ? $user->emirates_national_id : ""}}">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" placeholder="City" class="form-control" name="city" value="{{$user->city ? $user->city : "" }}">
                    </div>
                    <div class="form-group">
                        <label>Address 1</label>
                        <input type="text" placeholder="Address 1" class="form-control" name="address_1" value="{{$user->address_1 ? $user->address_1 : "" }}">
                    </div>
                    <div class="form-group">
                        <label>Address 2</label>
                        <input type="text" placeholder="Address 2" class="form-control" name="address_2" value="{{$user->address_2 ? $user->address_2 : "" }}">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="Phone" class="form-control" name="phone" value="{{$user->phone ? $user->phone : "" }}">
                    </div>




                    <div class="form-group">
                        <input type="submit" value="Update User" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection