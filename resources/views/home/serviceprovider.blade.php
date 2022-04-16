
@include('include.header')

<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title"><h2>Service Providers</h2></div>
                    <ol class="wt-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="wt-active">Service Providers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">

<section id="pricing-table" class="section-padding">
<div class="container">
<div class="row">
@if(count($providers) > 0)
@foreach($providers as $provider)
<div class="col-lg-4 col-md-6 col-xs-12" >
    <div class="table" style="height:450px;">

        {{-- @if($provider->service_count == $max_service_count)
        <br>
        <span> <a href="{{ url('/service-providers/fav/'.$provider->id) }}" style="color:	#DAA520;"> <i class="fas fa-crown"></i> MOST LIKED PROVIDER </a></span>
        @endif --}}
        <div class="icon">
           <img src="{{asset('uploads/serviceproviders/'.$provider->image )}}" style="width: 180px;height:180px;" alt="">
        </div>
    <div class="pricing-header">
        <h2>{{$provider->name}}</h2>
    </div>
    <div class="title">
        <h3> <span class="badge badge-primary"> {{$provider->category}} </span></h3>
    </div>
    @if($provider->available == 1)
     <span class="badge badge-success">Available</span>
    @else
    <span style="color:red;"> In Service</span>
    @endif
    <br>
    <ul class="description">
        {{$provider->description}}
    </ul>

        {{-- <button class="btn btn-common">Purchase</button> --}}
    </div>
</div>
@endforeach
@else
There are no service providers available at this time. Please visit again later.
@endif
</div>
</div>
</section>
</main>


@include('include.footer')
