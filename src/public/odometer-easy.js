$( function() {
	setInterval( function() {
		$( '.odometer-item:not(".odometer-run")' ).each( function( id , el ) {
			$( el ).addClass( "odometer-run" );

			var obj = { el : el };

			let odo = new Odometer( obj )
				.update( $( el ).attr( 'data-value' ) );
		} );
	} , 500 );
} );