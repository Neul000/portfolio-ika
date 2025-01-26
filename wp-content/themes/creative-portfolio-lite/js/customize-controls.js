( function( api ) {

	// Extends our custom "creative-portfolio-lite" section.
	api.sectionConstructor['creative-portfolio-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );