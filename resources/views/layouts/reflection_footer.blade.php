<!-- /.footer -->
<footer>
    <hr>
    <p>&copy; Meerar 2016</p>
    <p>
        <a href="#">Back to top</a>
    </p>

    <!-- jQuery -->
  	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<!-- JavaScript -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- CSS for datepicker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script>
  // jQuery for datepicker
  $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );

  //jQuery for slider
  $(function() {
    $( "#slider-5" ).slider({
      value:50,
      slide: function( event, ui ) {
        $( "#minval" ).val( ui.value );
      }  
    });
    $( "#minval" ).val( $( "#slider-5" ).slider( "value" ) );
  });

  //jQuery for slider


  @foreach($users_goals as $user_goal => $value)
    @if ( $value == "SELECTED" )
        $(function() {
            $( "#{{ $user_goal }}" ).slider({
                value:50,
                slide: function( event, ui ) {
                  $( "#{{ $user_goal }}_minval" ).val( ui.value );
                }  
            });
            $( "#{{ $user_goal }}_minval" ).val( $( "#{{ $user_goal }}" ).slider( "value" ) );
        });
    @endif
  @endforeach

  </script>

</footer>