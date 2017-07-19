@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row projects">

        <div class="col-md-12">
            <h1 class="color-white">My Projects</h1>
        </div>

        @php
            $recentProjects = array_filter(json_decode($data['recentProjects'], true));
        @endphp

        @foreach($recentProjects as $project)

            <div class="col-md-4">
                <a href="{{ route('project.show', $project['id']) }}">
                    <div class="panel panel-success">
                        <div class="panel-heading">{{ $project['name'] }}</div>

                        @if(!empty($project['detail']))
                            <div class="panel-body">
                                {{ $project['detail'] }}
                            </div>
                        @endif

                    </div>
                </a>
            </div>

        @endforeach

    </div>
</div>
@endsection
