<!-- Navigation -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Student Circle</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=site_url('welcome')?>">Home</a>
                    </li>
                    <li>
                        <a href="<?=site_url('profile')?>">Profile</a>
                    </li>
                    <li>
                        <a href="<?=site_url('mycircles')?>">Circles</a>
                    </li>
                    <li>
                        <a href="<?=site_url('createcircle')?>">Create Circles</a>
                    </li>
                     <li>
                        <a href="<?=site_url('menu')?>">Mess Menu</a>
                    </li>
                    <li>
                        <a href="<?=site_url('MessInout')?>">Mess In/Out</a>
                    </li>
                    <li>
                        <a href="<?=site_url('Voting')?>">Mess Voting</a>
                    </li>
                    <li>
                        <a href="<?=site_url('NewsLetter')?>">News Letter</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                     <li><a href="<?=site_url('welcome/logout')?>">LogOut</a></li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
