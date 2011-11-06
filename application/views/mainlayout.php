<script type="text/javascript">

    var outerLayout, westLayout, eastLayout;

    $(document).ready(function() {

        outerLayout = $('#layoutmain').layout({
            minSize:			100	// ALL panes
            ,	west__size:			200
            ,	east__size:			200
            ,	useStateCookie:		true
        });

        westLayout = $('div.ui-layout-west').layout({
            minSize:				50	// ALL panes
            ,	center__paneSelector:	".west-center"
            ,	south__paneSelector:	".west-south"
            ,	south__size:			300
        });

        eastLayout = $('div.ui-layout-east').layout({
            minSize:				50	// ALL panes
            ,	center__paneSelector:	".east-center"
            ,	south__paneSelector:	".east-south"
            ,	south__size:			100
        });

    });

</script>

<div id="layoutmain" style="height:600px;">

    <div class="ui-layout-center">
        Outer - Center pane
        <p>&nbsp;</p>
        <p><a href="http://layout.jquery-dev.net/demos.html">Go&nbsp;to Demos&nbsp;page</a></p>
    </div>

    <div class="ui-layout-west">
        <div class="west-center"> West - Center </div>
        <div class="west-south">  West - South </div>
    </div>

    <div class="ui-layout-east">
        <div class="east-center"> East - Center </div>
        <div class="east-south">  East - South </div>
    </div>

</div>

