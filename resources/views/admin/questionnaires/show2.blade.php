@extends('admin.dashboard')
@section('content')
    <div class="container px-5 mt-4 py-5">
        <div class="card">
            <div class="card-header d-flex">
                <h2 class="display-4 text-gray font-weight-bold">Questionnaire by John Doe</h2>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Project Name</dt>
                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                    <dt class="col-sm-3">Description</dt>
                    <dd class="col-sm-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dignissimos illo nobis saepe? Alias aliquam consequatur cumque delectus doloribus ea eaque esse illo maxime minima natus non numquam, omnis quaerat quisquam quo rerum soluta ullam vero voluptates? Consequatur debitis dolores dolorum eum ex fuga fugiat in inventore ipsam magnam maiores nisi perferendis quod quos ratione sint, velit? Aliquid asperiores at aut cumque dolor, ducimus enim eum exercitationem illum incidunt ipsa itaque labore nostrum perspiciatis provident quo rerum soluta veniam! Ad dolorem ducimus expedita numquam omnis quas sapiente, sint voluptates! Eum iste neque qui! Ad doloremque labore nesciunt quo tempora vitae!</p>
                    </dd>

                    <dt class="col-sm-3">Budget</dt>
                    <dd class="col-sm-9">1000-1500$</dd>

                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                    <dt class="col-sm-3">Nesting</dt>
                    <dd class="col-sm-9">
                        <dl class="row">
                            <dt class="col-sm-4">Nested definition list</dt>
                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                        </dl>
                    </dd>
                </dl>



            </div>
        </div>
    </div>


@endsection