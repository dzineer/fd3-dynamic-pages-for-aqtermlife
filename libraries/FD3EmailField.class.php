<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 1/18/2017
 * Time: 4:23 PM
 */
class FD3EmailField extends FD3FormField {

    public $field;

    function __construct( $field ) {
        $this->field = $field;
        $this->field['instance'] = $this;
        return $this->field;
    }

    function render( ) {
        ob_start(); ?>
        <div class="form-group">
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] ?>" id="<?= $this->field['id'] ?>_label"><?= $this->field['label'] ?></label><? endif; ?>
            <input type="email" <?= $this->attributes($this->field); ?>  <?= (isset( $this->field['read_only']) && $this->field['read_only'] == true ) ? 'readonly' : '' ?>/>
        </div>
        <?
        $content = ob_get_clean();
        return $content;
    }

    function renderRepeat() {
        ob_start(); ?>
        <div class="form-group">
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] . '_repeat' ?>" id="<?= $this->field['id'] ?>_repeat_label"><?= __('Confirm') . ' ' . $this->field['label'] ?></label><? endif; ?>
            <input type="<?= $this->field['type'] ?>" name="<?= $this->field['id'] . '_repeat' ?>" value="<?= $this->field['repeat_value'] ?>" placeholder="Confirm <?= $this->field['placeholder'] ?>" id="<?= $this->field['id'] . '_repeat' ?>" class="<?= $this->field['class'] ?>" value="" />
        </div>
        <?
        $content = ob_get_clean();
        return $content;
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