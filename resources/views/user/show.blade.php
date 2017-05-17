@extends("layouts.basic_with_graph")

@section("content")
<div class="row">

    <div class="col-lg-12 text-center">
        

        <div class="row">

            <h1>Welcome, <strong> {{ $user->name }}</strong>.</h1>

            <br>

            <canvas id="myChart" style="width: 846px; height: 423px;" width="846" height="423"></canvas>
	        <script>
	            var ctx = document.getElementById('myChart').getContext('2d');
	            var myChart = new Chart(ctx, {
	              type: 'bar',
	              data: {
	                labels: ["Leadership", 
	                "Problem-solving/Creativity",
	                "Team Work",
	                "Interpersonal Skills",
	                "Communication",
	                "Self-Awareness",
	                "Willingness to Learn",
	                "Initiative",
	                "Action Planning",
	                "Flexibility",
	                "Numeracy",
	                "Commitment"
	                ],
	                datasets: [{
	                  label: 'how much you use a skill',
	                  data: {{ "[" . implode(",", $overall_skill_score) . "]" }},
	                  backgroundColor: "rgba(153,255,51,0.4)"
	                }, {
	                  type: 'line',
	                  label: 'How much you like acitivities involving a specific skill',
	                  data: {{ "[" . implode(",", $overall_enjoyment_score) . "]" }},
	                  backgroundColor: "rgba(255,153,0,0.4)"
	                }]
	              }
	            });
	        </script>

	    </div>

    </div>

</div>
<!-- /.row -->
@endsection