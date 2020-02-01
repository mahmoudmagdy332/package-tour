@extends('layouts.app1')
@section('content2')
<div class="table-history-user">
    <table >
        <tr class="th">
        
            <th>Package Name</th>
            <th>Place Name</th>
            <th>Subject Name</th>
            <th>Going Time</th>
            <th>Train Price</th>
            <th>Airline Price</th>
            <th>Bus Price</th>
            <th>Hotel</th>
            <th>Daiys</th>

            
            
        </tr>

@foreach($user as $a)
            <tr>
 
            <td>{{$a->package_name}}</td>
            <td>{{$a->place_name}}</td>
             <td>{{$a->subject_name}}</td>
            <td>{{$a->going_time}}</td>
             <td>{{$a->train_price}}</td>
            <td>{{$a->airline_price}}</td>
             <td>{{$a->bus_brice}}</td>
            <td>{{$a->hotel}}</td>
             <td>{{$a->daiys}}</td>
            
             <td><a href="deletepackage/{{$a->package_id}}" >Delete</td>
            <td><a href="/editpackage/{{$a->package_id}}" >Edite</td>
              </form>      
              </tr>
@endforeach
    </table>
</div>
@endsection
