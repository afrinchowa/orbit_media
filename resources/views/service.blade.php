@extends('layouts.master')

@section('content')




<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Add Services</center>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                <form action="/services" method="POST" enctype="multipart/form-data">
                                @csrf

                                  

                                <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text"  name="name" placeholder="Enter name of service" value="{{old('name')}}"  class="form-control" />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif

                                        </div>


                                        <div class="form-group">
                                            <label>Short Description:</label>
                                            <input type="text"  name="short_description" placeholder="Enter short_description about services" value="{{old('short_description')}}"  class="form-control" />
                                            @if ($errors->first('short_description'))<div class="alert alert-danger">{!! $errors->first('short_description') !!}</div> @endif

                                        </div>




                                         <div class="form-group">
                                         <label>Description:</label>
                                           <textarea name="description" > </textarea>
                                           <script>
                                            CKEDITOR.replace( 'description' );
                                           </script>

                                         </div>








                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>






    </div>

@endsection








