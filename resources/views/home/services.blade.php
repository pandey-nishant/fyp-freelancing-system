@include('include.header')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Merriweather&family=Muli&display=swap");
:root {
   --ff-head: "Merriweather", serif;
   --ff-body: "Muli", sans-serif;
   --fs-body: 1.8rem;
   --fs-h2: 4rem;
   --fs-h4: 2.4rem;
   --fs-h5: 1.8rem;
   --clr-head: hsla(208, 11%, 15%, 1);
   --clr-body: hsla(208, 9%, 31%, 0.8);
   --clr-accent: hsla(216, 97%, 61%, 1);

   box-sizing: border-box;
}
*,
*::before,
*::after {
   margin: 0;
   padding: 0;
   box-sizing: inherit;
}
html,
body {
   width: 100%;
   min-height: 100vh;
   font-size: 62.5%;
}
body {
   font-family: var(--ff-body);
   font-size: var(--fs-body);
   color: var(--clr-body);
   line-height: 1.8;
   font-weight: normal;
}

img {
   max-width: 100%;
   height: auto;
}
.main {
   padding: 1em 0;
}
.container {
   margin: 0 auto;
}

.inner__sub {
   --fs-h5: 1.5rem;
   font-size: var(--fs-h5);
   color: var(--clr-head);
   margin-bottom: 1em;
}

.inner__head {
   --fs-h2: 3rem;
   font-size: var(--fs-h2);
   font-family: var(--ff-head);
   color: var(--clr-head);
   line-height: 1.4;
   margin-bottom: 1em;
}

.inner__content {
   margin-bottom: 3em;
}

.inner__clr {
   color: hsla(216, 97%, 61%, 1);
}

.inner__text {
   text-align: left;
}

/*====== cards style ==========*/

.cards-grid {
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
   grid-gap: 4em 2rem;
}

.card {
   border-radius: 6px;
   box-shadow: 0 20px 40px 0 rgba(173, 181, 189, 0.1);
   border: solid 1px rgba(129, 147, 174, 0.12);
   background-color: #fff;
   padding: 2.5em;
   text-align: center;
   position: relative;
}

.card:first-child::before {
   content: "";
   position: absolute;
   /* background-color: #ffd25f; */
   top: -8px;
   left: -1px;
   width: calc(100% + 2px);
   height: 8px;
   border-radius: 6px 6px 0 0;
}

.card:nth-child(2)::before {
   content: "";
   position: absolute;
   /* background-color: #63a2ff; */
   top: -8px;
   left: -1px;
   width: calc(100% + 2px);
   height: 8px;
   border-radius: 6px 6px 0 0;
}

.card:last-child::before {
   content: "";
   position: absolute;
   /* background-color: #5ed291; */
   top: -8px;
   left: -1px;
   width: calc(100% + 2px);
   height: 8px;
   border-radius: 6px 6px 0 0;
}

.card__body {
   padding-top: 1em;
}

.card__head {
   --fs-h4: 2rem;
   font-size: var(--fs-h4);
   margin-bottom: 1em;
   color: var(--clr-head);
}

.card__content {
   --fs-body: 1.6rem;
   font-size: var(--fs-body);
}

@media (min-width: 750px) {
   .inner {
      padding: 1em 0;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      width: 100%;
   }

   .inner__sub {
      --fs-h5: 1.8rem;
      font-size: var(--fs-h5);
   }
   .inner__headings {
      flex: 1 0 30%;
   }
   .inner__content {
      flex: 1 0 50%;
      align-self: center;
      margin-left: 2rem;
   }
   .inner__sub {
      margin-bottom: 0;
   }
   .inner__head {
      --fs-h2: 4rem;
   }
}

</style>
<div class="wt-haslayout wt-innerbannerholder">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                <div class="wt-innerbannercontent">
                    <div class="wt-title"><h2>Our Services</h2></div>
                    <ol class="wt-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="wt-active">Services <br> <br> <br>@if(!is_null($catname))  {{$catname}}  Category</li> @endif</li>
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


<div class="widget categories">
<h4 class="widget-title"> All Categories &nbsp;&nbsp;&nbsp;


    

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

<main class="main">
   <div class="container">
      <div class="cards-grid">
      @foreach($services as $service)
         <div class="card">
            <img class="card__icon" src="{{ asset('uploads/services/'.$service->image)}}" style="width:500px;"  alt="ux-design">
            <div class="card__body">
               <h4 class="card__head">{{$service->name}}</h4>
               <p class="card__content">
               <!-- <b> Category</b>: {{$service->category}} <br> -->
                       <!-- <b> Duration of Service</b>: {{$service->service_time}} Day(s)<br> -->
                       <b> </b> {{$service->description}}

                       <!-- <b>Other Information</b>: {!! $service->other_information !!} -->
                       <h3 class="price float-left">Rs. {{$service->service_charge}}</h3>
        <a href="{{ url('customer/register/service/'.$service->id)}}" class="btn btn-primary float-right">Request Service</a>
               </p>
            </div>
         </div>
         @endforeach
         
         
      </div>
   </div>
</main>

</div>
</div>
</div>
</div>
</main>
@include('include.footer')
