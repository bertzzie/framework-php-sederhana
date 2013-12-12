<html>
    <head>
        <title>Framework Testing</title>

        <base href="http://localhost/framework/">
        <link rel="stylesheet" href="public/css/bootstrap.journal.min.css"/>
    </head>

    <body>
        <header class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Framework Sederhana</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Articles</a></li>
                                <li><a href="#">Editorials</a></li>
                                <li><a href="#">Features</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Reader's Digest</a></li>
                                <li><a href="#">Ask Me Anything</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>

        <div class="container">
            <?php require($content) ?>
        </div>

        <script type="text/javascript" src="public/js/jquery.min.js"></script>
        <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    </body>
</html>

