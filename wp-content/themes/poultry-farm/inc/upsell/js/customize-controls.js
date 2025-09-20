( function( api ) {

	// Extends our custom "poultry-farm" section.
	api.sectionConstructor['poultry-farm'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );