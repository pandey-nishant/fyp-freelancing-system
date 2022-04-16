@include('include.header')
<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title"><h2>Hear What Clients Say about us!</h2></div>
                    <ol class="wt-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="wt-active">Testimonials</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
<section class="testimonial section-padding">
    <div class="container">


        <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            @foreach($testimonials as $testimonial)
            <div class="item">
                <div class="img-thumb">
                    <img src="{{ asset('uploads') }}/testimonials/{{$testimonial->image}}" alt="{{$testimonial->image}}" style="width:100px;height:100px;">
                </div>
                <div class="testimonial-item">
                    <div class="content">
                        <p class="description">{{$testimonial->text}}</p>
                        <div class="info-text">
                            <h2><a href="#">{{$testimonial->name}}</a></h2>
                            <h4><a href="#">Service Name: {{$testimonial->service_name}}</a></h4>
                            <h4><a href="#">{{$testimonial->position}}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        {{-- @else
        There are no Reviews and Feedbacks available at the moment. Please check in later.
        @endif --}}
    </div>
    </div>
    </section>
</main>
@include('include.footer')
