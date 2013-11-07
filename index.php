<?php
include('include/bootstrap.inc');

include('include/header.inc');
?>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php print $config->site('home_btn_txt'); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><?php print $config->site('welcome_nav_txt'); ?></a></li>
            <li><a href="#about"><?php print $config->site('game_1_nav_txt'); ?></a></li>
            <li><a href="#contact"><?php print $config->site('game_2_nav_txt'); ?></a></li>
            <li><a href="#contact"><?php print $config->site('game_3_nav_txt'); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
          <h1><?php print _jumbo_title; ?></h1>
        <p><?php print _jumbo_text; ?></p>
      </div>

      <div class="row">
        <div class="col-sm-4">          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php print _panel1_title; ?></h3>
            </div>
            <div class="panel-body">
              <?php print _panel1_text; ?>
            </div>
          </div>
          <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
        </div><!-- /.col-sm-4 -->
         <div class="col-sm-4">          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php print _panel2_title; ?></h3>
            </div>
            <div class="panel-body">
              <?php print _panel2_text; ?>
            </div>
          </div>
          <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php print _panel3_title; ?></h3>
            </div>
            <div class="panel-body">
              <?php print _panel3_text; ?>
            </div>
          </div>
          <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
        </div><!-- /.col-sm-4 -->        
      </div>

    </div> <!-- /container -->
<?php 
include('include/footer.inc');
