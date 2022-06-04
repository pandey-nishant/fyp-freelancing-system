@include('include.header')

<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title"><h2>Contact Us</h2></div>
                    <ol class="wt-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="wt-active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">

<div class="row">

    
    <div class="col-md-6">
    <section id="content" class="section-padding">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-8 col-xs-12">

    <form id="contactForm" class="contact-form" data-toggle="validator">
    <h2 class="contact-title">
    Write Your Queries to Us
    </h2>

    <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Please enter your email">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
    <input type="text" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your subject">
    <div class="help-block with-errors"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <textarea class="form-control" placeholder="Massage" rows="7" data-error="Write your message" required></textarea>
    <div class="help-block with-errors"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <button type="submit" id="submit" class="btn btn-primary">Submit Now</button>
    <div id="msgSubmit" class="h3 text-center hidden"></div>
    <div class="clearfix"></div>
    </div>
    </div>
    </form>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
    <div class="information mb-4">
    <h3>Address</h3>
    <div class="contact-datails">
    <p>Kamalpokhari, Kathmandu, Nepal</p>
    </div>
    </div>
    <div class="information">
    <h3>Contact Info</h3>
    <div class="contact-datails">
    <ul class="list-unstyled info">
    <li><span> Email Address : </span><p> Freelancerservice@gmail.com</p></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
</div>
</div>
</main>
@include('include.footer')
