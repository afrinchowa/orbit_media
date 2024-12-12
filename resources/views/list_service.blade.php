@extends('layouts.master')

@section('content')



<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Services</center>
                        </div>

                        @if (session()->has('success'))

<div class="alert alert-success">
    <i>Action completed successfully</i><br>
</div>
@endif




<br>


<br>
<table class="table table-striped">
<thead>
<tr>




<th><center>Name<center></th>
<th><center>Short Description</center></th>
<th><center>Description</center></th>


<th><center></center></th>



<th colspan="2"><center></center></th>
</tr>

@foreach($services as $service)
<tr>

<td><center>{{$service->name}}</center></td>

<td><center>{{$service->short_description}}</center></td>
<td><center><?php  echo $service->description; ?></center></td>



<td>
                                <!-- Extra small Edit and Delete buttons -->
                                <a class="btn btn-primary " <a href="{{ route('services.edit', $service->id) }}">Edit</a>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>


<!-- Modal content -->

</tr>
@endforeach
</table>



        </div>
    </div>















@endsection
