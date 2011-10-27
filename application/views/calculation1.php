<div class="wrap">
    <form id="loginform" action="get_quote" method="post">
        <fieldset class="floatleft">
            <Legend class="legendtitle">Variables</legend>
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
                        <input type="text" id="perimeter_outer_wall" name="perimeter_outer_wall"/>
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
        </fieldset>
        <fieldset class="floatleft">
            <Legend class="legendtitle">Windows and Doors</legend>
            <table id="windowsdoorstable" class="table">
                <tr>
                    <td class="label">
                        Doors
                    </td>
                    <td>
                        <input type="text" id="doors" name="doors"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        Windows
                    </td>
                    <td>
                        <input type="text" id="windows" name="windows"/>
                    </td>
                </tr>
            </table>
        </fieldset>
        <div class="clear"></div>
        <fieldset class="clear" style="width:90%">
            <Legend class="legendtitle">Quote</legend>
            <table id="quotestable" class="table">
                <tr>
                    <td class="label">
                        Drywall Interior
                    </td>
                    <td>
                        <input type="text" id="drywall_interior" name="drywall_interior"/>
                    </td>
                    <td class="label addpadding">
                        Insulation
                    </td>
                    <td>
                        <input type="text" id="insulation" name="insulation"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        Drywall Exterior
                    </td>
                    <td>
                        <input type="text" id="drywall_exterior" name="drywall_exterior"/>
                    </td>
                    <td class="label addpadding">
                        Plates
                    </td>
                    <td>
                        <input type="text" id="plates" name="plates"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        Drywall Total
                    </td>
                    <td>
                        <input type="text" id="drywall_total" name="drywall_total"/>
                    </td>
                    <td class="label addpadding">
                        Studs
                    </td>
                    <td>
                        <input type="text" id="studs" name="studs"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        Ceiling Sheets
                    </td>
                    <td>
                        <input type="text" id="ceiling_sheets" name="ceiling_sheets"/>
                    </td>
                    <td class="label addpadding">
                        Air Barrier
                    </td>
                    <td>
                        <input type="text" id="air_barrier" name="air_barrier"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        Vapor Barrier
                    </td>
                    <td>
                        <input type="text" id="vapor_barrier" name="vapor_barrier"/>
                    </td>
                    <td class="label addpadding">
                        Door Casing
                    </td>
                    <td>
                        <input type="text" id="door_casing" name="door_casing"/>
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        Baseboard
                    </td>
                    <td>
                        <input type="text" id="baseboard" name="baseboard"/>
                    </td>
                    <td class="label addpadding">
                        3x3 Win Casing
                    </td>
                    <td>
                        <input type="text" id="3x3_win_casing" name="3x3_win_casing"/>
                    </td>
                </tr>
            </table>
        </fieldset>
        <div class="buttons">
            <button type="submit" class="inputbtn" id="quotebutton" name="quotebutton">Get Quote</button>
            <button id="resetfields" class="inputbtn" name="resetfields">Reset Fields</button>
        </div>
    </form>
</div>

