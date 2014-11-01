  <ol class="problem">
    <h3>
	  Fractals
    </h3>
	<li>
	  Write a program (php/cpp) to zoom into the Mandelbrot set
      z -> z<sup>2</sup>+c using the pixel algorithm.
	</li>
	<li>
	  Write a program (php/cpp) to draw a Koch flake or other
	L-systems. The use of recursion is encouraged.
    </li>
  </ol>

  <ol class="solution">
    <h3>
	  Solutions
    </h3>

    <li>
	  Compile my
      <a href="php_mandelbrot.tar.gz">
        program
      </a>

      (in subfolder cpp) with
      <b>
        qmake && make
      </b>
      (QT required) and execute it with
      <b>
        ./mandelbrot 2 1024 768 -0.25 0
      </b>
      for a picture of size 1024*768 around (-0.25+0i) with radius
      2. Alternatively, you could look at an
      <a href="php_mandelbrot">
        interactive version
      </a>
      of this program using PHP.
    </li>
    <li>
	  The
      <a href="php_koch.tar.gz">
        program
      </a>
      is pretty much the same as the one above, for Mandelbrot. Slightly
      change the code to experiment with new L-systems. The
      <a href="php_koch">
        output
      </a>
      only shows one possibility.
    </li>
  </ol>
