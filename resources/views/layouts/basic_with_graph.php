<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    @include("layouts.head", array('page_title' => "Welcome"))
</head>

<body>

    @include("layouts.navbar")

    <!-- Page Content -->
    <div class="container">

        @yield("content")

        <!-- /.row -->

        @include("layouts.footer")

    </div>
    <!-- /.container -->

</body>

</html>
