function delayRunner(time)
{
	return new Promise(resolve => setTimeout(resolve, time));
}

async function runnerOdometer(el)
{
	let params = {
		'el' : el ,
		animation : 'count' ,
		'duration': 1000,
	}

	let format = $( el ).attr( 'data-format' )
	if( format !== 'undefined' )
	{
		params.format = format
	}

	/*
	// TODO
	let animation = $( el ).attr( 'data-animation' )
	if( undefined !== 'undefined' )
	{
		params.animation = 'count';
	}*/

	let odo = new Odometer( params );

	await delayRunner(100);
	await updateValue(odo, $( el ).attr( 'data-value' ));
}
async function updateValue(odo, value)
{
	await delayRunner(100);
	odo.update( value );
}

$( function() {
	setInterval( function() {
		$( '.odometer-item:not(".odometer-run")' ).each( function( id , el ) {
			$( el ).addClass( "odometer-run" );
			runnerOdometer( el )
		} );
	} , 300 );
} );
