<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

  <!-- custom css -->
  <style>
    html {
      scroll-behavior: smooth;
    }

    #content {
      height: 500px;
    }

    #return-to-top {
      position: fixed;
      bottom: 20px;
      right: 15px;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5);
      width: 50px;
      height: 50px;
      display: block;
      text-decoration: none;
      display: none;
      -webkit-transition: all 0.3s linear;
      -moz-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease;
    }

    #return-to-top i {
      color: #fff;
      margin: 0;
      position: relative;
      left: 16px;
      top: 13px;
      font-size: 19px;
      -webkit-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease;
    }

    .border-left-5px {
      border-left: 5px solid;
    }

    .bg-head {
      background-color: aliceblue !important;
    }

    small {
      font-size: 70%
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
      <i class="fa fa-comment fa-xs ml-4 position-absolute" aria-hidden="true"></i><i class="fa fa-cat" aria-hidden="true"></i>
      <small>web</small>Demo
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNav1" aria-controls="collapsibleNav1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNav1">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">Action 1</a>
            <a class="dropdown-item" href="#">Action 2</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid mb-0 mt-4">
    <div id="web-name" class="container">
      <h1 class="display-3">Fluid jumbo heading</h1>
      <p class="lead">Jumbo helper text</p>
      <hr class="my-2">
      <p>Do ea enim aliquip est quis sint voluptate pariatur. Sit consequat reprehenderit ipsum ullamco laborum aliquip qui in culpa consequat laboris enim. Sint minim dolor aute incididunt labore mollit irure elit duis laboris velit est. Officia eu anim reprehenderit fugiat id nulla id.</p>
    </div>
  </div>

  <div class="container my-4">
    <div class="row">
      <div class="col-12 mb-3">
        <h4 class="border-left-5px bg-head p-3 border-info">Heading</h4>
      </div>
    </div>
    <div id="content">
      ...
    </div>
  </div>


  <!-- Footer -->
  <div class="jumbotron jumbotron-fluid text-white mb-0" style="background-color: #333!important;">
    <div class="container">
      <p class="lead">Deserunt laboris fugiat deserunt est id cupidatat incididunt labore commodo esse consequat.</p>
      <div class="row">
        <div class="col-lg-4">
          @for ($i = 0; $i < 16; $i++) <!-- Tag {{ $i }} -->
            <a href="#" class="badge badge-secondary px-3 py-2 m-1">Tag {{ $i }}</a>
            @endfor
        </div>
        <div class="col-lg-4">
          Esse elit aliqua officia tempor consequat irure irure ullamco. Aute tempor nulla et officia nisi laboris ea sunt do irure Lorem occaecat in cupidatat. Veniam nisi esse nisi sint dolore ad incididunt enim cillum.
        </div>
        <div class="col-lg-4 text-center">
          <form action="">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="button" id="button-addon2">Subscribe <i class="fa fa-inbox" aria-hidden="true"></i></button>
              </div>
            </div>
          </form>
          <span>Follow me</span>
          <h2>
            <i class="fab fa-facebook fa-lg px-1" aria-hidden="true"></i>
            <i class="fab fa-twitter fa-lg px-1" aria-hidden="true"></i>
            <i class="fab fa-github fa-lg px-1" aria-hidden="true"></i>
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron jumbotron-fluid bg-dark text-white mb-0 border-primary p-4" style="border-top: 5px solid">
    <div class="container">
      <p>© test 2019. Design By: HTML Design.</p>
    </div>
  </div>

  <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(window).scroll(function() {
      ($(this).scrollTop() >= 1000) ? $('#return-to-top').show('slow'): $('#return-to-top').hide('slow')
    });
    $('#return-to-top').click(function() {
      window.scrollTo(0, 0);
    });
  </script>
</body>

</html>