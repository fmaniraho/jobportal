
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php
                $sql = "SELECT count(*) as 'APPL' FROM `tbljobregistration` WHERE `PENDINGAPPLICATION`=1";
                $mydb->setQuery($sql);
                $pending = $mydb->loadSingleResult();
              ?>
              <h3><?php echo $pending->APPL; ?></h3> 
              <p>Applicant(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php
                $sql = "SELECT count(*) as 'VAC' FROM `tbljob`";
                $mydb->setQuery($sql);
                $vacancy = $mydb->loadSingleResult();
              ?>
              <h3><?php echo $vacancy->VAC; ?></h3> 
              <p>Vacancies</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
           </div>
        </div>
        
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
        
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  