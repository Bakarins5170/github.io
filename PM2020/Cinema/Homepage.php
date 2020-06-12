<html>
    <head>
        <meta charset="utf-8">
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Homepage.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="../Images/logosmall1.jpg">
    </head>
<body>
    <h1>
    FilmLion
    </h1>
    <!--  menu bar -->
    <nav class="menu">
     <ul>
      <li><img src="../Images/logosmall1.jpg" alt="logo"></li>    
      <li><a class="active" href="../Cinema/Homepage.php">Home</a></li>    
      <li><a href="../Cinema/Movies.php">Movies</a></li> 
      <li><a href="../Cinema/Membership.php">Memberships</a></li>
      <li><a href="../Cinema/Login.php">Login</a></li>
      <li><a href="../Cinema/Register.php">Register</a></li>
      <li><a href="../Cinema/Contact.php">Contact</a></li>
     </ul>
    
 <form class="search-form">
     
     <input type="text" placeholder="search"name="search" pattern= "[A-Z\sa-z].{2,20}"
             title = "min 2 letters max 20 letters." required>
     <button>search</button>
     
 </form>
 </nav>   
 
 <!--quick book-->
 <div class="quickbook">

<form action="../Cinema/Purchase.php">
  <label for="Location" style="color:white; padding:3px"><strong>Quick Book:</strong></label>
  <select id="location" name="location" required>
    <option value="">Choose Location</option>
    <option value="Leeds">Leeds</option>
    <option value="Huddersfield">Huddersfield</option>
    <option value="Wakefield">Wakefield</option>

  </select>
  
    <select id="cinema" name="cinema" style:"color:white" required>
    <option value="">Choose Cinema</option>
    <option value="Vue">Vue</option>
    <option value="Cineworld">Cineworld</option>
    <option value="Odeon">Odeon</option>
  </select>
  
    <select id="Movie" name="Movie" required>
    <option value="">Choose Movie</option>  
    <option value="Dolittle">Dolittle</option>
    <option value="Bad Boys for Life">Bad Boys for Life</option>
    <option value="The Grudge">The Grudge</option>
    <option value="Sonic the  Hedgehog">Sonic the  Hedgehog</option>
    <option value="Brahms: The Boy II">Brahms: The Boy II</option>
    <option value="Onward">Onward</option>
    <option value="Jojo Rabbit">Jojo Rabbit</option>
    <option value="1917">1917</option>
    <option value="Fantasy Island">Fantasy Island</option>
    <option value="Birds of Prey">Birds of Prey</option>
    <option value="The Invisible Man">The Invisible Man</option>
    <option value="Peter Rabbit 2">Peter Rabbit 2</option>
    <option value="The Forever Purge">The Forever Purge</option>
    <option value="Tenet">Tenet</option>
    <option value="Summerland">Summerland</option>
    <option value="The Empty Man">The Empty Man</option>
    <option value="Wonder Woman 1984">Wonder Woman 1984</option>
    <option value="A Quiet Place Part II">A Quiet Place Part II</option>
    <option value="The Conjuring: The Devil Made Me Do It">The Conjuring: The Devil Made Me Do It</option>
    <option value="Bloodshot">Bloodshot</option>
    <option value="Trolls World Tour">Trolls World Tour</option>
    <option value="Scoob!">Scoob!</option>
    <option value="Artemis Fowl">Artemis Fowl</option>
    <option value="Mulan">Mulan</option>
    <option value="The SpongeBob Movie: Sponge on the Run">The SpongeBob Movie</option>
    <option value="Antebellum">Antebellum</option>
    <option value="Candyman">Candyman</option>
  </select>
  
    <label style="color:white;"> Senior</label>
    <input class="inputsenior" type="number" value="0" name="senior" min="0" max="10">
    
    <label style="color:white;"> Adult</label>
    <input class="inputadult" type="number" value="0" name="adult" min="0" max="10">
    
    <label style="color:white;"> Student</label>
    <input class="inputstudent" type="number" value="0" name="student" min="0" max="10">

    <label style="color:white;"> Teen</label>
    <input class="inputteen" type="number" value="0" name="teen" min="0" max="10">
    
    <label style="color:white;"> Child</label>
    <input class="inputchild" type="number" value="0" name="child" min="0" max="10">
    
    <label style="color:white;"> Date</label>
    <input class="date" type="date" name="date"
    value="0" name="Date" min="2020-05-28" max="2020-06-28"required>

    <label style="color:white;"> Time</label>
    <input class="time" type="time" name="time" min="10:00" max="23:59"required>
    
    <input  type="reset" value="reset" name="reset">
  
  <input  type="submit" value="submit" name="submit">
</form>
</div>
    
    <!-- main body-->

            <!--<p>Browse film listings and times
            for your local cinema and book tickets online:</p>-->



<!-- Popular Traillers this week-->
        <div class="first">
            <div>

              <h2 class="first-h2">Popular Trailers</h2>
                 <div>

                    <ul>
                    <li>
                        <a class="img" href="../Video/Spies_in_Disguise.mp4">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/spies_in_disguise.jpg" /></a>
                        
                        <a class="img" href="../Video/angry _birds_2.mp4">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/angry_birds.jpg" /> </a>
                        
                        <a class="img" href="../Video/jumangi.mp4">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/jumanji.jpg" /></a>
                        
                        <a class="img" href="../Video/joker.mp4">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/joker.jpg" /> </a>
                        
                        <a class="img" href="../Video/peter_rabbet_2.mp4">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/peter-rabbit-2.jpg" /> </a>
               
                        <a class="img" href="../Video/aquaman.mp4">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/aquaman.jpg" /> </a>
               
                    </li>
                    </ul>                        

                 </div>
                 </div>
                 </div>
            
            
            <!-- coming soon-->
            
                    <div class="first">
            <div>
              <h2 class="first-h2">Coming Soon</h2>
                 <div>
                    <div class="item1">
                    <ul>
                    <li>
                        <a class="img" href="../Images/bad-boys-for-life.jpg">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/bad-boys-for-life.jpg" /></a>
                        
                        <a class="img" href="../Images/jojo-rabbit.jpg">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/jojo-rabbit.jpg" /> </a>
                        
                        <a class="img" href="../Images/onward.jpg">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/onward.jpg" /></a>
                        
                        <a class="img" href="../Images/sonic-the-hedgehog.jpg">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/sonic-the-hedgehog.jpg" /> </a>
                        
                        <a class="img" href="../Images/dolittle.jpg">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/dolittle.jpg" /></a>
                        
                        <a class="img" href="../Images/fantasy-island.jpg">
                        <img alt="A screenshot showing CSS Quick Edit" src="../Images/fantasy-island.jpg" /> </a>
                    
                    </li>
                    </ul>                        
                    </div>
                 </div>
                </div>
            </div>
        
        
        <!-- About-->
        
            <div class="first">
               <div>
                 <h2 class="first-h2">About us</h1>
                    <ul>
                        <p style="text-align:left"> FilmLion is an emerging company specialised in programming and design for selling movie tickets online.
                        This project was launched at the beginning of 2020.</p>
                        <p style="text-align:left">The Foundation's headquarters is in Leeds, United Kingdom.</p>
        
                    </ul>
            </div>
        </div>
        <!-- FAQs-->
            <!--<div class="first">
            <div>
              <h2 class="first-h2">(FAQs)</h1>
                <ul>
                <details>
                		<summary>
                			<mark>-</mark> <strong> I can't find my tickets?</strong>
                		</summary>
                		<p style="text-align:left;">Check for an email confirmation from our ticket provider, See Tickets</p>
                	</details>
                </ul>
                
                <ul>
                <details>
                		<summary>
                			<mark>-</mark> <strong>What time should I arrive?</strong>
                		</summary>
                		<p style="text-align:left;">It is best to arrive when the doors open.
                		This will give you time to buy a drink and snack before the film begins.</p>
                	</details>
                	<br>
                </ul>
                
            </div>

        </div> -->

<!-- Get In Touch -->
        
            <!--<div class="first">
            <div>
              <h2 class="first-h2">Get In Touch</h1>
                <ul>
                <section class="contact">
                		
                <form action="../PHP/Subscribe.php" method="post" name="form">
                  <div>
                    <p style="text-align:left">subscribe to our newsletter.</p>
                  </div>
                
                  <div>
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="email" placeholder="Email address" name="email" required>
                
                  </div>
                
                  <div>
                    <input style="background-color:orange;color:white;font-size:12px" type="submit"
                    name="submitsubscribe" value="Subscribe">
                  </div>
                </form>
	   </section>
            </ul>
                
            </div>-->

        </div>
        
       
        
	<!--/*<--!<footer-->
        

     <div>
            <footer>
            <a href="https://www.facebook.com"
            class="icon-facebook" target="_blank" rel="noopener">Facebook</a>
        
            <a href="https://twitter.com" 
            class="icon-twitter" target="_blank" rel="noopener">Twitter</a>
                <p> Copyright &copy 2020 Film Lion, All Rights Reseved.</p>
            </footer> 
         </div>


    
</body>    
</html>

