<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- MetisMenu CSS -->
{{--    <link href='{{asset("css/metisMenu.min.css")}}' rel="stylesheet">--}}

    <!-- Timeline CSS -->
{{--    <link href='{{asset("css/timeline.css" )}}'rel="stylesheet">--}}

    <!-- Custom CSS -->
    <link href='{{asset("css/startmin.css")}}' rel="stylesheet">

    <!-- Morris Charts CSS -->
{{--    <link href='{{asset("css/morris.css")}}' rel="stylesheet">--}}

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



</head>
<body>
@yield("content")
<!-- jQuery -->
<script src='{{asset("js/jquery.js")}}'></script>

<!-- Bootstrap Core JavaScript -->
<script src='{{asset("js/bootstrap.js")}}'></script>

<!-- Metis Menu Plugin JavaScript -->
<script src='{{asset("js/metisMenu.min.js")}}'></script>

<!-- Custom Theme JavaScript -->
<script src='{{asset("js/startmin.js")}}'></script>

</body>
</html>
