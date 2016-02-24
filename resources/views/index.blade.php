@extends('layouts.master')

@section('content')
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="/images/desk.jpeg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="white-text">Watch n Learn Anything!</h3>
         <a class="btn btn-large blue-grey darken-4" href="{{ url('/auth/register') }}">Get Started</a>
        </div>
      </li>

    </ul>
  </div>
    <div class="section white">
        <div class="row container">
            <h3 class="flow-text blue-grey-text">Latest vidoes</h3>
            <div class="divider"></div>
            <div class="row">
            @foreach($projects as $project)
                <div class="col l3 m6 s12">
                    <div class="card small" data-id="{{ $project->id }}">
                        <div class="card-image">
                          <img src="http://img.youtube.com/vi/{{ $project->url }}/0.jpg">                        </div>
                        <div class="card-content">
                          <p class="flow-text">{{ $project->title}}</p>
                        </div>
                        <div class="card-action right">
                          {{ $project->favorites()->count() }} <i class="fa fa-heart"></i>
                          {{ $project->comments()->count() }} <i class="fa fa-comment"></i>
                        </div>
                      </div>
                                    </div>
            @endforeach
            </div>
            <div class="center">{!! $projects->links() !!}</div>
            <div class="divider"></div>
        </div>
  </div>
@endsection
