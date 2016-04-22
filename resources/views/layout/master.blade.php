<html>
  <head>
     <title>This is a CRUD</title>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      @section('navigation')
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('books') }}">View All Books</a></li>
                <li><a href="{{ URL::to('books/create') }}">Insert a Book</a></li>
                 <li>
                    <form method="post" name="search" action="/books/search">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                       <div class="form-group">
                          <input name="txtName" type="text" class="form-control" >
                          <input type="submit" name="bntSeach" class="btn btn-primary" value="search">
                        </div>
                    </form>
                </li>
            </ul>
        </nav>
      @show
      @yield('content')
    </div>
  </body>
</html>