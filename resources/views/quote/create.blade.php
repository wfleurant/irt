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
      <div class="page">
            <div class="jumbotron">
              <h1><span class="text-rouge">ADD QUOTE</span></h1>
            </div>
          <div id="view">
            <p class="lead">Please read the <a href="#rules">rules</a> before posting.</p>
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 panel panel-default">
              <div class="panel-body">
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                <form class="form-horizontal" action="/q/auth/post" method="POST">
                {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="quote" class="col-sm-2 control-label">Quote Text</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="quote" name="body" rows="9" placeholder="Quote text here..."></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="notes" class="col-sm-2 control-label">Notes</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="notes" name="notes" placeholder="Context about quote">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
                      <button type="submit" class="btn btn-danger btn-block">Post</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection