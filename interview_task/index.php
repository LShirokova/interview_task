<?
function ShowFizzBuzz () {
	for( $i=1; $i<=30; $i++ ) {
		$out = $i;
		if( $i % 3 == 0 ) {
			$out = 'Fizz';
		}
		if( $i % 5 == 0 ) {
			$out = 'Buzz';
		}
		if( $i % 15 == 0 ) {
			$out = 'FizzBuzz';
		}
		echo $out . '<br>';
	}
}

ShowFizzBuzz ();