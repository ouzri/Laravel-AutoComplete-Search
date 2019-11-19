<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    </head>
    <body>
        <div class="container">
			<div class="row">
				<div class="col-12"><h2>Laravel AutoComplete Search Users Name</h2></div>
				<div class="col-12">
					<div id="custom-search-input">
						<div class="input-group">
							<input id="searchname" name="searchname" type="text" class="form-control" placeholder="search name" />
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
	<script type="text/javascript">
	//Script pour l autocomplaition de champ ville de naissance
    var route = "{{ url('autocomplete') }}";
    $('#searchname').typeahead({
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
            console.log(data);
                return process(data);
            });
        }
    });
	</script>
</html>
