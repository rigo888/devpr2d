<?php $sitever = $app->selectNewestVersion(); ?>
<footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-secondary" style="float: right;"><i class="fa fa-info-circle"></i><?php echo $sitever['version']; ?></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <?php if(isset($_SESSION['userid']) && ($user->role) == 'admin'){ ?>
                <a href="adminpanel/index.php" class="btn btn-outline-secondary"><i class="fa fa-key"></i>  Admin Panel</a>
                <?php } else if(isset($_SESSION['userid']) && ($user->role) == 'basic'){ ?>
                <a class="btn btn-outline-secondary" href="#"><i class="fa fa-lock"></i>In progress</a>
                <?php } ?>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-secondary" href="http://ra1g.eu/" style="float: right;"><i class="fa fa-copyright"></i>2020 ra1g.eu</a>
            </form>
        </div>
    </nav>
</footer>