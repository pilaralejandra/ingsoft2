 <nav class="navbar navbar-inverse navbar-fixed-top col-sm-6 offset-sm-6">

        <div class="container-fluid">

          <div class="navbar-header">
            <ul class="nav pull-right">
                <li><a><i class="fas fa-user"></i> Bienvenido:<strong> <?php echo $_SESSION['SESSION_USUARIO'];?></strong></a></li>
			           <li><a> <i class="fa fa-calendar fa-x5"></i>
    								<?php
    								$Today = date('Y-m-d');
    								$new = date('l, F d, Y', strtotime($Today));
    								echo $new;
    								?>

				        </a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </nav>
