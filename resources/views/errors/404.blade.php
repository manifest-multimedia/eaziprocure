
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Oops - 404 Error | Eazibusiness </title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{asset('neptune/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('neptune/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('neptune/plugins/pace/pace.css')}}" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="{{asset('neptune/css/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('neptune/css/custom.css')}}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('neptune/images/neptune.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('neptune/images/neptune.png')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-error align-content-stretch d-flex flex-wrap">
        <div class="app-error-info">
            <h5>Oops!</h5>
            <span>It seems that the resource you are looking for no longer exists.<br>
                We will try our best to fix this soon.</span>
            <a href="{{ URL::previous() }}" class="btn btn-dark">Go Back</a>
        </div>
        <div class="app-error-background"></div>
    </div>
    
    <!-- Javascripts -->
    <script src="{{asset('neptune/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('neptune/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('neptune/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('neptune/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('neptune/js/main.min.js')}}"></script>
    <script src="{{asset('neptune/js/custom.js')}}"></script>
</body>
</html>