<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('assets/js/alh-coba-js.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <title>{{ config('app.name') }}</title>
  </head>

  

  <body>
    <header class="p-3 bg-dark text-white">
        <div class="row">
                <div class="col-12">
                        @include('layouts.navigasi-hasani')
                </div>
        </div>
      </header>

    <div class="row ps-3">
        <div class="col-9">
            <div class="row mt-4">
                <div class="col-12 mb-0 mb-2">
                    <div class="card">
                        <div class="card-body">
            						<!-- Page Content -->
                          <main>
                            
                            <h1>{{ $slot }} {{ Auth::user()->name}}</h1>
                          </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="row mt-4">
                <div class="card">
                        <div class="card-body">
                                    <!-- Page Content -->
                          <main>
                            
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">TAMBAH SANTRI</button>
                            
                          </main>
                        </div>
                    </div>
            </div>
        </div>
                
        

    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<!-- Panggil Modal -->
@include('components/modal-xl')
