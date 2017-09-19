  <div class="wrapper" id="wrapper">
    <div class="left-container" id="left-container">
      <!-- begin SIDE NAV USER PANEL -->
      <div class="left-sidebar" id="show-nav">
        <ul id="side" class="side-nav">
          <li class="panel">
            <a id="panel1" href="javascript:;" data-toggle="collapse" data-target="#Dashboard"> <i class="fa fa-dashboard"></i> Staff
              <i class="fa fa-chevron-left pull-right" id="arow1"></i> </a>
            <ul class="collapse nav" id="Dashboard">
              <li> <a href="stafflist"><i class="fa fa-angle-double-right"></i> Staff list</a> </li>
              <li> <a href="salarylist"><i class="fa fa-angle-double-right"></i> Staff salary</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel2" href="javascript:;" data-toggle="collapse" data-target="#charts"> <i class="fa fa-bar-chart-o"></i> Project
              <i class="fa fa-chevron-left pull-right" id="arow2"></i> </a>
            <ul class="collapse nav" id="charts">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Project list</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel3" href="javascript:;" data-toggle="collapse" data-target="#calendar"> <i class="fa fa-calendar"></i> Money in & out
              <i class="fa fa-chevron-left pull-right" id="arow3"></i> </a>
            <ul class="collapse nav" id="calendar">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> invoices in</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> invoices out</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel4" href="javascript:;" data-toggle="collapse" data-target="#clipboard"> <i class="fa fa-clipboard"></i> statistic
              <i class="fa fa fa-chevron-left pull-right" id="arow4"></i> </a>
            <ul class="collapse nav" id="clipboard">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> EXPENSES</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> EXPENSES Detail</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> EXPENSES Detail</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel5" href="javascript:;" data-toggle="collapse" data-target="#edit"> <i class="fa fa-edit"></i> edit
              <i class="fa fa fa-chevron-left pull-right" id="arow5"></i>
            </a>
            <ul class="collapse nav" id="edit">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel6" href="javascript:;" data-toggle="collapse" data-target="#inbox"> <i class="fa fa-inbox"></i> inbox
              <span class="label label-primary">new msz</span> <i class="fa fa fa-chevron-left pull-right" id="arow6"></i> </a>
            <ul class="collapse nav" id="inbox">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel7" href="javascript:;" data-toggle="collapse" data-target="#cogs"> <i class="fa fa-cogs"></i> cogs
              <span class="label label-warning">Warning</span> <i class="fa fa fa-chevron-left pull-right" id="arow7"></i> </a>
            <ul class="collapse nav" id="cogs">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
            </ul>
          </li>



        </ul>
      </div>
      <!-- END SIDE NAV USER PANEL -->
    </div>
    <div class="right-container" id="right-container">
        <div class="container-fluid">
			<?php $this->load->view($tempcon,$this->data) ?>
		</div>
  </div>
  </div>