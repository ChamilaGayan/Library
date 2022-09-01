@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xl-7 col-lg-5 col-md-6 d-flex flex-column mx-auto">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="font-weight-bolder text-info text-gradient">Purchase Book
                        <a href="{{ url('home') }}" style="float: right" class="btn btn-primary float-end btn-sm">BACK</a>
                    </h4>
                </div>
                <div class="card-body">


                    
                    {{-- =========================================================== --}}
                    <form action="{{ url('update-book/'.$book->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <h6 class="">Book ID - {{$book->id}}</h6> 
                            <h6 class="">Title - {{$book->title}}</h6> 
                            <h6 class="">Description - {{$book->description}}</h6> 
                            <h6 class="">Genre/Type - {{$book->genre_type}}</h6> 
                            <h6 class="">price - {{$book->price}}</h6> 
                            <h6 class="">Date - {{date('Y-m-d', strtotime($book->updated_at))}}</h6>
                          </div>
                          <input type="hidden" name="status" value="1" class="form-control">
                       
                          @if ($book->status == '0')
                            <div class="form-group mb-3">
                                <center><button type="submit" class="btn btn-primary">Buy This Book</button></center>
                            </div>

                            @else
                            <div class="modal-body">
                            <label class="badge badge-warning">Purchased</label>
                            </div>
                            @endif
    
                       
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection