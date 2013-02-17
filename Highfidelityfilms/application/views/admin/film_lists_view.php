<html>
<head>
    <script language="javascript" src="/js/jquery-1.8.3.min.js"></script>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script language="javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        p, li, h2, h3, h4 { font-family: 'Average Sans', sans-serif';'}
        p, li { font-size: 18px; }
        li { padding-bottom: 5px; }
    </style>

</head>
<body>

<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="navbar-inner">
            <div class="container" style="width: auto;">
                <a class="brand" href="#">Admin Area</a>
                <ul class="nav" role="navigation">
                    <li class="dropdown open">
                        <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Add Films <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li><a tabindex="-1" href="http://google.com">Upcoming Films</a></li>
                            <li><a tabindex="-1" href="#anotherAction">Top Rentals</a></li>
                            <li><a tabindex="-1" href="#">Current Releases</a></li>
                            <li><a tabindex="-1" href="#">New Releases</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="#">Manually Add Films</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Collections <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                            <li><a tabindex="-1" href="#">Manage Collections</a></li>
                            <li><a tabindex="-1" href="#">Front Page Collections</a></li>
                            <li><a tabindex="-1" href="#">New Collection</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                            <li><a tabindex="-1" href="#">Customers</a></li>
                            <li><a tabindex="-1" href="#">Admin User</a></li>
                            <li><a tabindex="-1" href="#">Add New Admin User</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="#">Statistics</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="drop4" role="button" class="dropdown-toggle" data-toggle="dropdown">Articles <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                            <li><a tabindex="-1" href="#">Manage Articles</a></li>
                            <li><a tabindex="-1" href="#">New Article</a></li>
                            <li><a tabindex="-1" href="#">Categories</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="#">Statistics</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav pull-right">
                    <ul class="nav">
                        <li class="active"><a href="/w1311009">Login</a></li>

                        <form class="navbar-search pull-right" action=""><i class="icon-search"></i>
                            <input type="text" class="search-query span3" placeholder="Enter film title" style="height: auto;">
                        </form>
                    </ul>

            </div>
        </div>
    </div>

</div>
</div>

<div class="container" style="padding-bottom: 10px">
    <div class="span8">

        <h2>Welcome to admin  page</h2>

            <div id="result" class="row"></div>
            <br/><br/>

        </div>
    </div>


    <script>
        var apikey = "bv9capwcq5xhkwhwpae228tz";
        var baseUrl = "http://api.rottentomatoes.com/api/public/v1.0";

        // construct the uri with our apikey
        var moviesSearchUrl = baseUrl + '/movies.json?apikey=' + apikey;
        var query = "Toy story";

        $(document).ready(function() {

            // send off the query
            $.ajax({
                url: moviesSearchUrl + '&q=' + encodeURI(query),
                dataType: "jsonp",
                success: searchCallback
            });
        });

        // callback for when we get back the results
        function searchCallback(data) {
            $(document.body).append('Found ' + data.total + ' results for ' + query);
            var movies = data.movies;
            var mydata = '<table class="table table-striped"><tbody>';
            $.each(movies, function(index, movie) {
                // $(document.body).append('<h1>' + movie.title + '</h1>');
                // $(document.body).append('<img src="' + movie.posters.thumbnail + '" />');

                mydata += '<tr> <td> <img src="' +  movie.posters.thumbnail+'" /> </td> '+"<td>"+movie.title +'</td> '+"<td>"+movie.year +'</td> '
                        +'<td> <a href="add_films/load_film?film_id='+movie.id+'"><button type="button" class="btn btn-success">Add me</button></a>'
                        +'</td></tr>'+ "<br/>" ;

            });
            mydata +='</tbody></table>';

            //displaying mydata on div with id result

            $('#result').html(mydata);
        }
    </script>

</body>
</html>