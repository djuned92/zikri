<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li>
        <a href="<?=base_url()?>admin/home">
          <i class="fa fa-home fa-fw"></i> <span>Home</span>
        </a>
      </li>
      <li>
        <a href="<?=base_url()?>admin/kelola_user">
          <i class="fa fa-user fa-fw"></i> <span>Kelola User</span>
        </a>
      </li>
      <li>
        <a href="<?=base_url()?>admin/kelola_berita">
          <i class="fa fa-newspaper-o fa-fw"></i> <span>Kelola Berita</span>
        </a>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Info Gunung</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/info_gunung/jalur_cibodas"><i class="fa fa-circle-o fa-fw"></i> Jalur Cibodas</a></li>
            <li><a href="<?=base_url()?>admin/info_gunung/jalur_putri"><i class="fa fa-circle-o fa-fw"></i> Jalur Putri</a></li>
            <li><a href="<?=base_url()?>admin/info_gunung/jalur_salabintana"><i class="fa fa-circle-o fa-fw"></i> Jalur Salabintana</a></li>
          </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->