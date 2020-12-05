  @extends('admin.dashboard')
  @section('content')
      <div class="col-lg-12">
          <div class="card">
              <div class="card-header d-flex align-items-center">
                  <h4>Add new user</h4>
              </div>
              <div class="card-body">
                  <form>
                      <div class="form-group">
                          <label>Full Name</label>
                          <input type="text" placeholder="Full Name" class="form-control" name="full-name">
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" placeholder="Password" class="form-control" name="password">
                      </div>
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" placeholder="Email Address" class="form-control" name="email">
                      </div>
                      <div class="checkbox">
                          <label><input type="checkbox" value="" name="verified"> Verified</label>
                      </div>
                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" placeholder="Email Address" class="form-control">
                      </div>

                      <div class="form-group">
                          <input type="submit" value="Add User" class="btn btn-primary">
                      </div>
                  </form>
              </div>
          </div>
      </div>


      @endsection