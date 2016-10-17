<?php
require 'req_globals.php';
?>

	<?php
          include 'inc_head.php';
          ?>

    <body>
        <div class="container">
    	<?php
						$page = 'gallery';	include 'inc_header.php';
							?>

            <h1><?php echo $firstName.$lastName; ?> Brief Timeline</h1>

<div class="gallery">


                <?php
//array of images
              $imgGallery = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg');
              $imgGallery[] = '7.jpg';
              $imgGallery[] = '8.jpg';
              $imgGallery[] = '9.jpg';
              $imgGallery[] = '10.jpg';
              $imgGallery[] = '11.jpg';
              $imgGallery[] = '12.jpg';
              $imgGallery[] = '13.jpg';
              $imgGallery[] = '14.jpg';
              $imgGallery[] = '15.jpg';
              $imgGallery[] = '16.jpg';
              $imgGallery[] = '17.jpg';
              $imgGallery[] = '18.jpg';
              $imgGallery[] = '19.jpg';
              $imgGallery[] = '20.jpg';

//array of descriptions
$imgDesc = array('Aug. 29, 1958: Michael Joseph Jackson is born in Gary, Ind., the seventh of nine children.',
'1966: After several years of training, The Jackson 5 hit the stage for the first time.',
'March 1969: With 10-year-old Michael as lead singer, the Jackson 5 signs with Motown Records.',
'December 18, 1969: The group\'s debut album, "Diana Ross Presents the Jackson 5, is released, spawning just one single "I Want You Back," its first No. 1.',
'May 18, 1970: "ABC" is released, becoming the second No. 1 single for the Jackson 5.',
'January 24, 1972: Still singing with the Jackson 5, Michael releases his first solo album, "Got To Be There." It spawns his first No. 1 hit as a solo artist, "Ben."', );

  $imgDesc[] = "October 24, 1978:  makes his on-screen debut starring as Scarecrow in 'The Wiz.'";
  $imgDesc[] = 'August 10, 1979: "Off the Wall, Jackson\'s first solo album as an adult and first collaboration with producer Quincy Jones, is released.';
  $imgDesc[] = 'November 30, 1982: " releases "Thriller," which will becomes the world\'s best-selling album of all time.';
  $imgDesc[] = 'May 16, 1983: " moonwalks his way into history on the "Motown 25" television special, to "Billie Jean" wearing his signature outfit.';
  $imgDesc[] = 'February 28, 1984: "Thriller" wins 8 Grammy Awards. Jackson won hundreds of awards, making him the most-awarded recording artist in pop music.';
  $imgDesc[] = 'January 27, 1984: During production of a Pepsi-Cola commercial, "Jackson\'s scalp is badly burned when an explosion sets his hair on fire.';
  $imgDesc[] = 'January, 1985: Jackson and Lionel Richie write "We Are the World," a song produced to raise money for victims of the Ethiopian famine.';
  $imgDesc[] = 'September 18, 1986: Captain EO, a 3-D film starring Jackson, premieres at Disneyland.';
  $imgDesc[] = 'Aug. 31, 1987: Jackson\'s seventh studio album, "Bad," is released. With five No. 1 singles, "Bad" sells at least 22 million copies worldwide.';
  $imgDesc[] = 'Nov. 26, 1991: Jackson releases "Dangerous," his eighth studio album; the video for lead single "Black Or White" stirs up controversy.';
  $imgDesc[] = 'Feb. 10, 1993: In a televised interview with Oprah, Jackson" reveals he was diagnosed with vitiligo, a genetic disorder that causes his skin color to fade.';
  $imgDesc[] = 'August 24, 1993: Jackson is accused of sexually assaulting a 13-year-old boy who often stayed overnight at his home.';
  $imgDesc[] = 'May 26, 1994: Jackson marries Lisa Marie Presley, daughter of Elvis, in the Dominican Republic. They divorce two years later.';
  $imgDesc[] = 'May 6, 1997: Michael and the rest of the Jackson 5 are inducted into the Rock and Roll Hall of Fame.';

$counter = 0;
$totalImages = count($imgGallery);

while ($counter < $totalImages) {
    echo '<div class="imgBox">';
    echo '<img src = "img/'.$imgGallery[$counter].'">';
    echo '<p>'.$imgDesc[$counter].'</p>';
    echo '</div>';
    $counter = $counter + 1;
}

                ?>




        </div>
        <footer class="col100">
            &copy; 2016 | Vonetta Stevenson | PHP Looping
        </footer>

        </div>

    </body>

</html>
