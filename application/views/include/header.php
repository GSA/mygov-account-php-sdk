</head>

<body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="/">MyGov App</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
			
			<?php $page_title = (!empty($page['title'])) ? $page['title'] : null?>		
            <li<?php if($page_title == 'About') echo ' class="active"'?>><a href="/">About</a></li>
          </ul>

	    <div class="pull-right">

				<?php if(!empty($user['email'])) { ?>
								
			
				
				<div class="btn-group">
				    <a class="btn btn-small btn-inverse" href="/dashboard"><i class="icon-user icon-white"></i> 
					<?php echo $user['first_name'] . ' ' . $user['last_name']; ?></a>
				    <a class="btn btn-small btn-inverse dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				    <ul class="dropdown-menu">
					    <li><a href="./dashboard"><i class="icon-pencil"></i> Edit Profile</a></li>
					    <li><a href="./logout"><i class="icon-remove"></i> Logout</a></li>
				    </ul>
				</div>
	    	

				<?php } 
				else { ?>

					<a class="btn-auth btn-github" href="/login">Sign in with <b>MyGov</b></a>

				<?php } ?>
		
		</div>		
		
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">