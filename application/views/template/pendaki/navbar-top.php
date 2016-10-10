<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="<?=base_url()?>calon_pendaki/home" class="navbar-brand">Gunung Gede Pangrango</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?=base_url()?>calon_pendaki/info_gunung">Boking</a></li>
          <li><a href="<?=base_url()?>calon_pendaki/grup">Grup</a></li>
          <li><a href="<?=base_url()?>calon_pendaki/pembayaran">Pembayaran</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('username')?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="<?=base_url()?>auth/users/logout">Sign out</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">   
          <!-- User Account Menu -->
          <!-- <li class="dropdown user user-menu"> -->
            <!-- Menu Toggle Button -->
            
            <!-- <a href="#" class="pull-right"> -->
              <!-- The user image in the navbar-->
              <!-- <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <!-- <span class="hidden-xs">Alexander Pierce</span> 
            </a> -->

            <!-- <ul class="dropdown-menu"> -->
              <!-- The user image in the menu -->
              <!-- <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li> -->
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <!-- <li class="user-footer"> -->
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <!-- <div class="pull-right">
                  <a href="<?=base_url()?>auth/users/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul> -->
          <!-- </li> -->
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>