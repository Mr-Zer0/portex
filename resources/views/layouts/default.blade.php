<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PORTAL</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>

    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">Portal</a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a href="#"><i class="material-icons">supervisor_account</i></a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">business_center</i></a>
                </li>
                <li>
                    <a href="#"><i class="material-icons">settings</i></a>
                </li>
            </ul>
        </div> {{-- end of wrapper --}}
    </nav>

    <div class="section">
        <div class="container">
            @yield('content')
        </div> {{-- end of container --}}
    </div> {{-- end of section --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</body>
</html>
