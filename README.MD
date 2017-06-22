	Reads data containing the results from OXO games and presents
	the results in a variety of ways.

	There are 'Three' ways to win  - horizontal line, vertical line, 
	diagonal line (slash and backslash diagonals so that makes 
	FOUR ways to win). When a win is found, stop looking!

	In the future there could well be a situation where the data 
	is read from a file, a database or something else. Using an 
	interface will make this easy to implement at a later date. 
	For now, we use the StdIn class with the interface to read
	from STDIN. This also omits the need for the STDIN parameter
	on the calsulate_winners function, we simply tell the 
	NoughtsCrosses class which class to use to get the data.
