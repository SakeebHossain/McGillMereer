<!DOCTYPE html>
<html lang="en">

<head>
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
