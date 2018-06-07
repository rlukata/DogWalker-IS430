<?php
// an array of testimonials
// $banners = array (
$testimonials = array (
    '<p>My dog walker understands that my dogs are my world. She was in constant contact sending me updates throughout the day. She took care of my dogs as if they were her own!</p><p><b>M. Silverstone. Seattle, WA</b></p>',
    '<p>John S. is an amazing dogwalker. He takes my labradoodle (Diesel) for runs and my dog loves it!</p><p><b>P. Gomez. Portland, OR</b></p>',
    '<p>My dog Luna loved Maria. She is the best dog walker ever!</p><p><b>Lisa M. Santa Monica, CA</b></p>',
    '<p><b>Customers reviews are essential to our business!!! Please leave us your review on Yelp.</b></p>',
    '<p>I had an emergency and I needed someone to watch my dog. I was able to hire someone in less than 5 minutes!!!</p><p><b>Mary S. Sacramento, CA</b></p>',
    '<p>Thank you for an awesome service!!!</p><p><b>Martha R. Cleveland OH</b></p>'

);
// pick a random testimonial
$html = $testimonials[array_rand($testimonials)];

// send XML headers
header('Content-type: text/xml');
echo '<?xml version="1.0" ?>';

// print the XML response
?>
<banner>
    <content><?php echo htmlentities($html); ?></content>
    <reload>7000</reload>
</banner>