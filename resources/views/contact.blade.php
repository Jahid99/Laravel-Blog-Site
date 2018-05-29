@extends('layouts.master')

    @section('content')


        <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
               
                <div class="col-lg-5 col-lg-offset-2">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>
            

                        <form action="{{ url('contact') }}" method="POST">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group form-group-fullname">
                                    <label class="control-label" for="fullname">NAME *</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">E-MAIL *</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail" required>
                                </div>
                                <div class="form-group">
                                    <label name="subject">SUBJECT *</label>
                                    <input id="subject" name="subject" class="form-control" placeholder="Enter Your Subject" required>
                                </div>
                                <div class="form-group form-group-message">
                                    <label class="control-label" for="message">MESSAGE *</label>
                                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter Your Message"  required></textarea>
                                </div>           
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>


                    </div> 
                </div>
            </div>
        </div>    <br>
            
    <!--End Main Container -->

@endsection
