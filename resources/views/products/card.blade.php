<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="{{$product->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  <p class="card-text">{{$product->description}}</p>
                  <p class="card-text">{{$product->price}}</p>
                  <a href="#" class="btn btn-primary">Dettagli</a>
                </div>
              </div>
        </div>
    </div>
</div>
