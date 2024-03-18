<html>

<head>
    <title>Back to life</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="./css/counts.css">
    <script src="./script/counts.js"></script>
    
</head>

<body>

    <div class="hero">
        <div class="title">
            <h1> <u>PEOPLES CHOICE</u></h1>
            
        </div>

        <div class="row">
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-address-book"></i>
                    <h2 class="counter">215</h2>
                    <h4>PEOPLES ARRIVED</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-bell"></i>
                    <h2 class="counter">101</h2>
                    <h4>PEOPLE USING</h4>
                </div>
            </div>
           
            <div class="col">
                <div class="counter-box">
                    <i class="fa fa-bullhorn"></i>
                    <h2 class="counter">70</h2>
                    <h4>PEOPLE GETS CURED</h4>
                </div>
            </div>
        </div>

    </div>




    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });

    </script>


</body>

</html>
