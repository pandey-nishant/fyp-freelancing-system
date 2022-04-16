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
    <section id="google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
                </div>
            </div>
        </div>
    </section>
    </div>

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
    <li><span>Address : </span><p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45</p></li>
    <li><span>Email : </span><p><a href="#"><span class="__cf_email__" data-cfemail="c0b3b5b0b0afb2b480ada1a9aceea3afad">[email&#160;protected]</span></a></p></li>
    <li><span>Phone : </span><p>555 444 66647 & 555 444 66647</p></li>
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
