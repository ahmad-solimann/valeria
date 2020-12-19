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
                            @foreach($categoriesTree as $category)
                            <li class="breadcrumb-item
                            @if(!$loop->last)
                            text-primary
                            @else
                                    active
                            @endif
                                ">{{$category}}</li>
                                @endforeach
                        </ol>
                    </dd>
                    @if(isset($questionnaire->style))
                    <dt class="col-sm-3">Style</dt>

                    <dd class="col-sm-9">{{$questionnaire->style->type.' - '. $questionnaire->style->name}}</dd>
                    @endif

                    <dt class="col-sm-3">Description</dt>
                    <dd class="col-sm-9">
                        <p>{{$questionnaire->project_description}}</p>
                    </dd>

                    @if(isset($questionnaire->budget_range))
                    <dt class="col-sm-3">Budget</dt>
                    <dd class="col-sm-9">{{$questionnaire->budget_range}}</dd>
                    @endif

                    @if(isset($questionnaire->project_address))
                    <dt class="col-sm-3 text-truncate">Address</dt>
                    <dd class="col-sm-9">{{$questionnaire->project_address}}</dd>
                    @endif

                    @if(isset($questionnaire->links))
                    <dt class="col-sm-3">Links</dt>
                    <dd href="www.google.com" class="col-sm-9">www.google.com</dd>
                        @endif
                </dl>


            </div>
        </div>
    </div>


@endsection