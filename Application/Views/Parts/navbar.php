<?php
function setNavBar($title)
{
?>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top custom-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
<?php
	if(LoginManager::isLogin())
	{
?>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<?php
	}
?>
          <a class="navbar-brand" href="main"><?php echo $title; ?></a>
        </div>
<?php
	if(LoginManager::isLogin())
	{
?>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="word">Word</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
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
<?php
	}
?>
      </div>
    </div>
<?php
}
?>