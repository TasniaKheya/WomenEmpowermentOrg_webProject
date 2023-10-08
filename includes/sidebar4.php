<?php
  $name='ABC'; ?>
 
 
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/allahbachao/dist/img/img-ad.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="<?php if($page=='dashboard4') { echo 'active'; }?>">
          <a href="dashboard4.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li class="<?php if($page=='taker') { echo 'active'; }?>">
          <a href="loan-taker.php">
            <i class="fa fa-building-o"></i> <span>Manage Taker</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="<?php if($page=='collector') { echo 'active'; }?>">
          <a href="loan-collector.php">
            <i class="fa fa-building-o"></i> <span>Manage Collector</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="<?php if($page=='provider') { echo 'active'; }?>">
          <a href="loan-provider.php">
            <i class="fa fa-building-o"></i> <span>Manage Provider</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>