<x-layout>

  <div class="container-fluid mt-5">
    <div class="row">
        <h1>Registrati</h1>
      <div class="col-12 col-md-6 mt-3">

        <form action="{{route('register')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
            </div>
          <button type="submit" class="btn">Invia</button>
        </form>

      </div>
    </div>
  </div>

    </x-layout>