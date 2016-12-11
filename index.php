<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>  
        <!-- sliging navbar animation help from youtube video-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Final</title>
        <style type="text/css">
            nav {
                transform: translate3d(-200px, 0, 0);
                transition: transform 0.4s ease;
            }
            .active-nav nav {
                transform: translate3d(0, 0, 0);
            }
            .content {
                transition: transform 0.4s ease;
            }
            .active-nav .content {
                transform: translate3d(200px, 0, 0);
            }
            body{
                background: "https://s-media-cache-ak0.pinimg.com/originals/5d/e6/71/5de67115a26ceed35c0a8b6f10767ab1.png";
            }
            
            
        </style>
    </head>
    <body style="font-family: Agency FB; overflow-x: hidden; padding: 0; margin:0;">
        
        <nav style=" position: fixed;z-index: 1000;top: 0;bottom: 0;width: 200px; background-color: #CCD5E6;"> 
            <a href="#" class="nav-toggle-btn" style="display: block;position: absolute;left: 200px;width: 40px;height: 40px; background-color: #303030; font-family: 'Francois One', sans-serif; font-size: 20px; color: snow">MENU</a>
            <ul style=" list-style: none; margin-top: 100px;">
                <li><a href="#" style="text-decoration: none;display: block;text-align: center;color: #fff; padding: 10px 0; font-family: 'Inconsolata', monospace; font-size: 18px; color: black">Home</a></li>
                <li><a href="adminlogin.php" style="text-decoration: none;display: block;text-align: center;color: #fff; padding: 10px 0; font-family: 'Inconsolata', monospace;font-family: 'Inconsolata', monospace; font-size: 18px; color: black">Admins</a></li>
                <li><a href="registration.php" style="text-decoration: none;display: block;text-align: center;color: #fff; padding: 10px 0; font-family: 'Inconsolata', monospace; font-family: 'Inconsolata', monospace; font-size: 18px; color: black">Signup</a></li>
                <li><a href="login.php" style="text-decoration: none;display: block;text-align: center;color: #fff; padding: 10px 0; font-family: 'Inconsolata', monospace; font-family: 'Inconsolata', monospace; font-size: 18px; color: black">Signin</a></li>
            </ul>
        </nav>
        
        
        <div class="content" style=" padding-top: 300px;height: 4000px;background-color: #303030 ; text-align: center;">
            <?php
               if(isset($_SESSION['id'])) {
                    echo $_SESSION['id'];
               }
                else{
                   echo "<span style= 'color: white'>You're not logged in!</span>";
               }
            ?>
            <!--Bootstrap Carousel for Image sliders-->
                    <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="http://harrypotterfanzone.com/wp-content/2009/06/ss-us-jacket-art.jpg" alt="House1">
      <div class="caption">
        <h3>Harry Potter and the Sorcerer's Stone</h3>
	<p style = "font-size: 10px"> Author: JK Rowling </p>
	<p><b><u>Summary</u></b></p>
	<p style= "font-size: 10px">Harry Potter and the Sorcerer's Stone is the first book in a seven-part series about the powerful young wizard Harry Potter. In this book, he's orphaned and sent to live with his aunt and uncle. Years later, he receives an acceptance letter from Hogwarts School of Witchcraft and Wizardry, where he will have many dangerous and fantastic adventures.
      		</p>
	<p><i>-enotes</i></p>
	</div>
    </div>
  </div>
<!--Sale: House 2-->
    
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://upload.wikimedia.org/wikipedia/en/f/f7/TheGreatGatsby_1925jacket.jpeg" alt="House2">
      <div class="caption">
        <h3>The Great Gatsby</h3>
	<p style = "font-size: 10px">Author: F. Scott Fitzgerald </p>
	<p><b><u>Summary</u></b></p>
	<p style = "font-size: 10px">Nick Carraway is the narrator, or storyteller, of The Great Gatsby, but he is not the story's protagonist, or main character. Instead, Jay Gatsby is the protagonist of the novel that bears his name. Tom Buchanan is the book's antagonist, opposing Gatsby's attempts to get what he wants: Tom's wife Daisy.
	</p>
	<p><i>-CliffsNotes</i></p>
        </div>
  </div>
</div>
    
<!--Sale: House 3-->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="http://images.fineartamerica.com/images-medium-large-5/to-kill-a-mockingbird-book-cover-movie-poster-art-2-nishanth-gopinathan.jpg" alt="House3">
      <div class="caption">
        <h3>To Kill A Mockingbird</h3>
	<p style = "font-size: 10px"> Author: Harper Lee </p>
	<p><b><u>Summary</u></b></p>
	<p style = "font-size: 10px"> A novel by Harper Lee published in 1960. It was immediately successful, winning the Pulitzer Prize, and has become a classic of modern American literature. The plot and characters are loosely based on the author's observations of her family and neighbors, as well as on an event that occurred near her hometown in 1936, when she was 10 years old.</p>
      	<p><i>-Wikipedia</i></p>
	</div>
  </div>
</div>
    
<!--Sale: House 4-->
   
  <div class="col-sm-5 col-md-4" style="margin-right: 500px">
    <div class="thumbnail">
      <img src="https://2.bp.blogspot.com/-XnwrmQnh6LE/VyXc8FZOR5I/AAAAAAAACwg/L12M1TN8I1AsGQloPdvpWU6hXJbOT3pUgCLcB/s1600/Harry%2BPotter%2Band%2Bthe%2BGoblet%2Bof%2BFire.jpeg" alt="House4">
      <div class="caption">
        <h3>Harry Potter and the Goblet of Fire</h3>
	<p style = "font-size: 10px">Author: JK Rowling</p>
	 <p><b><u>Summary</u></b></p>
	<p style = "font-size:10px">The book opens with Harry seeing Frank Bryce being killed by Lord Voldemort in a vision, and is awoken by his scar hurting. The Weasleys then take Harry and Hermione Granger to the Quidditch World Cup, using a Portkey, to watch Ireland versus Bulgaria, with Ireland emerging victorious. There, Harry meets Cedric Diggory, who is attending the match with his father. After the match, Voldemort's followers attack the site, destroying spectators' tents and wreaking havoc. The Dark Mark gets fired into the sky, which leads to a panic since it is the first time the sign has been seen in 13 years. Winky, Barty Crouch Senior's house elf, is blamed for casting the Mark after she is found holding Harry's wand, which is revealed to have been used to cast the Mark, as Harry had lost it during the chaos of the Death Eaters' attack.</p>
	<p><i>-Wikipedia</p>
	<p>
      </div>
    </div>
</div>
    
<!--Sale: House 5-->
  <div class="col-sm-6 col-md-4" style="margin-left: 370px; margin-top: -820px">
    <div class="thumbnail">
      <img src="https://images-na.ssl-images-amazon.com/images/I/51CKVVHTRBL.jpg" alt="House5">
      <div class="caption">
        <h3>Harry Potter and the Order of the Phoenix</h3>
	 <p style = "font-size: 10px">Author: JK Rowling</p>
	 <p><b><u>Summary</u></b></p>
	<p style = "font-size: 10px">Harry Potter is spending another tedious summer with his dreadful Aunt Petunia and Uncle Vernon when a group of evil spirits called “dementors” stage an unexpected attack on Harry and his cousin Dudley. After using magic to defend himself, Harry is visited by a group of wizards and whisked off to number twelve, Grimmauld Place, London. Number twelve is the home of Harry’s godfather, Sirius Black, and the headquarters of the Order of the Phoenix. The Order is a group of wizards, led by Hogwarts headmaster Albus Dumbledore, dedicated to fighting evil Lord Voldemort and his followers. </p>
      	<p><i>-Sparknotes</i></p>
	</div>
  </div>
</div>
<!--Sale: House 6-->
  <div class="col-sm-6 col-md-4" style="margin-top: -820px; margin-left:730px">
    <div class="thumbnail">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/d1/68/78/d168781ec11b7d24868b09d7bf5efded.jpg" alt="House4">
      <div class="caption">
        <h3>Twenty-Thousand Leagues Under the Sea</h3>
	<p style = "font-size: 10px">Author: Jules Verne </p>
	 <p><b><u>Summary</b></u></p>
	<p style = "font-size: 10px"> The protagonist of Twenty Thousand Leagues Under the Sea is Professor Aronnax. ... Conseil is Aronnax's servant. Fiercely loyal to Aronnax, he jumps in the water to the rescue of Aronnax after he falls off the steamer searching for the Nautilus. On the other hand, Ned Land has one goal in mind throughout the book: escape.</p>
      	<p><i>-study.com</i></p>
	</div>
    </div>
</div>
    
    
<!--Sale: House 7-->
  <div class="col-sm-6 col-md-4" style = "margin-top: 0px">
    <div class="thumbnail">
      <img src="https://s-media-cache-ak0.pinimg.com/564x/32/a7/da/32a7da9a97de7c39991595661a7965d1.jpg" alt="House4">
      <div class="caption">
        <h3>Gulliver's Travels</h3>
	<p style = "font-size: 10px">Author: Jonathan Swift </p>
	<p><b><u>Summary</b></u></p>
	<p style = "font-size: 10px"> Gulliver's Travels is an adventure story (in reality, a misadventure story) involving several voyages of Lemuel Gulliver, a ship's surgeon, who, because of a series of mishaps en route to recognized ports, ends up, instead, on several unknown islands living with people and animals of unusual sizes, behaviors, and philosophies, but who, after each adventure, is somehow able to return to his home in England where he recovers from these unusual experiences and then sets out again on a new voyage.</p>
        <p><i>-Sparknotes.com</i></p>
      </div>
    </div>
</div>

<!--Sale: House 8-->
  <div class="col-sm-6 col-md-4" style = "margin-top: 0px; margin-left: 0px">
    <div class="thumbnail">
      <img src="http://www.puffin.com.au/jpg-large/9780141330136.jpg" alt="House4">
      <div class="caption">
        <h3>Great Expectations</h3>
        <p style = "font-size: 10px">Author: Charles Dickens </p>
        <p><b><u>Summary</b></u></p>
	<p style = "font-size: 10px">Pip is an orphan living on the Kent marshes with his abusive sister and her husband, Joe Gargery, the village blacksmith. While exploring in the churchyard near the tombstones of his parents, Pip is accosted by an escaped convict. The convict scares Pip into stealing food for him, as well as a metal file to saw off the convict's leg iron. Returning with these the next morning, Pip discovers a second escaped convict, an enemy of the first one. Shortly afterward, both convicts are recaptured while fighting each other.</p>
        <p><i>-CliffsNotes</i></p>
      </div>
    </div>
</div>

 <div class="col-sm-6 col-md-4" style = "margin-top: -785px; margin-left: 750px;">
    <div class="thumbnail" style = "height: 850px">
	      <img src="https://flavorwire.files.wordpress.com/2011/09/catch-22_cover.jpg" alt="House4">
	<div class= "caption">
	<h3>Catch 22</h3>
        <p style = "font-size: 10px">Author: Joseph Heller </p>
        <p><b><u>Summary</b></u></p>
	<p style = "font-size: 10px">During the second half of World War II, a soldier named Yossarian is stationed with his Air Force squadron on the island of Pianosa, near the Italian coast in the Mediterranean Sea. Yossarian and his friends endure a nightmarish, absurd existence defined by bureaucracy and violence: they are inhuman resources in the eyes of their blindly ambitious superior officers. The squadron is thrown thoughtlessly into brutal combat situations and bombing runs in which it is more important for the squadron members to capture good aerial photographs of explosions than to destroy their targets.</p>
        <p><i>-Sparknotes</i></p>

</div>
</div>
</div>
</div>
    <br><br><br><br>
            <p style= "font-family:Agency FB; size: 30px; color: white">BESTSELLERS</p>
                      <div style="margin-top: 0px">       
                <div id="pics" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#pics" data-slide-to="0" class="active"></li>
                  <li data-target="#pics" data-slide-to="1"></li>
                  <li data-target="#pics" data-slide-to="2"></li>
                  <li data-target="#pics" data-slide-to="3"></li>
                </ol>

            <!--Slide content set to store images here-->
                <div class="carousel-inner" role="listbox">
                <!--Image 1-->
                  <div class="item active">
                    <img src="http://cdn.konbini.com/wp-content/blogs.dir/4/files/2015/06/3047323-slide-s-2-the-graphic-designer-behind-the-20th-centurys-most-influential-book-covers-has-died-635x1024.jpg" alt="Chania" width="460" height="345" style = "margin-left: 410px">
                  </div>
            <!--Image 2-->
                  <div class="item">
                    <img src="https://s-media-cache-ak0.pinimg.com/originals/d1/68/78/d168781ec11b7d24868b09d7bf5efded.jpg" alt="Chania" width="460" height="345" style = "margin-left: 410px">
                  </div>
            <!--Image 3-->
                  <div class="item">
                    <img src="https://www.penguin.co.uk/content/dam/catalogue/pim/editions/31/9780141330136/cover.jpg" alt="Flower" width="460" height="345" style = "margin-left: 410px">
                  </div>
            <!--Image 4-->
                  <div class="item">
                    <img src="http://www.beautifulbookcovers.com/wp-content/uploads/2013/01/gatsby-original-cover-art.jpg" alt="Flower" width="460" height="345" style = "margin-left: 410px">
                  </div>
                </div>

                <!-- Navigation of images -->
                <a class="left carousel-control" href="#pics" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#pics" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                            </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        
        (function() {
            
            var bodycontent = $('body'),
                toggl = bodycontent.find('.nav-toggle-btn');
            
            toggl.on('click', function(e) {
                bodycontent.toggleClass('active-nav');
                e.preventDefault();
            });
            
            
            
        })();
        
        
    </script>
        </div>
            </div>
        </div>
    </body>
</html>
