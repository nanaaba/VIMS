<?php $__env->startSection('content'); ?>



     <div class="be-content">
        <div class="page-head">
          <h2>Chart.js</h2>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Chart.js</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Line Chart</span><span class="panel-subtitle">This is a line chart created with Chart.js</span>
                </div>
                <div class="panel-body">
                  <canvas id="line-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Bar Chart</span><span class="panel-subtitle">This is a bar chart created with Chart.js</span>
                </div>
                <div class="panel-body">
                  <canvas id="bar-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Radar Chart</span><span class="panel-subtitle">This is a radar chart created with Chart.js</span>
                </div>
                <div class="panel-body">
                  <canvas id="radar-chart" height="200"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Polar Chart</span><span class="panel-subtitle">This is a polar area chart created with Chart.js</span>
                </div>
                <div class="panel-body">
                  <canvas id="polar-chart" height="200"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Pie Chart</span><span class="panel-subtitle">This is a pie chart created with Chart.js</span>
                </div>
                <div class="panel-body">
                  <canvas id="pie-chart" height="180"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-divider">
                  <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span class="icon mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span></div><span class="title">Doughnut Chart</span><span class="panel-subtitle">This is a oughnut area chart created with Chart.js</span>
                </div>
                <div class="panel-body">
                  <canvas id="donut-chart" height="180"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>