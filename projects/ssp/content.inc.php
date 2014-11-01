<div class="content">
  <div id="image"> 
    <a href='private/index.php'><img
      src="src/Pascal_Steger_2012.jpg" alt="picture of Pascal Steger" width="100px"
      align="left"></a>
    <p>
      Me
    </p>
  </div>

  <h2>
    Introduction
  </h2> 

  Welcome to the personal homepage of
  <a href="private/index.php">
    Pascal Steger
  </a>.

  It is a pleasure to introduce myself: Born in the late 80s, I am
  currently living in Zurich, Switzerland, studying Extragalactic
  Astrophysics at <a href="http://www.ethz.ch">ETH Zurich</a>. My
  interests range from physics (what a coincidence <img
  src="src/tongue.png" alt="wink">) to IT infrastructure and
  technical aspects of aviation and cycling all the way to
  basketball. The exact whereabouts of my person as well as a
  short overview of my career can be found in the private section.

  But enough of myself. Why don&prime;t you lean back and free
  your mind for an amusing hour of brain activity? I have gathered
  some of the more appealing problems turning up during the last
  three years, and want to share with you the joy of working on
  them. They span a range of different topics, usually not found
  together. To make it more challenging, you won&prime;t be given
  any hints as usually is done in academics. Never say die,
  though! An old latin proverb states: "Bonus vir semper tiro", a
  good man is always a beginner.

  For your convenience, the
  <a href="./notes/">
    scripts
  </a>
  on basic physics, my private Wiki named
  <a href="http://<?php echo $_SERVER["SERVER_ADDR"]?>/vicky/">Vicky</a>
  or a
  <a href="http://clusty.com">
    meta search engine
  </a>
  are at your hands.
  Disce aut discede!
  
  <h2>
	Problems
  </h2>
  By clicking on the category name, you get to the respective
  solution section, so you can compare your findings with mine.
  <h3>
	<a name='astro' href='solutions/index.php#astro'>
	  Astronomy
	</a>
  </h3>
  <ol>
	<li>
	  Describe the properties of a 2-element adding radio interferometer!
	</li>
	<li>
	  Where was the Sun during the second week in 2008? Where were
	  A Cassiopeiae and A Cygni? Split the time between sunrise and
	  sunset in three parts and determine the positions right in the
	  middle of the corresponding interval.
    </li>
	<li>
	  Simulate the earth-moon system using assembler.
	</li>
	<li>
	  Write a program to simulate a classical three-body problem
	  using a leap-frog algorithm.
    </li>
	<li>
	  Run a Gadget-2 simulation on a Phenom9750 / SuSE
	  environment. You might install MPICH, gsl, fftw(-mpi)
	  beforehands.
    </li>
	<li>
	  Visualize it!
	</li>
	<li>
	  Analyze a Gadget-2 snapshot file of a cosmological
	  simulation and search for correlations between angular momenta
	  , inertia axes and mass or position vector for both gas and
	  dark matter particles.
    </li>
  </ol>

  <h3>
	<a name='ssp' href='solutions/index.php#ssp'>
	  Solid State and Theoretical Physics
	</a>
  </h3>
  <ol>
	<li>
	  How do the Brioullin-zones look like for a two-dimensional,
	  rectangular array?
    </li>
	<li>
	  Describe the magnetic properties of MnS. You may use an
	  experimental setup as did Shull 1949.
    </li>
	<li>
	  Describe two models for Quantum Computation.
      <img src="./src/lightbulb.png" alt="enlightenment" title="Could have to do with lightbulbs and electric circuits :o)">
	</li>
  </ol>
  <h3>
	<a name='fracts' href='solutions/index.php#fracts'>
	  Fractals
	</a>
  </h3>
  <ol>
	<li>
	  Write a program (php/cpp) to zoom into the Mandelbrot set
      z -> z<sup>2</sup>+c
	  using the pixel algorithm.
    </li>
	<li>
	  Write a program (php/cpp) to draw a Koch flake or other
	  L-systems. The use of recursion is encouraged.
    </li>
  </ol>

  <h3>
	<a name='math' href='solutions/index.php#math'>
	  Combinatorics
	</a>
  </h3>
  <table align="right">
	<tr><td style="width:1em">1</td><td style="width:1em">2</td><td style="width:1em">5</td><td style="width:1em">4</td><td style="width:1em">6</td><td style="width:1em">3</td></tr>
	<tr><td>5</td><td>3</td><td>6</td><td>1</td><td>4</td><td>2</td></tr>
	<tr><td>4</td><td>6</td><td>3</td><td>5</td><td>2</td><td>1</td></tr>
	<tr><td>2</td><td>1</td><td>4</td><td>3</td><td>5</td><td>6</td></tr>
	<tr><td>3</td><td>5</td><td>2</td><td>6</td><td>1</td><td>4</td></tr>
	<tr><td>6</td><td>4</td><td>1</td><td>2</td><td>3</td><td>5</td></tr>
  </table>
  <ol>
	<li>

	  Given following setup: You have a square of 6x6 towers, with
	  sizes 1..6 distributed such that in each row and column
	  there is only one tower of a given size. You furthermore
	  have a set of 6x6 colored bricks, each color with bricks of
	  size from 1 to 6. A brick is set validly, if there is only
	  one brick of a given color in each row and column and if
      <div id="math">
        size(brick) + size(tower) = 7
      </div>
	  i.e. all bricks end up on the same level. Find an algorithm
	  to produce a correct mapping for the tower sizes in the table
	  to the right.
    </li>
	<li>
	  Same exercise as before. In order to check the validity of
	  the above code, write a program that steps through all valid
	  color permutations and searches the lowest deflection from
	  equal height.
    </li>
	<li>
	  For mathematicians: Discuss on the number of possible
	  solutions. Generalize for arbitrary sizes of the array.
    </li>
  </ol>
  <h3>
	<a name='langs' href='solutions/index.php#langs'>
	  Languages
	</a>
  </h3>
  <ol>
	<li>
	  Read the following
      <a href="./download/Gagarin_text.ps">
        biography of Jurij Gagarin
      </a>
      and translate it into german. Additionally give a short
	  summary in russian.
    </li>
	<li>
	  Write down in morse code the following text:
	  <b>
        "The quick brown fox jumps over the lazy dog."
      </b>
	  You may use a dash for "dah" and a point for "dit".
	</li>
	<li>
	  Listen to
      <img src="./src/note.png" title="listen" alt="(bip beep)">
      <a href="./download/morse_training.wav">
        morse sound
      </a>
      and write down what is sent, either by hand or directly into
	  your keyboard. In reality the text would probably be sent with
	  little higher speed. And with some random spaces between
	  characters and words.
    </li>
  </ol>

  <h3>
	<a name="prg" href="solutions/index.php#prg">
	  Programming
	</a>
  </h3>
  <ol>
	<li>
	  How can you teach a computer? Sketch a model and discuss on
	  its feasibility!
    </li>
	<li>
	  Suppose you want that all teachers in a school give marks
	  for all students. The whole thing must run on a webserver, in
	  a LAMP environment. How could this be accomplished?
    </li>
	<li>
	  Given a set of (<i>x<sub>i</sub></i>,<i>y<sub>i</sub></i>), <i>i</i>=1...<i>N</i>.
      Program a set of artificial intelligence routines to find
      the best fit interpolating formula. Quality is measured by
      the sum of least square distances in
      <i>
        x
      </i>
      or
      <i>
        x
      </i>
      &amp;
      <i>
        y
      </i>
      direction.
	</li>
  </ol>

  <h2>
	Download Section
  </h2>

  There exists some really interesting software to help you with
  solving those problems. Explore the 
  <a href="./download/">
    <i>
      cagibi
    </i>
  </a>.


  <h2>
	Summary
  </h2>

  I presented some of the little tasks I had to fulfill
  myself. Go ahead and search for new challenges by yourself.
  <img src="./src/innocent.png" title="Come on!" alt=">-?">
  There are lots!

  <h2>
	Questions ???
  </h2>

  If you found something unclear 
  <img src="./src/undecided.png" title="???" alt="(???)"> 
  about this site, do not hesitate to contact me. Often others
  will struggle with the same problems you have found here, so
  be sure to let me know. I am also glad to get general
  feedback, candies, and all other things that could go under
  donations. Whether I will ever get something? I will let you
  know...
</div>
