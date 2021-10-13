<x-errorpages-header title="403 Forbidden - Unauthorized Action" /> 

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="p-v-30">
                <h1 class="font-weight-semibold display-1 text-primary lh-1-2">403</h1>
                <h2 class="font-weight-light font-size-30">Whoops! Looks like you got lost</h2>
                <p class="lead m-b-30">Reasion: <strong> {{ $exception->getMessage() }}</strong></p>
                <a href="{{ URL::previous() }}" class="btn btn-primary btn-tone">Go Back</a>
            </div>
        </div>
        <div class="col-md-6 m-l-auto">
            <img class="img-fluid" src="{{asset('images/others/403.png')}}" alt="">
        </div>
    </div>
</div>

<x-footer /> 

