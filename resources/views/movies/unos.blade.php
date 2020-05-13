@extends('layouts.master')
@section('title', 'Filmovi')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Filmovi</div>

                @include('common.error')

                <div class="panel-body">
                <form action="{{ url('filmovi') }}" method="POST" class="form-horizontal">
						{{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Naslov filma</label>
                            <input type="naslov" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite naslov filma">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Žanr</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Godina izlaska filma</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trajanje (u minutama)</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Naslovna slika</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Opis filma</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
							<div class="col-sm-offset-3 col-sm-6" style="text-align:center">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-save"></i> Potvrdi
								</button>
                </div></form>
            </div>
        </div>
    </div>
</div>
<div class="card" style="width: 18rem;margin-right: 50px">
  <img class="card-img-top" src="images/antitrust_2001.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Movie title </h5>
    <h5 class="card-title">Žanr </h5>
    <h5 class="card-title">Godina izlaska </h5>
    <h5 class="card-title">Trajanje </h5>

    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Obriši</a>
  </div>
</div>
<div class="card" style="width: 18rem;margin-right: 50px"">
  <img class="card-img-top" src="images/antitrust_2001.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Movie title </h5>
    <h5 class="card-title">Žanr </h5>
    <h5 class="card-title">Godina izlaska </h5>
    <h5 class="card-title">Trajanje </h5>

    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Obriši</a>
  </div>
</div>
<div class="card" style="width: 18rem;margin-right: 50px"">
  <img class="card-img-top" src="images/antitrust_2001.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Movie title </h5>
    <h5 class="card-title">Žanr </h5>
    <h5 class="card-title">Godina izlaska </h5>
    <h5 class="card-title">Trajanje </h5>

    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Obriši</a>
  </div>
</div>
@endsection
