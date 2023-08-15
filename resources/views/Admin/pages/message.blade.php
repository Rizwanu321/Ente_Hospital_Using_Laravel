@extends('Admin.master')
@section('content')

  <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <section class="content-header">
      <h1>
        Dashboard
        <small>Doctor Categories Categories</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Categories</li>
      </ol>
    </section>

   <div class="container">

   
	<h3 style="color: blue">All Message Query</h3>
<table class="table" id="myTable">
  <thead>
    
  </thead>
    <tbody style="background-color: #98a098">
      <div class="row">
        
      
    	@foreach($message as $m)
             <div class="col-md-4 mr-2">
                      <div class="card">
                        <div class="card-body" style="margin-right: 30px">
                          <pre class="text-uppercase" style="font-weight: bold;">
Contact name: {{$m->name}}
Contact query: {{$m->query}}
Contact message: {{$m->message}}
                          </pre>
                        </div>
                      </div>
                    </div>
            
            	
        
        @endforeach
        </div>

    </tbody>


   </table>

</div>
 

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>




   @stop