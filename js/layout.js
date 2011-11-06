    /*
     *	Define options for all the layouts
     */

    var pageLayoutOptions = {
        name:					'pageLayout' // only for debugging
        ,	resizeWithWindowDelay:	250		// delay calling resizeAll when window is *still* resizing
        //,	resizeWithWindowMaxDelay: 2000	// force resize every XX ms while window is being resized
        ,	resizable:				false
        ,	slidable:				false
        ,	closable:				false
        ,	north__paneSelector:	"#outer-north"
        ,	center__paneSelector:	"#outer-center" 
        ,	south__spacing_open:	0
        ,	north__spacing_open:	0
    };

    var tabsContainerLayoutOptions = {
        name:					'tabsContainerLayout' // only for debugging
        ,	resizable:				false
        ,	slidable:				false
        ,	closable:				false
        ,	north__paneSelector:	"#tabbuttons"
        ,	center__paneSelector:	"#tabpanels" 
        ,	spacing_open:			0
        ,	center__onresize:		$.layout.callbacks.resizeTabLayout // resize ALL visible layouts nested inside
    }; 

    var tabLayoutOptions = {
        name:					'tabPanelLayout' // only for debugging
        ,	resizeWithWindow:		false	// required because layout is 'nested' inside tabpanels container
        //,	resizeWhileDragging:	true	// slow in IE because of the nested layouts
        ,	resizerDragOpacity:		0.5
        ,	north__resizable:		false
        ,	south__resizable:		false
        ,	north__closable:		false
        ,	south__closable:		false
        ,	west__minSize:			200
        ,	east__minSize:			200
        ,	center__minWidth:		400
        ,	spacing_open:			10
        ,	spacing_closed:			10
        ,	contentSelector:		".ui-widget-content"
        ,	togglerContent_open:	'<div class="ui-icon"></div>'
        ,	togglerContent_closed:	'<div class="ui-icon"></div>'
        ,	triggerEventsOnLoad:	true // so center__onresize is triggered when layout inits
        ,	center__onresize:		$.layout.callbacks.resizePaneAccordions // resize ALL Accordions nested inside
        ,	west__onresize:			$.layout.callbacks.resizePaneAccordions // ditto for west-pane
        /*
,	center__onresize: function (pane, $Pane) {
                $Pane.find(":ui-accordion").accordion("resize");
        }
         */
        //	after the layout loads, init sidebar-layouts...
        ,	onload: function ( layout ) {
            layout.panes.west.layout( sidebarLayoutOptions );
            layout.panes.east.layout( sidebarLayoutOptions );
        }
    };

    var sidebarLayoutOptions = {
        name:					'sidebarLayout' // only for debugging
        ,	showErrorMessages:		false	// some panes do not have an inner layout
        ,	resizeWhileDragging:	true
        ,   north__size:			"30%"
        ,   south__size:			"30%"
        ,	minSize:				100
        ,	center__minHeight:		100
        ,	spacing_open:			10
        ,	spacing_closed:			10
        ,	contentSelector:		".ui-widget-content"
        ,	togglerContent_open:	'<div class="ui-icon"></div>'
        ,	togglerContent_closed:	'<div class="ui-icon"></div>'
    };

    $(document).ready( function() {
//        var getHeight = $(window).height() * 0.8;
//        $("#layoutbody").height(getHeight + 'px');
        var pageLayout = $("body").layout( pageLayoutOptions ); 
        // first init the tabs inside the center-pane
        // then init the layout that wraps them
        pageLayout.panes.center
        .tabs({
            // using callback addon
            show: $.layout.callbacks.resizeTabLayout
            /* OR using a manual/custom callback
                        show: function (evt, ui) {
                                var tabLayout = $(ui.panel).data("layout");
                                if ( tabLayout ) tabLayout.resizeAll();
                        }*/
        })
        // make the tabs sortable

        .find(".ui-tabs-nav") .sortable({ axis: 'x', zIndex: 2 }) .end()
        // create the layout to wrap the tab buttons (north) and panels (center)
        .layout( tabsContainerLayoutOptions );
        // init inner-tabs inside outer-tab #3
        $("#innerTabs").tabs({
            // look for and resize inner-accordion(s) each time a tab-panel is shown
            show: $.layout.callbacks.resizePaneAccordions
        });
        
        // init ALL the tab-layouts - all use the same options
        $("#tab1").layout( tabLayoutOptions );
        $("#tab2").layout( tabLayoutOptions );
        $("#tab3").layout( tabLayoutOptions );
        // init ALL accordions (all have .accordion class assigned)
        $(".accordion").accordion({ fillSpace: true });
        /* UI pseudo-classes allow all UI elements to be easily found...
        alert( 'Number of Accordion widgets = '+ $(":ui-accordion").length );
        alert( 'Number of Tabs widgets = '+ $(":ui-tabs").length );
         */
    });