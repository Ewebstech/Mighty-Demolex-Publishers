 <nav id="access" class="access" role="navigation">
               
                <div id="menu" class="menu">
                    
                    <ul id="tiny">
                    <?php  $pagename = basename($_SERVER['PHP_SELF']); ?>
                        <li><a href="index.php" <?php echo($pagename == "index.php") ? "class=\"active\"" : "class=\"\""; ?>>Home</a></li>
                        <li ><a <?php echo($pagename == "portfolio.php") ? "class='active'" : ""; ?> href="portfolio.php">Portolio</a></li>  
                        <li><a <?php echo($pagename == "about.php") ? "class=\"active\"" : "class=\"\""; ?> href="about.php">About Us</a></li> 
                        <li><a <?php echo($pagename == "contact.php") ? "class=\"active last\"" : "class=\"last\""; ?> href="contact.php">Contact Us</a></li>
                        
                    </ul>
                    
                </div>
                
          	</nav>