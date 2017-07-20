@extends('layouts.app')

@section('content')

    @php
        $project = array_filter(json_decode($data['project'], true))[0];
    @endphp

    <div class="project">
        <div class="heading">{{ $project['name'] }}</div>
        <div class="area">

            @for($j=1; $j<=rand(4,8); $j++)

                <div class="board">
                    <div class="title">Title {{ rand(1, 20) }}</div>

                    @for($i=1; $i <= rand(1, 40); $i++)
                    <div class="card">
                        <div class="title">Card {{ rand(1, 100) }}</div>
                    </div>
                    @endfor

                </div>

            @endfor


        </div>
    </div>
@endsection