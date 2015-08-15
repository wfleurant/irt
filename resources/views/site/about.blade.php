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
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/about">About</a></li>
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
      <div class="page">
            <div class="jumbotron">
              <h1>About <span class="text-rouge">IRT</span></h1>
            </div>
          <div id="about">
            <p class="lead">IRT was developed by <a href="https://twitter.com/dsup">@dsup</a> in August 2015 as a successor to the chirpy software used for service he runs.</p>
          </div>
        </div>
      </div>
    </div>
@endsection