<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 1/18/2017
 * Time: 4:23 PM
 */
class FD3StateField extends FD3FormField {

    public $field;

    function __construct( $field ) {
        $this->field = $field;
        $this->field['instance'] = $this;
        return $this->field;
    }

    function render() {

        ob_start();

        $states = array(
            array( 'value' => '0', 'text' => 'Select State' ),
            array( 'value' => 'ALAlabama', 'text' => 'Alabama' ),
            array( 'value' => 'AKAlaska', 'text' => 'Alaska' ),
            array( 'value' => 'AZArizona', 'text' => 'Arizona' ),
            array( 'value' => 'ARArkansas', 'text' => 'Arkansas' ),
            array( 'value' => 'CACalifornia', 'text' => 'California' ),
            array( 'value' => 'COColorado', 'text' => 'Colorado' ),
            array( 'value' => 'CTConnecticut', 'text' => 'Connecticut' ),
            array( 'value' => 'DCDC', 'text' => 'DC' ),
            array( 'value' => 'DEDelaware', 'text' => 'Delaware' ),
            array( 'value' => 'FLFlorida', 'text' => 'Florida' ),
            array( 'value' => 'GAGeorgia', 'text' => 'Georgia' ),
            array( 'value' => 'HIHawaii', 'text' => 'Hawaii' ),
            array( 'value' => 'IDIdaho', 'text' => 'Idaho' ),
            array( 'value' => 'ILIllinois', 'text' => 'Illinois' ),
            array( 'value' => 'INIndiana', 'text' => 'Indiana' ),
            array( 'value' => 'IAIowa', 'text' => 'Iowa' ),
            array( 'value' => 'KSKansas', 'text' => 'Kansas' ),
            array( 'value' => 'KYKentucky', 'text' => 'Kentucky' ),
            array( 'value' => 'LALouisiana', 'text' => 'Louisiana' ),
            array( 'value' => 'MELouisiana', 'text' => 'Maine' ),
            array( 'value' => 'MDMaryland', 'text' => 'Maryland' ),
            array( 'value' => 'MAMassachusetts', 'text' => 'Massachusetts' ),
            array( 'value' => 'MIMichigan', 'text' => 'Michigan' ),
            array( 'value' => 'MNMinnesota', 'text' => 'Minnesota' ),
            array( 'value' => 'MSMississippi', 'text' => 'Mississippi' ),
            array( 'value' => 'MOMissouri', 'text' => 'Missouri' ),
            array( 'value' => 'MTMontana', 'text' => 'Montana' ),
            array( 'value' => 'NENebraska', 'text' => 'Nebraska' ),
            array( 'value' => 'NVNevada', 'text' => 'Nevada' ),
            array( 'value' => 'NHNew Hampshire', 'text' => 'New Hampshire' ),
            array( 'value' => 'NJNew Jersey', 'text' => 'New Jersey' ),
            array( 'value' => 'NMNew Mexico', 'text' => 'New Mexico' ),
            array( 'value' => 'NYNew York', 'text' => 'New York' ),
            array( 'value' => 'NCNorth Carolina', 'text' => 'North Carolina' ),
            array( 'value' => 'NDNorth Dakota', 'text' => 'North Dakota' ),
            array( 'value' => 'OHOhio', 'text' => 'Ohio' ),
            array( 'value' => 'OKOklahoma', 'text' => 'Oklahoma' ),
            array( 'value' => 'OROregon', 'text' => 'Oregon' ),
            array( 'value' => 'PAPennsylvania', 'text' => 'Pennsylvania' ),
            array( 'value' => 'RIRhode Island', 'text' => 'Rhode Island' ),
            array( 'value' => 'SCSouth Carolina', 'text' => 'South Carolina' ),
            array( 'value' => 'SDSouth Dakota', 'text' => 'South Dakota' ),
            array( 'value' => 'TNTennessee', 'text' => 'Tennessee' ),
            array( 'value' => 'TXTexas', 'text' => 'Texas' ),
            array( 'value' => 'UTUtah', 'text' => 'Utah' ),
            array( 'value' => 'VTVermont', 'text' => 'Vermont' ),
            array( 'value' => 'VAVirginia', 'text' => 'Virginia' ),
            array( 'value' => 'WAWashington', 'text' => 'Washington' ),
            array( 'value' => 'WVWest Virginia', 'text' => 'West Virginia' ),
            array( 'value' => 'WIWisconsin', 'text' => 'Wisconsin' ),
            array( 'value' => 'WYWyoming', 'text' => 'Wyoming' )
        );

        if( isset($this->field['form_group'] ) && strlen($this->field['form_group']) ) :
            ?>
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] ?>"><?= $this->field['label'] ?></label><? endif; ?>
            <select <?= $this->attributes($this->field); ?>  >
                <optgroup label="United States">
                    <? foreach($states as $state) : ?>
                        <option value="<?= $state['value'] ?>"><?= $state['text'] ?></option>
                    <? endforeach; ?>
                </optgroup>
            </select>			<?
            $content = ob_get_clean();
            return $content;
        endif; ?>

        <div class="form-group">
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] ?>"><?= $this->field['label'] ?></label><? endif; ?>
            <select <?= $this->attributes($this->field); ?>  >
                <optgroup label="United States">
                    <? foreach($states as $state) : ?>
                        <option value="<?= $state['value'] ?>"><?= $state['text'] ?></option>
                    <? endforeach; ?>
                </optgroup>
            </select>
        </div>
        <?
        $content = ob_get_clean();
        return $content;
    }

    function renderRepeat() {

    }

    function isRepeat() {
        return $this->field['repeat'];
    }

    function validate( $s ) {
        if( $s == '0' ) {
            return false;
        } else {
            return true;
        }
    }

    function sanitize( $s ) {
        return $s;
    }
}