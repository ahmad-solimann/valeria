  @extends('admin.dashboard')
  @section('content')
      <div class="container px-5 mt-4">
          <div class="card">
              <div class="card-header d-flex">
                  <h3 class="text-xl text-gray font-weight-bold">Add new user</h3>
              </div>
              <div class="card-body">
                  <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" placeholder="Username" class="form-control" name="username" required>
                      </div>
                      <div class="form-group mt-2">
                          <label>Password</label>
                          <input type="password" placeholder="Password" class="form-control " name="password" required>
                      </div>
                      <div class="form-group mt-2">
                          <label>Email</label>
                          <input type="email" placeholder="Email Address" class="form-control" name="email" required>
                      </div>
                      <div class="checkbox mt-2">
                          <label><input type="checkbox" value="1" name="verified"> Verified</label>
                      </div>
                      <div class="form-row mb-3">
                          <div class="col">
                              <label>First Name</label>
                              <input type="text" placeholder="First Name" class="form-control" name="first_name">
                          </div>
                          <div class="col ml-4">
                              <label>Last Name</label>
                              <input type="text" placeholder="Last Name" class="form-control" name="last_name">
                          </div>

                      </div>
                      <div class="form-group ">
                          <label>Emarites National ID</label>
                          <input type="text" placeholder="Emarites National ID" class="form-control" name="emirates_national_id">
                      </div>
                      <div class="form-group mt-2">
                          <label>City</label>
                          <input type="text" placeholder="City" class="form-control" name="city">
                      </div>
                      <div class="form-row mt-2 mb-3">
                          <div class="col">
                              <label>Address</label>
                              <input type="text" placeholder="Address" class="form-control" name="address_1">
                          </div>
                          <div class="col ml-4">
                              <label>Alternative Address</label>
                              <input type="text" placeholder="Alternative Address" class="form-control" name="address_2">
                          </div>
                      </div>

                      <div class="form-group">
                          <label>Phone</label>
                          <input type="text" placeholder="Phone" class="form-control" name="phone">
                      </div>




                      <div class="form-group mt-2">
                          <input type="submit" value="Add User" class="btn btn-primary my-4 rounded">
                      </div>
                  </form>
              </div>
          </div>
      </div>


      @endsection