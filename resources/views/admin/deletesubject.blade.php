@extends('layouts.app1')
@section('content2')
<div class="table-history-user">
    <table >
        <tr class="th">
            <th>ID</th>
            <th>Subject Name</th>
            <th>Subject Description</th>
            <th>Delete</th>
            
        </tr>

@foreach($user as $a)
            <tr>
            
            <td >{{$a->id}}</td>
            <td>{{$a->subject_name}}</td>
            <td>{{$a->subject_description}}</td>
            
            <td><a href="deletsubject/{{$a->id}}}" >Delete</td>
              </form>      
              </tr>
@endforeach
    </table>
</div>
@endsection
