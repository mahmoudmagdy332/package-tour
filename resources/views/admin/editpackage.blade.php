@extends('layouts.app')

@section('content')
	<section class="contact py-5">
		<div class="container py-lg-5 py-sm-4" id="container_signup">
			<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Update Package </h2>
			<div class="signup">
				<div class="col-lg-7 contact-left-form">
                         
                                    
					<form action="/editpackage/{{$package->package_id}}" method="post" class="row">
                                            {{csrf_field()}}
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="text" class="form-control" placeholder="Name Of Package" required=""name="pname" value="{{$package->package_name}}">
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="number" class="form-control" min="0" max="100"  placeholder="Number of days" required=""name="day" value="{{$package->daiys}}"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <select class="form-control" id="Subjects" name="sub" >
									<option>Subject</option>
                                                              
                                                                        @foreach($alls as $su)
                                                                        <option>{{$su->subject_name}}</option>
                                                                        @endforeach
								</select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <select class="form-control" id="Places"name="place">
									<option>Place</option>
									 @foreach($allp as $su)
                                                                        <option>{{$su->place_name}}</option>
                                                                        @endforeach 
                                                         
								</select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="date" class="form-control" placeholder="Going Date" required=""name="going" value="{{$package->going_time}}"> 
						</div>
                                            <div class="col-sm-6 form-group contact-forms">
                                                <input type="text" class="form-control" placeholder="Hotel" required=""name="hotel" value="{{$package->hotel}}"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="number" class="form-control" placeholder="Airline Price"step="any" min="0"  name="air" value="{{$package->airline_price}}"> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
                                                    <input type="number" class="form-control" placeholder="Train Price" step="any" min="0" name="train" value="{{$package->train_price}}"> 
						</div>
						<div class="col-md-6 form-group contact-forms">
                                                    <input type="number" class="form-control" placeholder="Bus Price" step="any" min="0"  name="bus" value="{{$package->bus_brice}}"> 
						</div>
						<div class="col-md-6 form-group contact-forms">
							
                                                        <input type="file" placeholder="Add profile picture" name="file" required=""  value="{{$package->image}}"> 
						
						</div>
						
						<div class="col-md-12 booking-button">
                                                    <input id="lg" type="submit"value="Update"class="btn btn-block sent-butnn"name="submit">
						</div>
                                            <br><br><span class="error">{{$err}} </span>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
		<!-- //Booking -->

