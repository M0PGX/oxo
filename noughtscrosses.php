<?php
	require_once('class_NoughtsCrosses.php');
	require_once('class_StdIn.php');
	require_once('class_TheJudge.php');
	
	$class = new NoughtsCrosses(new StdIn());
	
	if ($argv[1] == 'results')
	{
		echo $class->get_aggregate_results();
	}
	else if ($argv[1] == 'calculate')
	{
		$class->calculate_winners();
		print_r($class->get_results());
	}
	else
	{
		echo "Usage: noughtscrosses.php [ACTION]
		Actions:
		results ­ Output all­time results from all games ever.
		calculate ­ Calculate results from round of games provided 
		via STDIN.";
	}