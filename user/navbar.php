<!-- Navigation -->

        <nav class="navbar navbar-default navbar" role="navigation" style="margin-bottom: 0">
        	  <img src="../Pictures/banner.jpg" style="width: 100%; height: 50%">
            <div class="navbar-header">
                
            </div>
			
			<ul class=" nav navbar-nav">
				<li id="home" style="cursor:pointer">
                   <a href='index.php'><i class="fa fa-home fa-fw"></i> Home</a>
                </li>
				<li id="cartme" style="cursor:pointer">
                   <a id="cart_control"><i class="fa fa-shopping-cart fa-fw"></i> My Cart</a>
                </li>
				<li id="history"><a href="history.php"><span class="fa fa-list-alt"></span> History</a></li>
				<li>
					<form class="navbar-form" role="search" method="POST" action="search_result2.php">
					<div class="input-group" id="searchbox" style="width:500px;">
						<input type="text" class="form-control" placeholder="Search Product" name="search" id="search" autocomplete="off">
						<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
					</form>
				</li>
			</ul>
			
            <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-product-hunt fa-fw"></i> Products <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="index.php"> All Category</a></li>
						<?php
							$caq=mysqli_query($conn,"select * from tbl_categories");
							while($catrow=mysqli_fetch_array($caq)){
								?>
								<li class="divider"></li>
								<li><a href="plist.php?cat=<?php echo $catrow['ID']; ?>"><?php echo $catrow['category']; ?></a></li>
								<?php
							}
						
						?>
                    </ul> 
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  My Account</a></li>
						<li class="divider"></li>
						<li><a href="#profile" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>  My Profile</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>   
                </li>
            </ul>
        </nav>