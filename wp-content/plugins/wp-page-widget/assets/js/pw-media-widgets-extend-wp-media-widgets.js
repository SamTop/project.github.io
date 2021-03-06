var pwMediaWidgets = {};
// Extend object wp.mediaWidgets
(function($) {
	pwMediaWidgets = $.extend(pwMediaWidgets, wp.mediaWidgets);
	pwMediaWidgets.init = function(){
		var $document = $( document );
		$document.on( 'widget-added',pwMediaWidgets.handleWidgetAdded );
		$document.on( 'widget-synced widget-updated', pwMediaWidgets.handleWidgetUpdated );
		/*
		 * Manually trigger widget-added events for media widgets on the admin
		 * screen once they are expanded. The widget-added event is not triggered
		 * for each pre-existing widget on the widgets admin screen like it is
		 * on the customizer. Likewise, the customizer only triggers widget-added
		 * when the widget is expanded to just-in-time construct the widget form
		 * when it is actually going to be displayed. So the following implements
		 * the same for the widgets admin screen, to invoke the widget-added
		 * handler when a pre-existing media widget is expanded.
		 */
		$( function initializeExistingWidgetContainers() {
			var widgetContainers;
			widgetContainers = $( '.widgets-holder-wrap:not(#available-widgets)' ).find( 'div.widget' );
			widgetContainers.one( 'click.toggle-widget-expanded', function toggleWidgetExpanded() {
				var widgetContainer = $( this );
				pwMediaWidgets.handleWidgetAdded( new jQuery.Event( 'widget-added' ), widgetContainer );
			});
		});		
	}
	pwMediaWidgets.init();
})(jQuery);