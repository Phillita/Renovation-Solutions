<form id="loginform" action="calculateQuote" method="post">
    <table id="variablestable" class="table">
        <tr>
            <td class="label">
                Gross Floor Area
            </td>
            <td>
                <input type="text" id="gross_floor_area" name="gross_floor_area"/>
            </td>
        </tr>
        <tr>
            <td class="label">
                Perimeter Outer Wall
            </td>
            <td>
                <input type="text" id="perimeter_outer_wall" name="perimeter_outer_wall"/>
            </td>
        </tr>
        <tr>
            <td class="label">
                Length of Interior Wall
            </td>
            <td>
                <input type="text" id="perimeter_inner_wall" name="perimeter_inner_wall"/>
            </td>
        </tr>
        <tr>
            <td class="label">
                Height of Wall
            </td>
            <td>
                <input type="text" id="wall_height" name="wall_height"/>
            </td>
        </tr>
    </table>
    <div class="buttons">
        <button type="submit" class="inputbtn" id="quotebutton" name="quotebutton">Get Quote</button>
        <button id="resetfields" class="inputbtn" name="resetfields">Reset Fields</button>
    </div>
</form>
