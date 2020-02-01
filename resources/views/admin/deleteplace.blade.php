@extends('layouts.app1')
@section('content2')
<div class="table-history-user">
    <table >
        <tr class="th">
            <th>ID</th>
            <th>Place Name</th>
            <th>Place Description</th>
            <th> Delete</th>
        </tr>

@foreach($user as $a)
            <tr>
            
            <td >{{$a->id}}</td>
            <td>{{$a->place_name}}</td>
            <td>{{$a->place_description}}</td>
            
            <td><a href="deletplace/{{$a->id}}" >Delete</td>
              </form>      
              </tr>
@endforeach
    </table>
</div>

@endsection