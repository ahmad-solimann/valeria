@extends('admin.dashboard')
@section('content')
    <div class="container px-5 mt-4 py-5">
        <div class="card">
            <div class="card-header d-flex">
                <h2 class="display-4 text-gray font-weight-bold">Questionnaire by {{$questionnaire->user->username}}</h2>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Project Name</dt>
                    <dd class="col-sm-9">{{$questionnaire->project_name}}</dd>
                    <dt class="col-sm-3 mt-2">Category</dt>
                    <dd class="col-sm-9" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-primary">Consulting</li>
                            <li class="breadcrumb-item text-primary">Interior Design</li>
                            <li class="breadcrumb-item text-primary">Commercial Design</li>
                            <li class="breadcrumb-item active" aria-current="page">Offices</li>
                        </ol>
                    </dd>

                    <dt class="col-sm-3">Style</dt>
                    <dd class="col-sm-9">{{$questionnaire->style->name}}</dd>




                    <dt class="col-sm-3">Description</dt>
                    <dd class="col-sm-9">
                        <p>{{$questionnaire->project_description}}</p>
                    </dd>

                    <dt class="col-sm-3">Budget</dt>
                    <dd class="col-sm-9">{{$questionnaire->budget_range}}</dd>

                    <dt class="col-sm-3 text-truncate">Truncated term</dt>
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