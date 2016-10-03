<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <title>Live search</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/search.js"></script>

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">

  </head>
  <body>

    <div class="container">

      <div class="row" style="margin-top: 23%;">

        <div class="col-md-6 col-md-offset-3">

          <div class="form-group">

            <h2 class="text-center cheese-logo">
              <span style="color: #4885ed;">C</span>
              <span style="color: #db3236;">h</span>
              <span style="color: #f4c20d;">e</span>
              <span style="color: #4885ed;">e</span>
              <span style="color: #3cba54;">s</span>
              <span style="color: #db3236;">e</span>
            </h2>

            <input type="text" class="form-control input" placeholder="Search..." id="search-input" autocomplete="off">

            <div class="search-dropdown" id="suggestions-container">
              <div class="search-dropdown-scroll-container">
                <div id="loader"></div>
                <ul id="suggestions">
                  <li class="not-selectable">Type to search</li>
                </ul>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>

  </body>
</html>
