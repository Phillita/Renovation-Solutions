
        <META http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <TITLE>Layouts Inside Tabs</TITLE>



        <link rel="stylesheet" type="text/css" href="http://localhost/Renovation_solutions/js/css/jquery-ui-1.8.16.custom.css"/>



        <STYLE type="text/css">

            html {

                /* allow scrolling if layout hits min-width/height */

                overflow:		auto !important; /* override Layout default of 'hidden' */

            }

            body {

                background:		#777;

                color:			#FFF;

                font-family:	Verdana, Arial, Helvetica, sans-serif;

                font-size:		14px;

                padding:		0 20px !important; /* override Layout default of '0' */

                margin:			0;

                /* set min dimensions for layout - window will scroll if smaller than this */

                min-width:		950px;

                min-height:		600px;

                /* max-width works for left-aligned layout - need a container-div to 'center' the layout */

                /*max-width:		1000px;*/

            }

            p {

                margin:		1ex 0;

            }

            .custom a			{ color: blue; text-decoration: none; }

            .custom a:visited	{ color: purple; }

            .custom a:hover		{ color: red; text-decoration: underline; }



            /*
    
             *	Page Content Styles
    
            */

            /* Loading... display */

            #page-loading {

                color:		#FFF;

                font-size:	3em;

                position:	absolute;

                left:		40%;

                top:		40%;

            }

            /* Notes in center-pane of Tab1 */

            BLOCKQUOTE,

            UL { margin-top: 1ex; margin-bottom: 1em; }

            LI { margin-top: 1ex; margin-bottom: 1ex; }

            H4 { margin: 1em 0 1ex; font-size: 1.1em; }

            #notes { padding: 1em 1.5em; }

            #notes > H4 { margin-top: 0; }



            /*
    
             *	Generic Layout Styles
    
            */

            .container { /* override default style */

                padding:	0 !important;

                overflow:	hidden !important;

            }

            .ui-layout-pane {

                padding:	0;

                overflow:	hidden;

            }

            .ui-widget-content { /* used as the ui-layout-content class */

                padding:	1ex;

                overflow:	auto;

            }

            .hidden { /* apply to elements to avoid Flash of Content */

                display:	none;

            }

            .allow-overflow	{

                overflow:		visible;

            }

            /* HIDE all pane-elements until initialized */

            .ui-layout-north,

            .ui-layout-south,

            .ui-layout-west,

            .ui-layout-east,

            .ui-layout-center {

                display:	none;

            }



            /*
    
             *	Outer-Tabs Layout - Structural
    
             *
    
             *	NOTE: already set 'ui-layout-pane' to be: overflow: hidden; padding: 0
    
            */

            #outer-center { /* #tabbuttonss & #tabpanels container */

                background:		#DDD;	/* need a background to contrast panes - overridden by custom theme */

                padding:		0;		/* not sure why need this again? */

            }

            #tabbuttons {	/* tabsContainerLayout - north-pane */

                overflow:	visible; /* so tabs (LI) can overlap bottom-border */

            }

            #tabpanels {}	/* tabsContainerLayout - center-pane */

            #tabpanels .tab-panel { /* tab-layout containers */

                width:		100%;

                height:		100%;

                padding:	0;

                overflow:	hidden;

            }

            /*
    
             *	Inner-Tabs
    
            */

            #innerTabs.ui-layout-center {

                padding:	0;

            }

            #innerTabs > DIV:first-child {} 	/* header-title */

            #innerTabs > UL {} 					/* tab-buttons - header */

            #innerTabs .ui-widget-content {}	/* tab-panels-wrapper - content-pane */

            #innerTabs > DIV {} 			/* tab-content wrappers: #simpleTab1, #simpleTab2, etc. */

            .custom #innerTabs > UL {			/* custom theme */

                border-radius:			0;		/* override UI theme */

                -moz-border-radius:		0;

                -webkit-border-radius:	0;

            }

            .custom #innerTabs > UL LI:first-child { /* first tab */

                margin-left:	10px;

            }

            /*
    
             *	Accordions
    
            */

            .accordion { /* Accordion containers */

                height:		100%;

            }



            /*
    
             *	Outer Layout - Cosmetic
    
            */

            #outer-north {

                font-weight:	bold;

                padding:		1em 1em;

            }

            #outer-north div.buttons {

                float:			right;

                margin-right:	200px;

                margin-top:		-4px;

            }

            #outer-south {

                padding:		.5em 1em;

            }



            /*
    
             *	Custom Theme
    
            */

            /* outer-layout colors */

            body.custom , /* class used to trigger 'custom theme' for all elements */

            .custom #outer-north ,

            .custom #outer-center ,

            .custom #outer-south {

                background:		#776;

            }

            /* Tabs Wrapper & Buttons*/

            #outer-center.ui-tabs ,

            #outer-center.ui-tabs>ul {

                border-bottom:	0;

                padding-bottom:	0;

                border-radius:			0;

                -moz-border-radius:		0;

                -webkit-border-radius:	0;

            }

            .custom #outer-center.ui-tabs ,

            .custom #outer-center.ui-tabs>ul {

                background:	transparent;

                border:		0;

                padding:	0;

            }

            .custom #tabbuttons LI { /* tab wrapper */

                border:			0;

                margin-left:	5px;

            }

            .custom #tabbuttons LI:first-child { /* first tab */

                margin-left:	15px;

            }

            .custom #tabbuttons LI A { /* tab links/style */

                font-weight:	bold;

                cursor:			pointer !important; /* override theme - for 'sorting' */

                border-radius:					0;

                -moz-border-radius:				0;

                -webkit-border-radius:			0;

                border-top-radius:				4px;

                -moz-border-radius-topleft: 	4px;

                -moz-border-radius-topright: 	4px;

                -webkit-border-top-left-radius: 4px;

                -webkit-border-top-right-radius: 4px;

            }

            /*	Tab Panels & Contents */

            .toolbar {

                overflow:		hidden;

                /*border-top:		0 !important;*/

            }

            .custom .toolbar { /* north AND south panes */

                background:		#666; /* changed below to match tab-color */

                color:			#FFF !important; /* override Theme */

                font-weight:	bold;

                padding:		6px 2em;

            }

            .custom #tabpanels .tab-panel {

                border-radius:			8px;

                -moz-border-radius:		8px;

                -webkit-border-radius:	8px;

            }

            .custom .ui-layout-north > .toolbar { /* north 'toolbar' */

                border:			0;

                border-top-radius:				8px;

                -moz-border-radius-topleft: 	8px;

                -moz-border-radius-topright: 	8px;

                -webkit-border-top-left-radius: 8px;

                -webkit-border-top-right-radius: 8px;

            }

            .custom .ui-layout-south > .toolbar { /* south 'statusbar' */

                border-bottom-radius:				8px;

                -moz-border-radius-bottomleft: 		8px;

                -moz-border-radius-bottomright: 	8px;

                -webkit-border-bottom-left-radius:	8px;

                -webkit-border-bottom-right-radius: 8px;

            }

            /*
    
             *	Can't pad #tabpanels .tab-panel containers because have width/height = 100%
    
             *	so must pad outer-edges of inner-panes instead to get nice whitespace
    
            */

            .tab-panel .ui-layout-west { padding-left:	10px; } /* same as west__spacing_closed */

            .tab-panel .ui-layout-east { padding-right:	10px; } /* same as east__spacing_closed */

            /*  
    
             *	Every inner-layout is made up of header, content and footer panels
    
            */

            .ui-widget-header {

                padding:		4px 1em;

            }

            .ui-widget-footer {

                font-size:		.85em;

                font-weight:	normal !important;

            }

            .custom .ui-widget-header {

                border:			0;

                color:			#FFF;

                font-size:		.85em;

                font-weight:	bold;

                letter-spacing:	1px;

                text-transform:	uppercase;

            }

            .custom .ui-widget-footer { /* NOTE: no such class, so footer ALSO has: ui-widget-header */

                border:			0;

                color:			#FFF;

                letter-spacing:	normal;

                text-transform:	none;

                text-align:		center;

                padding:		3px 1ex 4px;

            }

            .custom .ui-widget-content {

                /* padding & overflow were already set above under 'Generic Layout Styles' */

                border:			0;

                background:		#F9F9F9;

                color:			#000;

            }

            /* #tab1 = blue-green */

            .custom #tabbuttons .tab1 a 	{ background: #007182; color: #FFF; } /* override UI Theme */

            .custom #tabpanels #tab1,

            .custom #tab1 .ui-layout-resizer-sliding ,

            .custom #tab1 .ui-layout-west ,		/* sidebar panes too - for when 'sliding' */

            .custom #tab1 .ui-layout-east	{ background: #83c9d4; }

            .custom #tab1 .ui-layout-resizer-closed { border: 1px solid #378c99; }

            .custom #tab1 .toolbar			{ border:	0; }

            .custom #tab1 .toolbar ,

            .custom #tab1 .ui-widget-header { background: #007182; } /* override UI Theme */

            .custom #tab1 .ui-widget-footer	{ background: #378c99; }

            /*
    
            .custom #tab1 > .ui-layout-center ,
    
            .custom #tab1 .ui-layout-pane .ui-layout-pane { border: 2px solid #378c99; }
    
            .custom #tab1 .ui-widget-content	{ border: 1px solid #007182; }
    
            */

            /* #tab2 = green */

            .custom #tabbuttons .tab2 a 	{ background: #16b81e; color: #FFF; } /* override UI Theme */

            .custom #tabpanels #tab2,

            .custom #tab2 .ui-layout-resizer-sliding ,

            .custom #tab2 .ui-layout-west ,		/* sidebar panes too - for when 'sliding' */

            .custom #tab2 .ui-layout-east	{ background: #88e48d; }

            .custom #tab2 .ui-layout-resizer-closed { border: 1px solid #4cbf52; }

            .custom #tab2 .toolbar ,

            .custom #tab2 .ui-widget-header { background: #16b81e; border: 0; }

            .custom #tab2 .ui-widget-footer { background: #4cbf52; border: 0; }

            /*
    
            .custom #tab2 > .ui-layout-center ,
    
            .custom #tab2 .ui-layout-pane .ui-layout-pane { border: 2px solid #4cbf52; }
    
            .custom #tab2 .ui-widget-content	{ border: 1px solid #16b81e; }
    
            */

            /* #tab3 = purple */

            .custom #tabbuttons .tab3 a 	{ background: #6f2ab8; color: #FFF; } /* override UI Theme */

            .custom #tabpanels #tab3,

            .custom #tab3 .ui-layout-resizer-sliding ,

            .custom #tab3 .ui-layout-west ,		/* sidebar panes too - for when 'sliding' */

            .custom #tab3 .ui-layout-east	{ background: #c3a2e4; }

            .custom #tab3 .ui-layout-resizer-closed { border: 1px solid #9055cf; }

            .custom #tab3 .toolbar ,

            .custom #tab3 .ui-widget-header	{ background: #6f2ab8; }

            .custom #tab3 .ui-widget-footer	{ background: #9055cf; }

            /*
    
            .custom #tab3 > .ui-layout-center ,
    
            .custom #tab3 .ui-layout-pane .ui-layout-pane { border: 2px solid #9055cf; }
    
            .custom #tab3 .ui-widget-content{ border: 1px solid #6f2ab8; }
    
            */





            /*
    
             *	Layout Resizers 
    
            */

            .ui-layout-resizer-sliding {

                background-color:	#BBB; /* overridden by custom theme, above */

            }

            .ui-layout-resizer-open-hover,

            .ui-layout-resizer-drag, /* cloned bar */

            .ui-layout-resizer-dragging {

                background:			#BBB !important; /* need higher specificity */

                opacity: 			0.5 !important;  /* ditto - not sure why? */

                filter: 			Alpha(Opacity=50) !important;

            }

            .ui-layout-resizer-dragging-limit {

                background:			#d44848 !important;

            }

            .ui-layout-resizer-closed-hover {

                background:			#ebd5aa;

            }



            /*
    
             *	Layout Togglers 
    
            */

            .ui-layout-toggler {

                background-color: #FFF;

                opacity:		.60;

                filter:			Alpha(Opacity=60);

            }

            .ui-layout-resizer-open-hover .ui-layout-toggler, 

            .ui-layout-toggler-hover {

                opacity:		1;

                filter:			Alpha(Opacity=100);

            }

            .ui-layout-toggler .ui-icon			{ margin:		0 auto; } /* default - center horizontally */

            .ui-layout-toggler-north .ui-icon ,

            .ui-layout-toggler-south .ui-icon	{ margin-top:	-3px; } /* tweak arrow vertical-center */

            .ui-layout-toggler-west .ui-icon ,

            .ui-layout-toggler-east .ui-icon	{ margin-left:	-3px; } /* tweak arrow horizontal-center */

            /* assign arrows for each side & state */

            .ui-layout-toggler-north-closed .ui-icon, 

            .ui-layout-toggler-south-open .ui-icon {

                background-position: -64px -192px;	/* ui-icon-circle-triangle-s */

                background-position: -128px -16px;	/* ui-icon-triangle-2-n-s */

                background-position: -64px -16px;	/* ui-icon-triangle-1-s */

            }

            .ui-layout-toggler-south-closed .ui-icon, 

            .ui-layout-toggler-north-open .ui-icon {

                background-position: -96px -192px;	/* ui-icon-circle-triangle-n */

                background-position: -128px -16px;	/* ui-icon-triangle-2-n-s */

                background-position: 0 -16px;		/* ui-icon-triangle-1-n */

            }

            .ui-layout-toggler-west-closed .ui-icon, 

            .ui-layout-toggler-east-open .ui-icon {

                background-position: -48px -192px;	/* ui-icon-circle-triangle-e */

                background-position: -144px -16px;	/* ui-icon-triangle-2-e-w */

                background-position: -32px -16px;	/* ui-icon-triangle-1-e */

            }

            .ui-layout-toggler-east-closed .ui-icon, 

            .ui-layout-toggler-west-open .ui-icon {

                background-position: -80px -192px;	/* ui-icon-circle-triangle-w */

                background-position: -144px -16px;	/* ui-icon-triangle-2-e-w */

                background-position: -96px -16px;	/* ui-icon-triangle-1-w */

            }

            /* ALT Graphics
    
            .ui-layout-toggler-east-closed, 
    
            .ui-layout-toggler-west-open	{ background: transparent url(../lib/img/toggle-lt.gif) no-repeat right center; }
    
            .ui-layout-toggler-west-closed, 
    
            .ui-layout-toggler-east-open	{ background: transparent url(../lib/img/toggle-rt.gif) no-repeat left center; }
    
            .ui-layout-toggler-south-closed, 
    
            .ui-layout-toggler-north-open	{ background: transparent url(../lib/img/toggle-up.gif) no-repeat center bottom; }
    
            .ui-layout-toggler-north-closed, 
    
            .ui-layout-toggler-south-open	{ background: transparent url(../lib/img/toggle-dn.gif) no-repeat center top; }
    
            */



        </STYLE>

        <script src="http://code.jquery.com/jquery-1.6.2.js"></script>       

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="http://localhost/Renovation_solutions/js/jquery.layout.js"></script> 


        <SCRIPT type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery.layout.resizeTabLayout-1.0.js"></SCRIPT>

        <SCRIPT type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery.layout.resizePaneAccordions-1.0.js"></SCRIPT>



        <SCRIPT type="text/javascript">
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

                ,	south__paneSelector:	"#outer-south" 

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

                .layout( tabsContainerLayoutOptions )

                ;



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



                addThemeSwitcher('#outer-north',{ top: '13px', right: '20px' });

                // if a theme is applied by ThemeSwitch *onLoad*, it may change the height of some content,

                // so we need to call resizeLayout to 'correct' any header/footer heights affected

                // call multiple times so fast browsers update quickly, and slower ones eventually!

                // NOTE: this is only necessary because we are changing CSS *AFTER LOADING* (eg: themeSwitcher)

                //setTimeout( resizePageLayout, 1000 ); /* allow time for browser to re-render for theme */

                //setTimeout( resizePageLayout, 5000 ); /* for really slow browsers */

            });

        </SCRIPT> 
    <BODY class="custom"> 
        <DIV id="page-loading">Loading...</DIV>        
        <DIV id="outer-south" class="hidden">Outer-South Pane</DIV>
        <DIV id="outer-center" class="hidden">
            <UL id="tabbuttons" class="hidden">
                <LI class="tab1"><A href="#tab1">Outer Tab One</A></LI>
                <LI class="tab2"><A href="#tab2">Outer Tab Two</A></LI>
                <LI class="tab3"><A href="#tab3">Outer Tab Three</A></LI>
            </UL>
            <DIV id="tabpanels">
                <DIV id="tab1" class="tab-panel ui-tabs-hide">
                    <DIV class="ui-layout-north ui-widget">
                        <DIV class="toolbar ui-widget-content ui-state-active">
                            Toolbar - tab1
                        </DIV>
                    </DIV>
                    <DIV class="ui-layout-south ui-widget">
                        <DIV class="toolbar ui-widget-content ui-state-default">
                            Statusbar - tab1
                        </DIV>
                    </DIV>
                    <DIV class="ui-layout-center">
                        <DIV class="ui-widget-header ui-corner-top">Center-Center</DIV>
                        <DIV id="notes" class="ui-widget-content">
                            <H4>Layout Version</H4>
                            <P><STRONG>This page uses Layout 1.3 RC-29.15 (or higher).</STRONG>
                                The content-sizing in this version was improved for both accuracy and speed.
                                It also does auto-resizing of directly nested-layouts.
                                Plus new functionality was added so layouts could be created when not visible.
                            </P>
                            <H4>Layout Notes</H4>
                            <UL>
                                <LI>BODY has 20px left/right padding for cosmetic purposes</LI>
                                <LI>BODY has min-width/min-height, so page/layout will scroll if gets too small</LI>
                                <LI>The Tabs are sortable (grab-n-drag to rearrange)</LI>
                            </UL>
                            <H4>Themes</H4>
                            <UL>
                                <LI>Click '<STRONG>Toggle Custom Theme</STRONG>' above to remove the
                                    custom theme that is active onLoad. 
                                </LI>
                                <LI>Click '<STRONG>Resize Layout</STRONG>' above after selecting a new
                                    UI Theme from the picklist because Layout may need to adjust header/footer 
                                    heights to account for different padding and/or borders in the new themes.
                                </LI>
                            </UL>
                        </DIV>
                        <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">Center-Center Footer</DIV>
                    </DIV>
                    <DIV class="ui-layout-west">
                        <DIV class="ui-layout-north">
                            <DIV class="ui-widget-header ui-corner-top">West-North</DIV>
                            <DIV class="ui-widget-content">
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                            </DIV>
                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-North Footer&nbsp; (will&nbsp;wrap&nbsp;when&nbsp;narrow)</DIV>
                        </DIV>
                        <DIV class="ui-layout-center">
                            <DIV class="ui-widget-header ui-corner-top">West-Center</DIV>
                            <DIV class="ui-widget-content">
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                            </DIV>
                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-Center Footer&nbsp; (will&nbsp;wrap&nbsp;when&nbsp;narrow)</DIV>
                        </DIV>
                        <DIV class="ui-layout-south">
                            <DIV class="ui-widget-header ui-corner-top">West-South</DIV>
                            <DIV class="ui-widget-content">
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                            </DIV>
                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-South Footer</DIV>
                        </DIV>
                    </DIV>
                    <DIV class="ui-layout-east">
                        <DIV class="ui-layout-center">
                            <DIV class="ui-widget-header ui-corner-top">East-Center</DIV>
                            <DIV class="ui-widget-content">
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                                <P>List of Items</P>
                            </DIV>
                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">East-Center Footer&nbsp; (will&nbsp;wrap&nbsp;when&nbsp;narrow)</DIV>

                        </DIV>

                        <DIV class="ui-layout-south">

                            <DIV class="ui-widget-header ui-corner-top">East-South</DIV>

                            <DIV class="ui-widget-content">

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">East-South Footer</DIV>

                        </DIV>

                    </DIV>

                </DIV><!-- /#tab1 -->



                <DIV id="tab2" class="tab-panel ui-tabs-hide">

                    <DIV class="ui-layout-north ui-widget">

                        <DIV class="toolbar ui-widget-content ui-state-active">

                            Toolbar - tab2

                        </DIV>

                    </DIV>

                    <DIV class="ui-layout-south ui-widget">

                        <DIV class="toolbar ui-widget-content ui-state-default">

                            Statusbar - tab2

                        </DIV>

                    </DIV>

                    <DIV class="ui-layout-center">

                        <DIV class="ui-widget-header ui-corner-top">Center-Center</DIV>

                        <DIV class="ui-widget-content container">

                            <DIV class="accordion">



                                <H3><A href="#">Section 1</A></H3>

                                <DIV>

                                    <P>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

                                        Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</P>

                                    <P>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

                                        Vestibulum a velit eu ante scelerisque vulputate.</P>

                                </DIV>



                                <H3><A href="#">Section 2</A></H3>

                                <DIV>

                                    <P style="font-weight: bold;">Sed Non Urna</P>

                                    <P>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

                                        Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

                                        faucibus interdum tellus libero ac justo.</P>

                                    <P>Vivamus non quam. In suscipit faucibus urna.</P>

                                </DIV>



                                <H3><A href="#">Section 3</A></H3>

                                <DIV>

                                    <P>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

                                        Phasellus pellentesque purus in massa. Aenean in pede.</P>

                                    <P>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

                                        magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</P>

                                    <UL>

                                        <LI>List item one</LI>

                                        <LI>List item two</LI>

                                        <LI>List item three</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                        <LI>Another Item</LI>

                                    </UL>

                                </DIV>



                                <H3><A href="#">Section 4</A></H3>

                                <DIV>

                                    <P>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

                                        ac turpis egestas.</P>

                                    <P>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

                                        Aenean lacinia mauris vel est.</P>

                                    <P>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</P>

                                </DIV>



                            </DIV>

                        </DIV>

                        <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">Center-Center Footer</DIV>

                    </DIV>

                    <DIV class="ui-layout-west">

                        <DIV class="accordion">



                            <H3><A href="#">Section 1</A></H3>

                            <DIV>

                                <P>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

                                    Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</P>

                                <P>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

                                    Vestibulum a velit eu ante scelerisque vulputate.</P>

                            </DIV>



                            <H3><A href="#">Section 2</A></H3>

                            <DIV>

                                <P style="font-weight: bold;">Sed Non Urna</P>

                                <P>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

                                    Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

                                    faucibus interdum tellus libero ac justo.</P>

                                <P>Vivamus non quam. In suscipit faucibus urna.</P>

                            </DIV>



                            <H3><A href="#">Section 3</A></H3>

                            <DIV>

                                <P>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

                                    Phasellus pellentesque purus in massa. Aenean in pede.</P>

                                <P>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

                                    magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</P>

                                <UL>

                                    <LI>List item one</LI>

                                    <LI>List item two</LI>

                                    <LI>List item three</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                    <LI>Another Item</LI>

                                </UL>

                            </DIV>



                            <H3><A href="#">Section 4</A></H3>

                            <DIV>

                                <P>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

                                    ac turpis egestas.</P>

                                <P>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

                                    Aenean lacinia mauris vel est.</P>

                                <P>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</P>

                            </DIV>



                        </DIV>

                        <!--
                        
                        <DIV class="ui-layout-north">
                        
                                <DIV class="ui-widget-header ui-corner-top">West-North</DIV>
                        
                                <DIV class="ui-widget-content">
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                </DIV>
                        
                                <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-North Footer</DIV>
                        
                        </DIV>
                        
                        <DIV class="ui-layout-center">
                        
                                <DIV class="ui-widget-header ui-corner-top">West-Center</DIV>
                        
                                <DIV class="ui-widget-content">
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                </DIV>
                        
                                <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-Center Footer</DIV>
                        
                        </DIV>
                        
                        <DIV class="ui-layout-south">
                        
                                <DIV class="ui-widget-header ui-corner-top">West-South</DIV>
                        
                                <DIV class="ui-widget-content">
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                        <P>List of Items</P>
                        
                                </DIV>
                        
                                <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-South Footer</DIV>
                        
                        </DIV>
                        
                        -->

                    </DIV>

                    <DIV class="ui-layout-east">

                        <DIV class="ui-layout-center">

                            <DIV class="ui-widget-header ui-corner-top">East-Center</DIV>

                            <DIV class="ui-widget-content">

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">East-Center Footer</DIV>

                        </DIV>

                        <DIV class="ui-layout-south">

                            <DIV class="ui-widget-header ui-corner-top">East-South</DIV>

                            <DIV class="ui-widget-content">

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">East-South Footer</DIV>

                        </DIV>

                    </DIV>

                </DIV><!-- /#tab2 -->



                <DIV id="tab3" class="tab-panel ui-tabs-hide">

                    <DIV class="ui-layout-north ui-widget">

                        <DIV class="toolbar ui-widget-content ui-state-active">

                            Toolbar - tab3

                        </DIV>

                    </DIV>

                    <DIV class="ui-layout-south ui-widget">

                        <DIV class="toolbar ui-widget-content ui-state-default">

                            Statusbar - tab3

                        </DIV>

                    </DIV>

                    <DIV id="innerTabs" class="ui-layout-center container tabs">

                        <DIV class="ui-widget-header ui-corner-top"> Center -Center </DIV>

                        <UL>

                            <LI class="tab1"><A href="#simpleTab1">Tab #1</A></LI>

                            <LI class="tab2"><A href="#simpleTab2">Tab #2</A></LI>

                            <LI class="tab3"><A href="#simpleTab3">Tab #3</A></LI>

                        </UL>

                        <DIV class="ui-widget-content" style="border-top: 0;">



                            <DIV id="simpleTab1" class="container" style="height: 100%;">

                                <DIV class="accordion">



                                    <H3><A href="#">Section 1</A></H3>

                                    <DIV>

                                        <P>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

                                            Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</P>

                                        <P>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

                                            Vestibulum a velit eu ante scelerisque vulputate.</P>

                                    </DIV>



                                    <H3><A href="#">Section 2</A></H3>

                                    <DIV>

                                        <P style="font-weight: bold;">Sed Non Urna</P>

                                        <P>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

                                            Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

                                            faucibus interdum tellus libero ac justo.</P>

                                        <P>Vivamus non quam. In suscipit faucibus urna.</P>

                                    </DIV>



                                    <H3><A href="#">Section 3</A></H3>

                                    <DIV>

                                        <P>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

                                            Phasellus pellentesque purus in massa. Aenean in pede.</P>

                                        <P>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

                                            magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</P>

                                        <UL>

                                            <LI>List item one</LI>

                                            <LI>List item two</LI>

                                            <LI>List item three</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                            <LI>Another Item</LI>

                                        </UL>

                                    </DIV>



                                    <H3><A href="#">Section 4</A></H3>

                                    <DIV>

                                        <P>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

                                            ac turpis egestas.</P>

                                        <P>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

                                            Aenean lacinia mauris vel est.</P>

                                        <P>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</P>

                                    </DIV>



                                </DIV>

                            </DIV>



                            <DIV id="simpleTab2">

                                Tab #2 Content

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                            </DIV>



                            <DIV id="simpleTab3"> Tab #3 Content </DIV>



                        </DIV>

                        <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">Center-Center Footer</DIV>

                    </DIV>

                    <DIV class="ui-layout-west">

                        <DIV class="ui-layout-north">

                            <DIV class="ui-widget-header ui-corner-top">West-North</DIV>

                            <DIV class="ui-widget-content">

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-North Footer</DIV>

                        </DIV>

                        <DIV class="ui-layout-center">

                            <DIV class="ui-widget-header ui-corner-top">West-Center</DIV>

                            <DIV class="ui-widget-content">

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-Center Footer</DIV>

                        </DIV>

                        <DIV class="ui-layout-south">

                            <DIV class="ui-widget-header ui-corner-top">West-South</DIV>

                            <DIV class="ui-widget-content">

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">West-South Footer</DIV>

                        </DIV>

                    </DIV>

                    <DIV class="ui-layout-east">

                        <DIV class="ui-layout-center">

                            <DIV class="ui-widget-header ui-corner-top">East-Center</DIV>

                            <DIV class="ui-widget-content">

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                                <P>List of Items</P>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">East-Center Footer</DIV>

                        </DIV>

                        <DIV class="ui-layout-south">

                            <DIV class="ui-widget-header ui-corner-top">East-South</DIV>

                            <DIV class="ui-widget-content">

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                                <DIV><A href="#">Another Item</A></DIV>

                            </DIV>

                            <DIV class="ui-widget-footer ui-widget-header ui-corner-bottom">East-South Footer</DIV>

                        </DIV>

                    </DIV>

                </DIV><!-- /#tab3 -->



            </DIV><!-- /#tabpanels -->



        </DIV><!-- /#outer-center -->



    </BODY>