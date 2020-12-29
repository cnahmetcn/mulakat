<h2>VIES VAT number validation</h2>
<p id="explanation">
<p>
    You can verify the validity of a VAT number issued by any Member State by selecting that Member State from the drop-down menu provided, and entering the number to be validated.
</p>

</p>
<form  name="vat_form" action="{{route('tax.check')}}" method="post">
    @csrf
    <fieldset>
        <table class="noBorder" width="100%">
            <tr>
                <td class="labelStyle">
                    <label for="memberStateCode">Member State</label>
                </td>
                <td class="formStyle">
                    <select  name="memberStateCode" onchange="generateForm(this);">
                        <option value="">--</option>

                        <option value="AT">AT-Austria</option>

                        <option value="BE">BE-Belgium</option>

                        <option value="BG">BG-Bulgaria</option>

                        <option value="CY">CY-Cyprus</option>

                        <option value="CZ">CZ-Czech Republic</option>

                        <option value="DE">DE-Germany</option>

                        <option value="DK">DK-Denmark</option>

                        <option value="EE">EE-Estonia</option>

                        <option value="EL">EL-Greece</option>

                        <option value="ES">ES-Spain</option>

                        <option value="FI">FI-Finland</option>

                        <option value="FR">FR-France </option>

                        <option value="GB">GB-United Kingdom</option>

                        <option value="HR">HR-Croatia</option>

                        <option value="HU">HU-Hungary</option>

                        <option value="IE">IE-Ireland</option>

                        <option value="IT">IT-Italy</option>

                        <option value="LT">LT-Lithuania</option>

                        <option value="LU">LU-Luxembourg</option>

                        <option value="LV">LV-Latvia</option>

                        <option value="MT">MT-Malta</option>

                        <option value="NL">NL-The Netherlands</option>

                        <option value="PL">PL-Poland</option>

                        <option value="PT">PT-Portugal</option>

                        <option value="RO">RO-Romania</option>

                        <option value="SE">SE-Sweden</option>

                        <option value="SI">SI-Slovenia</option>

                        <option value="SK">SK-Slovakia</option>

                    </select>
                </td>
                <td width="40%">

                </td>
            </tr>
            <tr>
                <td class="labelStyle">
                    <label for="number">VAT Number</label>
                </td>
                <td class="formStyle">
                    <input id="number" name="number" type="text" value=""/>
                </td>
                <td width="40%">

                </td>
            </tr>

        </table>
        <input type="hidden" id="action" value="check" name="action">
        <input type="submit" id="submit" name="check" value="Verify" />
    </fieldset>
</form>
