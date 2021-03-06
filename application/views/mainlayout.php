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
        <h2>Input Information</h2>
        <?php $this->load->view("inputVariables"); ?>
        <h2>Quote</h2>
        <table>
            <thead>
                <tr>
                    <th>Material</th>
                    <th>Amount</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($materials)) {
                    foreach ($materials as $key => $value) {
                        echo '<tr>'.
                             '  <td>'.$key.'</td>'.
                             '  <td>'.$value.'</td>'.
                             '  <td>1</td>'.
                             '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="ui-layout-west">
        <div class="west-center">
            <h2>Jobs</h2>
            <ul>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
            </ul>
        </div>
        <div class="west-south">
            <h2>Quotes</h2>
            <ul>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
            </ul>
        </div>
    </div>

    <div class="ui-layout-east">
        <div class="east-center"> East - Center </div>
        <div class="east-south">  East - South </div>
    </div>

</div>

