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



<form class="form-horizontal">
    <fieldset>
        <div id="legend" class="">
            <legend class="">Add New Film</legend>
        </div>

        <div class="control-group">
            <label class="control-label">Add big poster</label>

            <!-- File Upload -->
            <div class="controls">
                <input class="input-file" id="bigPoster" type="file">
            </div>
        </div><div class="control-group">
        <label class="control-label">Add Small Poster</label>

        <!-- File Upload -->
        <div class="controls">
            <input class="input-file" id="smallPoster" type="file">
        </div>
    </div>

        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="id">ID</label>
            <div class="controls">
                <input type="text" placeholder="placeholder" class="input-xlarge">
                <p class="help-block">This is unique unique database id</p>
            </div>
        </div>

        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="title">Titile</label>
            <div class="controls">
                <input type="text" placeholder="placeholder" class="input-xlarge">
                <p class="help-block">Supporting help text</p>
            </div>
        </div>

        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="tomatoId">Tomato ID</label>
            <div class="controls">
                <input type="text" placeholder="placeholder" class="input-xlarge">
                <p class="help-block">Supporting help text</p>
            </div>
        </div><div class="control-group">

        <!-- Text input-->
        <label class="control-label" for="year">Year</label>
        <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
            <p class="help-block">Supporting help text</p>
        </div>
    </div><div class="control-group">

        <!-- Text input-->
        <label class="control-label" for="input01">Runtime</label>
        <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
            <p class="help-block">Supporting help text</p>
        </div>
    </div><div class="control-group">

        <!-- Text input-->
        <label class="control-label" for="input01">Critics rating</label>
        <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
            <p class="help-block">Supporting help text</p>
        </div>
    </div><div class="control-group">

        <!-- Text input-->
        <label class="control-label" for="input01">Text input</label>
        <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
            <p class="help-block">Supporting help text</p>
        </div>
    </div><div class="control-group">

        <!-- Text input-->
        <label class="control-label" for="input01">Text input</label>
        <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
            <p class="help-block">Supporting help text</p>
        </div>
    </div><div class="control-group">

        <!-- Text input-->
        <label class="control-label" for="input01">Text input</label>
        <div class="controls">
            <input type="text" placeholder="placeholder" class="input-xlarge">
            <p class="help-block">Supporting help text</p>
        </div>
    </div><div class="control-group">

        <!-- Textarea -->
        <label class="control-label">Textarea</label>
        <div class="controls">
            <div class="textarea">
                <textarea type="" class=""> </textarea>
            </div>
        </div>
    </div><div class="control-group">
        <!-- Form Actions -->
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn">Cancel</button>
        </div>
    </div>





    </fieldset>
</form>

</div>










</body>
</html>