@extends('layouts.app')
@section('content')
    <section class="contact py-5">
            <div class="container py-lg-5 py-sm-4" id="container_add">
                <h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Add Subject </h2>
                <div class="add_subject">
                    <div class="col-lg-7 contact-left-form">
          <?php
                  /*          include '../back/admin.php';
                            require_once ('../back/subject.php');
                            $e="";
                            $p=new subject();
                            $r=new admin();
                            if(isset($_POST['su'])){
                            if(!$r->search_forsubject($_POST['sname'])){
                                $e="This subject name already exists";
                            }
                           else {
                            $p->subject_name=$_POST['sname'];
                            $p->subject_description=$_POST['dname'];
                            $r->addsubject($p);
                            $e="This subject added";
                            }
                            }
                   * 
                   */
          ?>
                        
                        <form action="addsubject" method="post" class="row">
                            {{csrf_field()}}
                            <div class="col-sm-12 form-group contact-forms">
                                <input type="text" class="form-control" placeholder="Subject Name" required=""name="sname">
                            </div>
                            
                            <div class="col-sm-12 form-group contact-forms">
                                <input type="text" class="form-control" placeholder="Subject Desciption" required="" name="dname">
                            </div>
                           
                            
                            <div class="col-md-12 booking-button">
                                <input id="lg"type="submit" class="btn btn-block sent-butnn"value="Submit"name="su">
                            </div>
                            <br><br>
                              <span class="error"> {{$d}}</span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- //Booking -->
    <!-- //Booking -->

@endsection