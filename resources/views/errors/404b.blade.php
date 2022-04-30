<x-errorpages-header title="404 Not Found - Resource Unavailable" /> 

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="p-v-30">
                <h1 class="font-weight-semibold display-1 text-primary lh-1-2">404</h1>
                <h2 class="font-weight-light font-size-30">Brrrr! We couldn't find the resource you're looking for!</h2>
                <p class="lead m-b-30">Reasion: <strong> Resource Missing</strong></p>
                <a href="{{ URL::previous() }}" class="btn btn-primary btn-tone">Go Back</a>
            </div>
        </div>
        <div class="col-md-6 m-l-auto">
            <img class="img-fluid" src="{{asset('images/others/404.png')}}" alt="">
        </div>
    </div>
</div>

<x-footer /> 

