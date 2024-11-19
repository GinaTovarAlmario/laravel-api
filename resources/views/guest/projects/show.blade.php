@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-black">
                        <h5 class="card-title">
                            TITLE: {{$project->title}}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            AUTHOR: {{$project->author}}
                        </h6>
                        <p class="card-text">
                            DESCRIPTION: {{ $project->content }}
                        </p>
                        <a href="{{route('guest.projects.index')}}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
