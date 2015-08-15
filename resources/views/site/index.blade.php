@extends('app')

@section('content')
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">irt</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/q/new">Newest</a></li>
            <li><a href="/q/popular">Popular</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/q/create">Post New +</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="landing_page">
        <div class="row">
          <div class="col-sm-8">
            <div class="jumbotron">
              <h1><span class="text-rouge">I</span>RC <span class="text-rouge">R</span>emembers <span class="text-rouge">T</span>hat</h1>
              <p class="lead">Internet Relay Chat has its moments, its not dead yet.</p>
              <p><a class="btn btn-primary btn-lg">Browse</a> or <a class="btn btn-primary btn-lg">Post New</a></p>
            </div>
          </div>
          <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item">
                  <span class="badge">14</span>
                  Total Quotes
                </li>
                <li class="list-group-item">
                  <span class="badge">2</span>
                  Added Today
                </li>
                <li class="list-group-item">
                  <span class="badge">1</span>
                  Liked Today
                </li>
              </ul>
          </div>
        </div>
      </div>
  </div>

@endsection