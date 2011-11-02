<!--
<META http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<TITLE>Layouts Inside Tabs</TITLE>
-->
<link rel="stylesheet" type="text/css" href="http://localhost/Renovation_solutions/css/layout.css"/>
<link rel="stylesheet" type="text/css" href="http://localhost/Renovation_solutions/js/css/jquery-ui-1.8.16.custom.css"/>
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
<div id="layoutbody" class="custom"> 
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



</div>