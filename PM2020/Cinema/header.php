<html>
    <head>
        <meta charset="utf-8">
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/header.css">
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
      <li><a href="../Cinema/Homepage.php">Home</a></li>    
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
    
    </body>    
</html>