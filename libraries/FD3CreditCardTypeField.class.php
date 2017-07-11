<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 1/18/2017
 * Time: 4:23 PM
 */
class FD3CreditCardTypeField extends FD3FormField {

    public $field;

    function __construct( $field ) {
        $this->field = $field;
        $this->field['instance'] = $this;
        return $this->field;
    }

    function render() {

        ob_start();

        $cardTypes = array(
            array( 'value' => '0', 'text' => 'Visa', 'selected' => 'selected' ),
            array( 'value' => '1', 'text' => 'MasterCard' ),
            array( 'value' => '2', 'text' => 'American Express' ),

        );

        ?>
        <div class="form-group">
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] ?>"  id="<?= $this->field['id'] ?>_label"><?= $this->field['label'] ?></label><? endif; ?>
            <select <?= $this->attributes($this->field); ?>  >
                <optgroup label="Accepted Payments">
                    <? foreach($cardTypes as $cardType) : ?>
                        <option value="<?= $cardType['value'] ?>" <?= isset( $cardType['selected'] ) ? 'selected="selected"' : '' ?> ><?= $cardType['text'] ?></option>
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

    function validate() {
        return true;
    }

    function sanitize( $s ) {
        return $s;
    }
}