@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold">
                    Latest Projects:
                </h1>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    @forelse ($projects as $index => $project)
                        <div class="col-3 mt-3 mb-4 me-2 card">
                            <h2>
                                {{$project->id}} - {{$project->title}}
                            </h2>
                            <h3>
                                {{$project->author}}
                            </h3>
                            <p class="fs-4">
                                {{substr($project->description,0,40) }}..
                            </p>
                            <a href="{ route('guest.projects.show',$project)}" class="btn btn-outline-primary mb-3">Read More</a>
                        </div>
                    @empty
                        <div class="col-12">
                            <h1>No projects available</h1>
                        </div>
                    @endforelse
                <div>
                    {{$project->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
