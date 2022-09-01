@extends('layouts.app')

@section('content')
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
           
              <div class="card card-plain mt-8">
           
                  
                <div class="">
                  <h3 class="font-weight-bolder text-info text-gradient">Library System</h3>
                </div>    
                
                  <div class="row">
                  <div class="col-lg-12">
                        
                <button type="button" class="btn btn-info custom" style="float: right" data-toggle="modal" data-target="#exampleModalCenter">
                  <i class="fa fa-shopping-cart"></i> My book cart
                </button>
                    </div>
                </div>
                  
                  
                <div class="card-body">
                    <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                </div>
                <div class="table-responsive p-3">
                  <form method="POST" action="">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Book ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Genre/Type</th>
                        <th>price</th>
                        <th>status</th>
                        <th>Buy</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($books as $book)

                      <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->genre_type}}</td>
                        <td>{{$book->price}}</td>

                        @if ($book->status == '0')
                        <td><label class="badge badge-success">Available</label></td>
                        <td><button type="submit" class="btn btn-success btn-sm" name="buy">Buy</button></td>
                        @else
                        <td><label class="badge badge-warning">Purchased</label></td>
                        <td><button type="button" class="btn btn-warning btn-sm" name="buy" disabled>Purchased</button></td>
                        @endif
                        </tr>

                      @endforeach

                    </tbody>
                  </table>
                  </form>
                </div>
              </div>
            </div>
           

        </div>
                </div>
              </div>
           
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                {{-- <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('img/curved-images/curved6.jpg')"></div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>



  <!-- Modal -->
  <form method="POST" action="">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bolder text-info text-gradient" id="exampleModalLongTitle">MY BOOK CART</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <embed src='img/book.jpg' class='img-fluid' width='500' height='500' />
        @foreach ($books as $book)

        @if ($book->status == '1')
        <div class="modal-body">
          <h6 class="">Book ID - {{$book->id}}</h6> 
          <h6 class="">Title - {{$book->title}}</h6> 
          <h6 class="">Description - {{$book->description}}</h6> 
          <h6 class="">Genre/Type - {{$book->genre_type}}</h6> 
          <h6 class="">price - {{$book->price}}</h6> 
          <h6 class="">Date - {{date('Y-m-d', strtotime($book->created_at))}}</h6>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Hand-over</button>
        </div>
        @else
   
        @endif

  
        @endforeach
      </div>
    </div>
  </div>
  </form>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
@endsection
