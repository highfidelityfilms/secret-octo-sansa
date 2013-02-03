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
    <div class="row">

        <h2>Welcome to employee details page</h2>
        <div class="span9">
            <p>You can change for employee using details. </p>
            <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    Action
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- dropdown menu links -->
                </ul>
            </div>
            <span class="label label-important">Important</span>

            </br></br>
            <div id="result" class="row"></div>
            <br/><br/>

        </div>
    </div>


    <div >
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1<img data-src="holder.js/300x200" src="http://www.filmofilia.com/wp-content/uploads/2012/09/Hitchcock-Poster.jpg" alt=""></td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>


    <ul class="thumbnails">
        <li class="span4">
            <a href="#" class="thumbnail">
                <img data-src="holder.js/300x200" src="http://www.filmofilia.com/wp-content/uploads/2012/09/Hitchcock-Poster.jpg" class="img-rounded" alt="">
            </a>
        </li>
        <li class="span4">
            <a href="#" class="thumbnail">
                <img data-src="holder.js/300x200" src="http://www.filmofilia.com/wp-content/uploads/2012/09/Hitchcock-Poster.jpg"
                     alt="">
            </a>
        </li>
        <li class="span4">
            <a href="#" class="thumbnail">
                <img data-src="holder.js/300x200" src="http://www.filmofilia.com/wp-content/uploads/2012/09/Hitchcock-Poster.jpg" alt="">
            </a>
        </li>
    </ul>

    <br/>

    <ul class="thumbnails">
        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" src="http://www.filmofilia.com/wp-content/uploads/2012/09/Hitchcock-Poster.jpg" alt="">
                <h3>Thumbnail label</h3>
                <p>Thumbnail caption...</p>
            </div>
        </li>

    </ul>
</div>

<div class="bs-docs-example">
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDUlEQVR4Xu2Yz6/BQBDHpxoEcfTjVBVx4yjEv+/EQdwa14pTE04OBO+92WSavqoXOuFp+u1JY3d29rvfmQ9r7Xa7L8rxY0EAOAAlgB6Q4x5IaIKgACgACoACoECOFQAGgUFgEBgEBnMMAfwZAgaBQWAQGAQGgcEcK6DG4Pl8ptlsRpfLxcjYarVoOBz+knSz2dB6vU78Lkn7V8S8d8YqAa7XK83ncyoUCjQej2m5XNIPVmkwGFC73TZrypjD4fCQAK+I+ZfBVQLwZlerFXU6Her1eonreJ5HQRAQn2qj0TDukHm1Ws0Ix2O2260RrlQqpYqZtopVAoi1y+UyHY9Hk0O32w3FkI06jkO+74cC8Dh2y36/p8lkQovFgqrVqhFDEzONCCoB5OSk7qMl0Gw2w/Lo9/vmVMUBnGi0zi3Loul0SpVKJXRDmphvF0BOS049+n46nW5sHRVAXMAuiTZObcxnRVA5IN4DJHnXdU3dc+OLP/V63Vhd5haLRVM+0jg1MZ/dPI9XCZDUsbmuxc6SkGxKHCDzGJ2j0cj0A/7Mwti2fUOWR2Km2bxagHgt83sUgfcEkN4RLx0phfjvgEdi/psAaRf+lHmqEviUTWjygAC4EcKNEG6EcCOk6aJZnwsKgAKgACgACmS9k2vyBwVAAVAAFAAFNF0063NBAVAAFAAFQIGsd3JN/qBA3inwDTUHcp+19ttaAAAAAElFTkSuQmCC"/>
        </a>
        <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div>
    <div class="media">
        <a class="pull-left" href="#">
            <div class="media-body">
            </div>
    </div>

    <form class="login-form">
        <ul class="fields-list">
            <li>
                <i class="icon-envelope-alt" style="float: left;"></i>
                <input autocomplete="off" id="email" name="email" placeholder="email" type="text">
            </li>
            <li>
                <i class="icon-user" style="float: left;"></i>
                <input autocomplete="off" id="first-name" name="first-name" placeholder="first-name" type="text">
            </li>
            <li>
                <i class="icon-user" style="float: left;"></i>
                <input autocomplete="off" id="last-name" name="last-name" placeholder="last-name" type="text">
            </li>
            <li>
                <i class="icon-key"></i>
                <input autocomplete="off" id="password" name="password" placeholder="password" type="password">
            </li>
            <li>
                <i class="icon-key"></i>
                <input autocomplete="off" id="password-confirmation" name="password-confirmation" placeholder="confirm password" type="password">
            </li>
        </ul>

        <div class="actions clearfix">
            <a href="../dashboard.html" class="btn btn-large medium-blue login-btn">
                Register
            </a>
        </div>

        <hr class="main">

        <div class="social-actions">
            <a href="#" rel="tooltip" data-placement="top" data-original-title="Twitter Login" class="social-link text-transparent"><i class="icon-twitter"></i></a>
            <a href="#" rel="tooltip" data-placement="top" data-original-title="Facebook Login" class="social-link text-transparent"><i class="icon-facebook"></i></a>
        </div>
    </form>

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

                mydata += "<tr><td>"+movie.title +'</td> <td>'+'<img src="' +  movie.posters.thumbnail+'" /> </td> <td>'
                        +'<a href="add_films/load_film?film_id='+movie.id+'"><button type="button" class="btn btn-success">Add me</button></a>'
                        +'</td></tr>'+ "<br/>" ;

            });
            mydata +='</tbody></table>';

            //displaying mydata on div with id result

            $('#result').html(mydata);
        }
    </script>

</body>
</html>