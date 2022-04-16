@include('include.header')
<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title"><h2>Our Services</h2></div>
                    <ol class="wt-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="wt-active">Services <br>@if(!is_null($catname)) (Under <b> {{$catname}}</b> Category)</li> @endif</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
<div class="main-container section-padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
<aside>

{{-- <div class="widget_search">
<form role="search" id="search-form">
<input type="search" class="form-control " autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
</form>
</div> --}}

<div class="widget categories">
<h4 class="widget-title">All Categories &nbsp;&nbsp;&nbsp;
    <a href="{{ url('/categories/sort/ascending') }}" style="font-size: 15px;color:black;text-decoration: none;"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </a>&nbsp;
    <a href="{{ url('/categories/sort/descending') }}" style="font-size: 15px;color:black;text-decoration; text-decoration: none;"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></h4>
<ul class="categories-list">
    <li>
        <a href="{{url('/services')}}"> All Categories</a>

    </li>
    @if(count($categories)>0)
    @foreach($categories as $category)
    <li>
        <a href="{{url('/category/services/'.$category->id)}}">
            {{$category->name}}
        </a>
    </li>
    @endforeach
    @else
     There are no categories. Please visit again later.
    @endif





</ul>
</div>

</aside>
</div>
<br><br><br>
<div class="col-lg-9 col-md-12 col-xs-12 page-content">

<div class="adds-wrapper">
<div class="tab-content">
<div id="grid-view" class="tab-pane fade">
<div class="row">
    @foreach($services as $service)
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
    <div class="featured-box">
    <figure>
    <a href="{{ asset('uploads/services/'.$service->image)}}" target="_blank"><img class="img-fluid" src="{{ asset('uploads/services/'.$service->image)}}" style="width:500px;height:300px;" alt=""></a>
    </figure>
    <div class="feature-content"  style="width:397px;">
    <div class="product">

    </div>
    <h4><a href="">{{$service->name}}</a></h4>
    <p class="dsc"><b> Category</b>: {{$service->category}} <br>
                   <b> Duration of Service</b>: {{$service->service_time}} Day(s)<br>
                   <b> Description</b>: {{$service->description}}</p>
    <p class="dsc"><b>Other Information</b>: {!! $service->other_information !!}</p>
    <div class="listing-bottom">
    <h3 class="price float-left">Rs. {{$service->service_charge}}</h3>
    <a href="{{ url('customer/register/service/'.$service->id)}}" class="btn btn-primary float-right">Request Service</a>
    </div>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>

<div id="list-view" class="tab-pane fade active show">
<div class="row">
    @foreach($services as $service)
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    <div class="featured-box">
    <figure >

    <a href="{{ asset('uploads/services/'.$service->image)}}" target="_blank"><img class="img-fluid" src="{{ asset('uploads/services/'.$service->image)}}" style="width:600px;height:300px;" alt=""></a>
    </figure>
     <div class="feature-content"  style="width:397px;height:300px;">
        <div class="product">


        </div>
        <h4><a href="">{{$service->name}}</a></h4>
        <p class="dsc"><b> Category</b>: {{$service->category}} <br>
                       <b> Duration of Service</b>: {{$service->service_time}} Day(s)<br>
                       <b> Description</b>: {{$service->description}}</p>
        <p class="dsc"><b>Other Information</b>: {!! $service->other_information !!}</p>
        <div class="listing-bottom">
        <h3 class="price float-left">Rs. {{$service->service_charge}}</h3>
        <a href="{{ url('customer/register/service/'.$service->id)}}" class="btn btn-primary float-right">Request Service</a>
    </div>
    </div>
    </div>
    </div>
    <hr>
    @endforeach

</div>
</div>
</div>
</div>


<div class="pagination-bar">
{{-- <nav>
<ul class="pagination justify-content-center">
<li class="page-item"><a class="page-link active" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav> --}}
</div>

</div>
</div>
</div>
</div>
</main>
@include('include.footer')
