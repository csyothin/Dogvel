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

  <div class="jumbotron jumbotron-fluid mb-0 p-3">
    <div class="container">
      <h1 class="display-3">Fluid jumbo heading</h1>
      <p>Qui cillum eiusmod eiusmod cupidatat consectetur sint ex ut mollit magna mollit ex occaecat cupidatat.</p>
    </div>
  </div>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <div class="container">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin') }}">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('admin/osts') }}">Posts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-4">
    <div class="row bg-light p-4">
      <div class="col-lg-3">
        <nav class="breadcrumb">
          <a class="breadcrumb-item" href="{{ url('admin') }}">Home</a>
          <span class="breadcrumb-item active">Posts</span>
        </nav>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">Lists</a>
          <a href="#" class="list-group-item list-group-item-action">Add</a>
          <a href="#" class="list-group-item list-group-item-action">Report</a>
        </div>
        <div class="mt-4 ml-1">
          <span>Actived</span>
          <div class="progress">
            <div class="progress-bar" style="width:70%">70%</div>
          </div>
          <span>Inactive</span>
          <div class="progress">
            <div class="progress-bar" style="width:30%">30%</div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <table id="table" class="table table-striped table-bordered">
          <thead class="thead-dark bg-secondary text-white">
            <tr>
              <th>title</th>
              <th>description</th>
              <th>active</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Sint culpa sit aliquip excepteur commodo pariatur aute mollit elit mollit.</td>
              <td>Enim eiusmod pariatur esse et tempor irure adipisicing reprehenderit. Irure consectetur sit velit ipsum elit commodo. Adipisicing incididunt id proident eu enim sint mollit excepteur quis aute eiusmod. Reprehenderit veniam consequat fugiat in. Voluptate exercitation in ut ea id exercitation quis.</td>
              <td></td>
            </tr>
            <tr>
              <td scope="row">Sint culpa sit aliquip excepteur commodo pariatur aute mollit elit mollit.</td>
              <td>Enim eiusmod pariatur esse et tempor irure adipisicing reprehenderit. Irure consectetur sit velit ipsum elit commodo. Adipisicing incididunt id proident eu enim sint mollit excepteur quis aute eiusmod. Reprehenderit veniam consequat fugiat in. Voluptate exercitation in ut ea id exercitation quis.</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(window).scroll(function() {
      ($(this).scrollTop() >= 1000) ? $('#return-to-top').show('slow'): $('#return-to-top').hide('slow')
    });
    $('#return-to-top').click(function() {
      window.scrollTo(0, 0);
    });
    $(document).ready(function() {
      $('#table').DataTable();
    });
  </script>
</body>

</html>