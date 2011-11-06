<link rel="stylesheet" type="text/css" href="http://localhost/Renovation_solutions/css/layout.css" />
<link rel="stylesheet" type="text/css" href="http://localhost/Renovation_solutions/js/css/jquery-ui-1.8.16.custom.css" />
<script src="http://code.jquery.com/jquery-1.6.2.js"></script>       
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://localhost/Renovation_solutions/js/jquery.layout.js"></script> 
<script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery.layout.resizeTabLayout-1.0.js"></script>
<script type="text/javascript" src="http://layout.jquery-dev.net/lib/js/jquery.layout.resizePaneAccordions-1.0.js"></script>
<script type="text/javascript" src="http://localhost/Renovation_solutions/js/layout.js"></script>

<div id="layoutbody" class="custom"> 
    <div id="page-loading">Loading...</div>        
    <div id="outer-center" class="hidden">
        <ul id="tabbuttons" class="hidden">
            <li class="tab1"><a href="#tab1">Outer Tab One</a></li>
            <li class="tab2"><a href="#tab2">Outer Tab Two</a></li>
            <li class="tab3"><a href="#tab3">Outer Tab Three</a></li>
        </ul>
        <div id="tabpanels">
            <div id="tab1" class="tab-panel ui-tabs-hide">
                <div class="ui-layout-north ui-widget">
                    <div class="toolbar ui-widget-content ui-state-active">
                        Toolbar - tab1
                    </div>
                </div>
                <div class="ui-layout-south ui-widget">
                    <div class="toolbar ui-widget-content ui-state-default">
                        Statusbar - tab1
                    </div>
                </div>
                <div class="ui-layout-center">
                    <div class="ui-widget-header ui-corner-top">Center-Center</div>
                    <div id="notes" class="ui-widget-content">
                        <h4>Layout Version</h4>
                        <p><strong>This page uses Layout 1.3 RC-29.15 (or higher).</strong>
                            The content-sizing in this version was improved for both accuracy and speed.
                            It also does auto-resizing of directly nested-layouts.
                            Plus new functionality was added so layouts could be created when not visible.
                        </p>
                        <h4>Layout Notes</h4>
                        <ul>
                            <li>BODY has 20px left/right padding for cosmetic purposes</li>
                            <li>BODY has min-width/min-height, so page/layout will scroll if gets too small</li>
                            <li>The Tabs are sortable (grab-n-drag to rearrange)</li>
                        </ul>
                        <h4>Themes</h4>
                        <ul>
                            <li>Click '<strong>Toggle Custom Theme</strong>' above to remove the
                                custom theme that is active onLoad. 
                            </li>
                            <li>Click '<strong>Resize Layout</strong>' above after selecting a new
                                UI Theme from the picklist because Layout may need to adjust header/footer 
                                heights to account for different padding and/or borders in the new themes.
                            </li>
                        </ul>
                    </div>
                    <div class="ui-widget-footer ui-widget-header ui-corner-bottom">Center-Center Footer</div>
                </div>
                <div class="ui-layout-west">
                    <div class="ui-layout-north">
                        <div class="ui-widget-header ui-corner-top">West-North</div>
                        <div class="ui-widget-content">
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                        </div>
                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-North Footer&nbsp; (will&nbsp;wrap&nbsp;when&nbsp;narrow)</div>
                    </div>
                    <div class="ui-layout-center">
                        <div class="ui-widget-header ui-corner-top">West-Center</div>
                        <div class="ui-widget-content">
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                        </div>
                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-Center Footer&nbsp; (will&nbsp;wrap&nbsp;when&nbsp;narrow)</div>
                    </div>
                    <div class="ui-layout-south">
                        <div class="ui-widget-header ui-corner-top">West-South</div>
                        <div class="ui-widget-content">
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                        </div>
                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-South Footer</div>
                    </div>
                </div>
                <div class="ui-layout-east">
                    <div class="ui-layout-center">
                        <div class="ui-widget-header ui-corner-top">East-Center</div>
                        <div class="ui-widget-content">
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                            <p>List of Items</p>
                        </div>
                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">East-Center Footer&nbsp; (will&nbsp;wrap&nbsp;when&nbsp;narrow)</div>

                    </div>

                    <div class="ui-layout-south">

                        <div class="ui-widget-header ui-corner-top">East-South</div>

                        <div class="ui-widget-content">

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">East-South Footer</div>

                    </div>

                </div>

            </div><!-- /#tab1 -->



            <div id="tab2" class="tab-panel ui-tabs-hide">

                <div class="ui-layout-north ui-widget">

                    <div class="toolbar ui-widget-content ui-state-active">

                        Toolbar - tab2

                    </div>

                </div>

                <div class="ui-layout-south ui-widget">

                    <div class="toolbar ui-widget-content ui-state-default">

                        Statusbar - tab2

                    </div>

                </div>

                <div class="ui-layout-center">

                    <div class="ui-widget-header ui-corner-top">Center-Center</div>

                    <div class="ui-widget-content container">

                        <div class="accordion">



                            <h3><a href="#">Section 1</a></h3>

                            <div>

                                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

                                    Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</p>

                                <p>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

                                    Vestibulum a velit eu ante scelerisque vulputate.</p>

                            </div>



                            <h3><a href="#">Section 2</a></h3>

                            <div>

                                <P style="font-weight: bold;">Sed Non Urna</p>

                                <p>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

                                    Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

                                    faucibus interdum tellus libero ac justo.</p>

                                <p>Vivamus non quam. In suscipit faucibus urna.</p>

                            </div>



                            <h3><a href="#">Section 3</a></h3>

                            <div>

                                <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

                                    Phasellus pellentesque purus in massa. Aenean in pede.</p>

                                <p>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

                                    magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>

                                <ul>

                                    <li>List item one</li>

                                    <li>List item two</li>

                                    <li>List item three</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                    <li>Another Item</li>

                                </ul>

                            </div>



                            <h3><a href="#">Section 4</a></h3>

                            <div>

                                <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

                                    ac turpis egestas.</p>

                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

                                    Aenean lacinia mauris vel est.</p>

                                <p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                            </div>



                        </div>

                    </div>

                    <div class="ui-widget-footer ui-widget-header ui-corner-bottom">Center-Center Footer</div>

                </div>

                <div class="ui-layout-west">

                    <div class="accordion">



                        <h3><a href="#">Section 1</a></h3>

                        <div>

                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

                                Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</p>

                            <p>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

                                Vestibulum a velit eu ante scelerisque vulputate.</p>

                        </div>



                        <h3><a href="#">Section 2</a></h3>

                        <div>

                            <P style="font-weight: bold;">Sed Non Urna</p>

                            <p>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

                                Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

                                faucibus interdum tellus libero ac justo.</p>

                            <p>Vivamus non quam. In suscipit faucibus urna.</p>

                        </div>



                        <h3><a href="#">Section 3</a></h3>

                        <div>

                            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

                                Phasellus pellentesque purus in massa. Aenean in pede.</p>

                            <p>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

                                magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>

                            <ul>

                                <li>List item one</li>

                                <li>List item two</li>

                                <li>List item three</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                                <li>Another Item</li>

                            </ul>

                        </div>



                        <h3><a href="#">Section 4</a></h3>

                        <div>

                            <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

                                ac turpis egestas.</p>

                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

                                Aenean lacinia mauris vel est.</p>

                            <p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                        </div>



                    </div>

                    <!--
                    
                    <div class="ui-layout-north">
                    
                            <div class="ui-widget-header ui-corner-top">West-North</div>
                    
                            <div class="ui-widget-content">
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                            </div>
                    
                            <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-North Footer</div>
                    
                    </div>
                    
                    <div class="ui-layout-center">
                    
                            <div class="ui-widget-header ui-corner-top">West-Center</div>
                    
                            <div class="ui-widget-content">
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                            </div>
                    
                            <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-Center Footer</div>
                    
                    </div>
                    
                    <div class="ui-layout-south">
                    
                            <div class="ui-widget-header ui-corner-top">West-South</div>
                    
                            <div class="ui-widget-content">
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                                    <p>List of Items</p>
                    
                            </div>
                    
                            <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-South Footer</div>
                    
                    </div>
                    
                    -->

                </div>

                <div class="ui-layout-east">

                    <div class="ui-layout-center">

                        <div class="ui-widget-header ui-corner-top">East-Center</div>

                        <div class="ui-widget-content">

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">East-Center Footer</div>

                    </div>

                    <div class="ui-layout-south">

                        <div class="ui-widget-header ui-corner-top">East-South</div>

                        <div class="ui-widget-content">

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">East-South Footer</div>

                    </div>

                </div>

            </div><!-- /#tab2 -->



            <div id="tab3" class="tab-panel ui-tabs-hide">

                <div class="ui-layout-north ui-widget">

                    <div class="toolbar ui-widget-content ui-state-active">

                        Toolbar - tab3

                    </div>

                </div>

                <div class="ui-layout-south ui-widget">

                    <div class="toolbar ui-widget-content ui-state-default">

                        Statusbar - tab3

                    </div>

                </div>

                <div id="innerTabs" class="ui-layout-center container tabs">

                    <div class="ui-widget-header ui-corner-top"> Center -Center </div>

                    <ul>

                        <li class="tab1"><a href="#simpleTab1">Tab #1</a></li>

                        <li class="tab2"><a href="#simpleTab2">Tab #2</a></li>

                        <li class="tab3"><a href="#simpleTab3">Tab #3</a></li>

                    </ul>

                    <div class="ui-widget-content" style="border-top: 0;">



                        <div id="simpleTab1" class="container" style="height: 100%;">

                            <div class="accordion">



                                <h3><a href="#">Section 1</a></h3>

                                <div>

                                    <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. 

                                        Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.</p>

                                    <p>Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. 

                                        Vestibulum a velit eu ante scelerisque vulputate.</p>

                                </div>



                                <h3><a href="#">Section 2</a></h3>

                                <div>

                                    <P style="font-weight: bold;">Sed Non Urna</p>

                                    <p>Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.

                                        Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit,

                                        faucibus interdum tellus libero ac justo.</p>

                                    <p>Vivamus non quam. In suscipit faucibus urna.</p>

                                </div>



                                <h3><a href="#">Section 3</a></h3>

                                <div>

                                    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.

                                        Phasellus pellentesque purus in massa. Aenean in pede.</p>

                                    <p>Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, 

                                        magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>

                                    <ul>

                                        <li>List item one</li>

                                        <li>List item two</li>

                                        <li>List item three</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                        <li>Another Item</li>

                                    </ul>

                                </div>



                                <h3><a href="#">Section 4</a></h3>

                                <div>

                                    <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames 

                                        ac turpis egestas.</p>

                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

                                        Aenean lacinia mauris vel est.</p>

                                    <p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.

                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                </div>



                            </div>

                        </div>



                        <div id="simpleTab2">

                            Tab #2 Content

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                        </div>



                        <div id="simpleTab3"> Tab #3 Content </div>



                    </div>

                    <div class="ui-widget-footer ui-widget-header ui-corner-bottom">Center-Center Footer</div>

                </div>

                <div class="ui-layout-west">

                    <div class="ui-layout-north">

                        <div class="ui-widget-header ui-corner-top">West-North</div>

                        <div class="ui-widget-content">

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-North Footer</div>

                    </div>

                    <div class="ui-layout-center">

                        <div class="ui-widget-header ui-corner-top">West-Center</div>

                        <div class="ui-widget-content">

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-Center Footer</div>

                    </div>

                    <div class="ui-layout-south">

                        <div class="ui-widget-header ui-corner-top">West-South</div>

                        <div class="ui-widget-content">

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">West-South Footer</div>

                    </div>

                </div>

                <div class="ui-layout-east">

                    <div class="ui-layout-center">

                        <div class="ui-widget-header ui-corner-top">East-Center</div>

                        <div class="ui-widget-content">

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                            <p>List of Items</p>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">East-Center Footer</div>

                    </div>

                    <div class="ui-layout-south">

                        <div class="ui-widget-header ui-corner-top">East-South</div>

                        <div class="ui-widget-content">

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                            <div><a href="#">Another Item</a></div>

                        </div>

                        <div class="ui-widget-footer ui-widget-header ui-corner-bottom">East-South Footer</div>

                    </div>

                </div>

            </div><!-- /#tab3 -->



        </div><!-- /#tabpanels -->



    </div><!-- /#outer-center -->



</div>