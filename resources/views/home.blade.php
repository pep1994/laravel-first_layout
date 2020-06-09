@extends('mainLayout')

@section('main-content')

<div class="jumbotron">
    <h1 class="display-4">Hello, this is Home page!</h1>
    <p class="lead">I'm studying Laravel</p>
    <hr class="my-4">
    <p>For more informations click the button</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/numbers" role="button">Learn more</a>
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
          <h3>Title 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quam tempora deserunt cupiditate, consequatur, mollitia, neque sed qui possimus rerum aspernatur? Error velit rem soluta dolorem cupiditate id at facere.</p>
      </div>
      <div class="col-md-4">
        <h3>Title 2</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur sint ab ipsa corrupti esse reiciendis at assumenda?</p>
      </div>
      <div class="col-md-4">
        <h3>Title 3</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda explicabo dolores omnis est minus consequatur hic quis, sit corporis? Voluptatibus iure ipsa officiis expedita, esse dolore illo ullam quisquam atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus iste dolores fugit quod exercitationem debitis enim itaque, rem, labore eos dolorem sed atque, ipsam minus harum illum accusamus. Alias, nihil!
        </p>
      </div>
    </div>
  </div>

@endsection

