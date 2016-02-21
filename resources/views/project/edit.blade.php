@extends('layouts.master')
@section('content')
  <div class="container row content">
    @include('profile.details')
    <div class="col l9 m12 s12 row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#projects">Projects</a></li>
          <li class="tab col s3"><a href="#favorites">Favorites</a></li>
          <li class="tab col s3"><a href="#upload" class="active">Edit Project</a></li>
          <li class="tab col s3"><a href="#settings">Profile</a></li>
        </ul>
      </div>
      @include('project.tabcontent')
    </div>
  </div>
@stop