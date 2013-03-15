<!doctype html>
<?php require("/include/globals.php"); ?>
<html>
<head>
<title>Completing the Square</title>
<link rel="stylesheet" href="/css/hewes1.css"/>
<script src="/js/imgswap.js"></script>
</head>

<body>
<div id="container">

<div id="header">
<h1>Completing the Square</h1>
</div>
<?php require("/include/course_menu.php"); ?>

<div id="content">
Completing the square is a useful technique for <b>solving quadratic equations</b> that just can't be factored, or for <b>rewriting the equation of a parabola</b> into a more useful form. Either way, you start the process with the same set of steps:
<br><br>
<B><U>Step 0:</U></B><br> Before we can start, you should recall the equation for squaring a binomial (also known as factoring a perfect-square trinomial):
<br>
<img src="/lessons/equations/squaretrinomial.png">
<br>
(Remember that, if that "minus" sign happens to be a "plus", then the other "minus" sign is also a "plus"). Our goal is to make our equations look like the left side, so that they can easily be factored into something resembling the right side. Let's take a look at the sample equation:
<br>
<img src="/lessons/equations/cts1.png">
<br>
...to which I'm going to add the perfect-square trinomial formula, for ease of reference:
<img src="/lessons/equations/cts2.png">
<br><br>
<B><U>Step 1:</U></B><br> The first step is just to set up our parentheses. They should go around BOTH terms with the "x", but NOT around the constant term. Make sure you <b>leave a space</B> before the closing parenthesis. We're going to fill that space up in a moment. 
<br>
<img src="/lessons/equations/cts3.png">
<br><br>
<B><U>Step 2:</U></B><br> Notice, now, that we have our "x" terms bearing a <I>striking</I> similarity to the "a" terms in our formula.
<br>
<img src="/lessons/equations/cts4r.gif">
<br>
...leaving the 8 as our "2b" part.
<br>
<img src="/lessons/equations/cts4b.gif">
<br>
So, in order to get that "b" term, we have to divide our "2b" part (the 8) by 2. This gives us 4, and since our "b" is actually "b²", we need to add 4² into the parentheses:
<br>
<br>
<font size=2>(click to animate)</font>
<br>
<img src="/lessons/equations/cts5.png" onclick="toggle_img(this,'/lessons/equations/cts5.png','/lessons/equations/cts5.gif')"/>
<br>
Note that we added a "-16" onto this equation at the same time. This is because we've added 16 (4²) in the parentheses, so we've actually changed the value of that side of the equation. In order to maintain balance, we have to subtract it at the same time. That's not really part of the formula we're trying to get; it's just some "leftovers" from the process. Go ahead and combine the two constant terms at this point.
<br><br>
<B><U>Step 3:</U></B><br> You'll notice we now have both our "a" terms and our "b" terms placed exactly as they are in the formula:
<br>
<img src="/lessons/equations/cts6.gif">
<br>
So, go ahead and factor, now! Make our parentheses look like the RIGHT side of the formula:
<br>
<br>
<font size=2>(click to animate)</font>
<br>
<img src="/lessons/equations/cts7.png" onclick="toggle_img(this,'/lessons/equations/cts7.png','/lessons/equations/cts7.gif')"/>
<br>
And that's it! You're done! Everything from this point is just solving. Depending on what you're trying to do, you'll be going different directions from here. Refer to those pages for notes on those.
<br><br>
(NOTE: Many students, over the years, have asked me, "but where did the middle term go?" Try FOILing your equation back out. If you do it right, you'll see that middle term comes back! This is, of course, how factoring works.)
<br><br>
If you're still confused, try the <a href="https://www.khanacademy.org/math/algebra/quadratics/completing_the_square/v/solving-quadratic-equations-by-completing-the-square" target="_blank">Khan Academy</a> video on the topic.
<br><br>
Or you can always read your textbook ;-)


</div>

<?php require("/include/footer.php"); ?>
</div><!--/container--!>
</body>
</html>
