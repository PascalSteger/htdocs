
  <ol class="problem">
    <h3>
	  Programming
    </h3>
    <li>
        You want to break up a big group of users into grous, and distribute them evenly into those, by respecting their preferences.
    </li>
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


  <ol class="solution">
    <h3>
	  Solutions
    </h3>
    <li>
        A <a href='./WK'>PHP-coded solution</a> is available. Main idea is to ask the preferences first, then filling up the available slots with first preferences, and then distributing the remaining users on the remaining places, automatically.
    </li>
	<li>
	  A program called "SelfProg" is under construction. So far a
	  sample text is written and compiled. Next step is to introduce
	  some randomness in it, and to master successful
	  compilation. Stay tuned.
    </li>
	<li>
	  The solution is available in

      <a href="../qualistud/index.php">
        a separate folder
      </a>.

      First let's start with some simple database creation, access,
      writing and reading of simple tables.
    </li>

	<li>
	  So far, the frame work for the different modules is developed
	  and available as
      <a href="steger_2010_2dfit.tar.gz">
        gzipped tar file
      </a>.

      Input and normalization is performed, basic functions are
      learned by a two-layer forward connected neural network,
      described in
      <a href="steger_2010_2dfit.pdf">
        a paper draft
      </a>.
	</li>
  </ol>
