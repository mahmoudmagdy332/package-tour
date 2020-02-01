@extends('layouts.app')
@section('content')
        <section class="contact py-5">
                <div class="container py-lg-5 py-sm-4" id="container_login">
                    <h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Add Place </h2>
                    <div class="add_place">
                        <div class="col-lg-7 contact-left-form">
                            <?php
                            /*
                            $e="";
                            include '../back/admin.php';
                            require_once ('../back/places.php');
                            $p=new places();
                            $r=new admin();
                            if(isset($_POST['su'])){
                         if($r->search_forplace($_POST['pname'])){
                                $e="This place name already exists";
                            }
                            else{
                            $p->place_name=$_POST['pname'];
                            $p->place_description=$_POST['dname'];
                            
                            $r->addplace($p);
                            $e="This subject added";
                            }
                            }
                             * 
                             */
                            ?>
                            
                            <form action="addplace" method="post" class="row">
                                {{csrf_field()}}
                                <div class="col-sm-12 form-group contact-forms">
                                    <input type="text" class="form-control" placeholder="Place Name" required=""name="pname">
                                </div>
                                <div class="col-sm-12 form-group contact-forms">
                                    <input type="text" class="form-control" placeholder="Place Description" required=""name="dname">
                                </div>
                                
                                
                                <div class="col-md-12 booking-button">
                                    <input id="lg" type="submit" class="btn btn-block sent-butnn" value="Submit" name="su">
                                </div>
                                <br><br><span class="error">{{$d}} </span>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Add Place -->
@endsection