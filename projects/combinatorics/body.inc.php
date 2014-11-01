  <ol class="problem">
    <h3>
	  Combinatorics
    </h3>
    <table align="right" margin="10px">
	  <tr><td style="width:1em">1</td><td style="width:1em">2</td><td style="width:1em">5</td><td style="width:1em">4</td><td style="width:1em">6</td><td style="width:1em">3</td></tr>
	  <tr><td>5</td><td>3</td><td>6</td><td>1</td><td>4</td><td>2</td></tr>
	  <tr><td>4</td><td>6</td><td>3</td><td>5</td><td>2</td><td>1</td></tr>
	  <tr><td>2</td><td>1</td><td>4</td><td>3</td><td>5</td><td>6</td></tr>
	  <tr><td>3</td><td>5</td><td>2</td><td>6</td><td>1</td><td>4</td></tr>
	  <tr><td>6</td><td>4</td><td>1</td><td>2</td><td>3</td><td>5</td></tr>
    </table>

	<li>
      Given following setup: You have a square of 6x6 towers, with
	  sizes 1..6 distributed such that in each row and column there
	  is only one tower of a given size. You furthermore have a set
	  of 6x6 colored bricks, each color with bricks of size from 1
	  to 6. A brick is set validly, if there is only one brick of a
	  given color in each row and column and if <div id="math">size(brick) + size(tower) = 7</div>
	  i.e. all bricks end up on the same level. Find an algorithm to
	  produce a correct mapping for the tower sizes in the table to the
	  right.
    </li>
	<li>
	  Same exercise as before. In order to check the validity of the
	  above code, write a program that steps through all valid color
	  permutations and searches the lowest deflection from equal height.
    </li>
	<li>
	  For mathematicians: Discuss on the number of possible
	  solutions. Generalize for arbitrary sizes of the array.
    </li>
  </ol>



  <ol class="solution">
    <h3>
      Solutions
    </h3>
    <li>
	  I found no efficient implementation for this problem in Prolog
	  (where such problems are solved most easily), so here is a
      <a href='dddcube_java_algo.tar.lzma'>
        Java implementation
      </a>
      of an algorithm with depth first search.
    </li>
    <li>
	  If you run the first code, you get no result. Possibly, there was
	  an error in the first implementation, so I switched back to
      <a href="dddcube_java_perm.java.tar.lzma">
        brute force
      </a>

      methods using breadth first search. Best approximation is up to 34
	  towers, the two last ones being off by 1.
    </li>
    <li>
	  As a matter of fact, I'm not sure myself... Give me a hint!
	  And if you find a workaround, send me a patch for the sourcecode!
    </li>
  </ol>
