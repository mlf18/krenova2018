@extends('content.template.app')
@include('content.template.slider')
@section('content')
<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        
    <div class="col-lg-12 order-lg-1">
          <div class="p-5"><center>
            <h2 class="display-4"> Daftar Pemenang</h2>
        
      <div class="container">
      <div class="page-header">
        <br><br>
      </div>
      
        <div class="row align-items-center">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-10">
            <div class="card" >
              <div class="card-body">
                <table class="table">
                  <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pemenang Krenova</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><a href="{{url('pdf/2017.pdf')}}">Daftar Pemenang Krenova 2017</a></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><a href="{{url('pdf/2016.pdf')}}">Daftar Pemenang Krenova 2016</a></td>
                    
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><a href="{{url('pdf/2015.pdf')}}">Daftar Pemenang Krenova 2015</a></td>
                    
                    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><a href="{{url('pdf/2010-2014.pdf')}}">Daftar Pemenang Krenova 2014-2010</a></td>
                    
                  </tr>
                  
                  
                  </tbody>
                </table>

              </div>
            </div>
          </div>	
          <div class="col-lg-1">
          </div>
        </div>
      </center>
    </div>
        </div>
       
      </div>
    </div>
  </section>
  @endsection