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

  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light bg-light my-3">
      <a class="navbar-brand" href="#">Category</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNav2" aria-controls="collapsibleNav2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNav2">
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
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div id="carousel1" class="carousel slide d-none d-lg-block mb-3" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
        <li data-target="#carousel1" data-slide-to="3"></li>
        <li data-target="#carousel1" data-slide-to="4"></li>
        <li data-target="#carousel1" data-slide-to="5"></li>
        <li data-target="#carousel1" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        @for ($i = 0; $i < 7; $i++) <!-- Carousel {{ $i }} -->
          <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
            <img src="https://dummyimage.com/1200x500/ccc/fff" class="img-fluid" alt="{{ $i }}">
          </div>
          @endfor
      </div>
      <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="row">
      <div class="col-12">
        <h4 class="border-left-5px bg-head p-3 border-info">Heading</h4>
      </div>
      @for ($i = 0; $i < 8; $i++) <!-- Content {{ $i }} -->
        <div class="col-lg-3 my-2">
          <a href="#" class="text-decoration-none">
            <img src="https://dummyimage.com/600x600/ccc/fff" class="img-fluid img-thumbnail" alt="">
            <h5>Nostrud dolore minim laborum et aliquip reprehenderit nostrud laboris ipsum do laboris Lorem.</h5>
          </a>
          <span class="figure-caption">Excepteur officia esse nostrud laborum aute incididunt dolore. Lorem adipisicing id nulla consequat magna consequat aute anim consequat aute. Duis fugiat sunt nisi sunt eiusmod adipisicing. Culpa commodo aute veniam consequat deserunt pariatur eu aliqua fugiat deserunt ipsum sit cupidatat ut.</span>
        </div>
        @endfor
    </div>
    <button type="button" class="col-12 mb-3 btn btn-primary">Read more</button>
  </div>


  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Incididunt dolore ut non Lorem.</h1>
      <p class="lead">Aliqua excepteur ullamco ad aliquip nulla veniam commodo esse deserunt nulla quis adipisicing veniam sunt. Consectetur excepteur culpa laboris reprehenderit. Aliquip exercitation ea ex adipisicing tempor non in velit ex aliqua. Veniam aute reprehenderit culpa cillum consectetur magna consequat sint id est. Adipisicing et consequat tempor ea fugiat cupidatat fugiat incididunt. Cillum laborum non esse in eiusmod esse sint veniam incididunt do amet nostrud non.</p>
      <hr class="my-2">
      <p>Amet duis aliquip ad et Lorem cupidatat elit id mollit incididunt sit est reprehenderit. Consequat ad eu excepteur nulla labore exercitation velit ullamco dolor labore pariatur eiusmod duis. Est minim deserunt consequat dolore esse ut. Magna nulla dolor cillum aliquip.
        Exercitation laboris culpa sit tempor sunt exercitation tempor cupidatat eu. Adipisicing ea aliquip aliquip veniam magna. Quis consectetur voluptate anim velit anim duis Lorem consectetur ad officia sint amet. Adipisicing pariatur dolor deserunt ipsum veniam veniam nisi commodo sunt aliquip non. Quis quis proident quis occaecat est nisi non ut.
        Ex eu nostrud esse mollit sit consectetur Lorem ipsum irure ea nostrud. Excepteur laboris eiusmod magna exercitation ut qui excepteur commodo. Excepteur fugiat pariatur nostrud cillum laborum deserunt aute. Dolore incididunt laborum cupidatat ad non do officia elit excepteur fugiat qui. Enim et enim irure ullamco.
        Adipisicing quis mollit voluptate sunt aliqua consequat adipisicing duis veniam. Exercitation do nostrud qui proident sunt. Sit duis cupidatat sit proident excepteur.
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
  </div>

  <div class="container mb-4">
    <div class="row">
      <div class="col-12 mb-3">
        <h4 class="border-left-5px bg-head p-3 border-info">Heading</h4>
      </div>
      <div class="col-lg-6">
        <span class="text-info">Sub Category</span><br>
        <h4 class="mb-3">Cillum aliquip quis nisi in Lorem anim quis sit anim cillum nostrud amet enim consectetur.</h4>
        <p class="mb-3">Irure elit enim sunt incididunt voluptate. Mollit culpa laboris duis mollit ipsum pariatur. Sint ut sit excepteur nulla dolor minim aliqua non laborum tempor aliquip culpa. Ipsum dolore id ipsum quis deserunt labore id anim velit velit dolor labore labore enim. Laboris cillum minim nostrud non nulla duis ut aliqua aute. Dolor dolore proident ut excepteur minim et ipsum aliquip aute reprehenderit.</p>
        <p class="mb-3">Sint ut sit excepteur nulla dolor minim aliqua non laborum tempor aliquip culpa. Ipsum dolore id ipsum quis deserunt labore id anim velit velit dolor labore labore enim. Laboris cillum minim nostrud non nulla duis ut aute.</p>
        <button type="button" class="col-8 btn btn-outline-success mb-2">Learn More</button>
      </div>
      <div class="col-lg-6">
        <img src="https://dummyimage.com/800x600/ccc/fff" class="img-fluid img-thumbnail" alt="">
      </div>
    </div>
    <hr class="my-4">
    <div class="row">
      <div class="col-lg-6">
        <img src="https://dummyimage.com/800x600/ccc/fff" class="img-fluid img-thumbnail" alt="">
      </div>
      <div class="col-lg-6">
        <span class="text-info">Sub Category</span><br>
        <h4 class="mb-3">Cillum aliquip quis nisi in Lorem anim quis sit anim cillum nostrud amet enim consectetur.</h4>
        <p class="mb-3">Irure elit enim sunt incididunt voluptate. Mollit culpa laboris duis mollit ipsum pariatur. Sint ut sit excepteur nulla dolor minim aliqua non laborum tempor aliquip culpa. Ipsum dolore id ipsum quis deserunt labore id anim velit velit dolor labore labore enim. Laboris cillum minim nostrud non nulla duis ut aliqua aute. Dolor dolore proident ut excepteur minim et ipsum aliquip aute reprehenderit.</p>
        <p class="mb-3">Sint ut sit excepteur nulla dolor minim aliqua non laborum tempor aliquip culpa. Ipsum dolore id ipsum quis deserunt labore id anim velit velit dolor labore labore enim. Laboris cillum minim nostrud non nulla duis ut aute.</p>
        <button type="button" class="col-8 btn btn-outline-success">Learn More</button>
      </div>
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