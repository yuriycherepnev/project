<div class="container flex-row top-of-week">
		<div class="content flex-4 flex-column space-evenly baseline">
			<h1 class="big_headline">top of week</h1>
			<div>
			  <h2 class="middle_headline"><?php echo $arg[0]['name'];?></h2>
			  <p class="recipe"><?php echo $arg[0]['description'];?></p>
			</div>
			<a class="get_it_recipe" href="#">get it recipe</a>
		</div>
		<img src="public/img/banana_cake.png">
	</div>

	<main class="container most_popular">
		<h1 class="big_headline center">most popular on this week</h1>
        <div class="grid most_popular wrap">
        	<?php $i = 0; foreach ($pop as $recipe): $i ++; ?>
              <div>
			    <img src="public/img/recipe<?php echo $i?>.png" alt="recipe">
			    <a href="#" class="most_popular_recipe"><?php echo $recipe['description'];?></a>
			    <div class="feed_back">
			      <span class="recipe"><?php echo $recipe['time'];?>min</span>
			      <span class="recipe"><?php echo $recipe['comment'];?></span>
			      <span class="recipe"><?php echo $recipe['like'];?></span>
			    </div>
		      </div>
		    <? endforeach; ?>
        </div>
	</main>

	<section class="container authors flex-row space-between">
		<div class="author_section">
			<h3>author</h3>
			<div class="line"></div>
			<div class="flex-row">
				<div class="flex-4"><img src="public/img/author.png"></div>
				<div class="author_content flex-6">
					<div class="author_name">karen gray</div>
					<div class="author_country">united states</div>
					<div class="social_network"></div>
					<div class="line"></div>
					<h4>about lemon</h4>
					<p class="recipe">Over the fifteen-year life span of Food.com, 
					we've learned that - in addition to eating - 
				    sharing is what you do best. And thanks to the 20 
				    million of you who come here each month, we now have 500.000 
				    recipes to show for it, more than anywhere else in the digital universe.
				    We also have tons crazy-tempting photos, troves of recipe rviews 
				    and more than 2 million Facebook likes. That's a heck of a lot of Food. Thank you!</p>
				    <div class="signature"><img src="public/img/signature.png"></div>
				</div>
			</div>
		</div>
		<div class="author_section">
			<h3>master chef</h3>
			<div class="line"></div>
			<div class="flex-row">
				<div class="flex-4"><img src="public/img/chef.png"></div>
				<div class="author_content flex-6">
					<div class="author_name">gordon ramsey</div>
					<div class="author_country">united states</div>
					<div class="social_network"></div>
					<div class="line"></div>
					<h4>about chef</h4>
					<p class="recipe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    <div class="signature"><img src="public/img/signature.png"></div>
				</div>
			</div>
		</div>
	</section>

   <div class="background_auth display_none" id="background_auth"></div>

	<div class="log_in display_none" id="log_in">
	  <section class="modal">
	  	<div class="close-modal" id="exit">x</div>
	  	<h2>Log In</h2>
        <form class="form flex-column" name="auth" action="#" method="post">
          <input type="email" name="email" placeholder="e-mail">
          <input type="password" name="pwd" placeholder="password">
          <input class="submit" type="submit" value="enter">
        </form>
        <a class="swap" id="swap" href="#">sign in</a>
       </section>
      </div>

      <div class="sign_in display_none" id="sign_in">
	   <section class="modal">
	  	<div class="close-modal" id="exit">x</div>
	  	<h2>Sign In</h2>
        <form class="form flex-column" name="auth" action="#" method="post">
          <input type="email" name="email" placeholder="e-mail">
          <input type="password" name="pwd" placeholder="password">
          <input class="submit" type="submit" value="enter">
        </form>
        <a class="swap" id="swap" href="#">log in</a>
       </section>
      </div>
