@include('include.header')

<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title"><h2>Most Liked Service Personnels</h2></div>
                    <ol class="wt-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="wt-active">Favorites</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">


<div class="section-padding">
<div class="container">
    <h4 class="widget-title">Services Offered by Service Provider</h4>
<div class="product-info row">
    @if(count($services)>0)
    @foreach($services as $service)
    <div class="col-lg-8 col-md-12 col-xs-12">

    <div class="details-box">
        <div class="product-img">
         <center>   <img class="img-fluid" src="{{ asset('uploads/services/'.$service->image)}}" alt="" style="height:200px;width:300px;"></center>
            </div>
    <div class="ads-details-info">
    <h2>{{ $service->name }}</h2>
    <p class="mb-4">Description: {{$service->description}} <br>
    Other Information: {!! $service->other_information !!}</p>
    </div>
    </div>
    @endforeach
    @else
    There has been some error. Please try again later.
    @endif
</div>
<div class="col-lg-4 col-md-6 col-xs-12">

<aside class="details-sidebar">
<div class="widget">
<h4 class="widget-title">Service Provider Details</h4>
<div class="agent-inner">
<div class="agent-title">
<div class="agent-photo">
<a href="#"><img src="{{asset('uploads/serviceproviders/'.$data->image )}}" alt="" style="height:70px;"></a>
</div>
<div class="agent-details">
<h3><a href="#">{{$data->name}}</a></h3>
</div>
</div>

<p>{{$data->description}}</p>
<p> <b> Services Count: </b>  {{$data->service_count}}</p>
<span style="color:	#DAA520;"> <i class="fas fa-crown"></i> MOST LIKED PROVIDER </span>

</div>
</div>

</aside>

</div>
</div>

</div>
</div>


<section class="subscribes section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="subscribes-inner">
<div class="icon">
<i class="lni-pointer"></i>
</div>
<div class="sub-text">
<h3>Subscribe to Newsletter</h3>
<p>and receive new ads in inbox</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<form>
<div class="subscribe">
<input class="form-control" name="EMAIL" placeholder="Enter your Email" required="" type="email">
<button class="btn btn-common" type="submit">Subscribe</button>
</div>
</form>
</div>
</div>
</div>
</section>
</main>
@include('include.footer')
