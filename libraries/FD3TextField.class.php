<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 1/18/2017
 * Time: 4:23 PM
 */
class FD3TextField extends FD3FormField {

    public $field;

    function __construct( $field ) {
        $this->field = $field;
        $this->field['instance'] = $this;
        return $this->field;
    }

    function render( ) {
        ob_start();

        if( isset($this->field['form_group'] ) && strlen($this->field['form_group']) ) :
            ?>
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] ?>" id="<?= $this->field['id'] ?>_label" data-original="<?= $this->field['label'] ?>"><?= $this->field['label'] ?></label><? endif ?>
            <input type="text" <?= $this->attributes($this->field); ?> placeholder="<?= $this->field['placeholder'] ?>" <?= (isset( $this->field['read_only']) && $this->field['read_only'] == true ) ? 'readonly' : '' ?> />
            <?
            $content = ob_get_clean();
            return $content;
        endif; ?>

        <div class="form-group">
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] ?>" id="<?= $this->field['id'] ?>_label" data-original="<?= $this->field['label'] ?>"><?= $this->field['label'] ?></label><? endif ?>
            <input type="text" <?= $this->attributes($this->field); ?> placeholder="<?= $this->field['placeholder'] ?>" <?= (isset( $this->field['read_only']) && $this->field['read_only'] == true ) ? 'readonly' : '' ?> />
        </div>
        <?
        $content = ob_get_clean();
        return $content;
    }

    function renderRepeat() {
        ob_start(); ?>
        <div class="form-group">
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] . '_repeat' ?>" id="<?= $this->field['id'] ?>_repeat_label"><?= __('Repeat') . ' ' . $this->field['label'] ?></label><? endif; ?>
            <input type="<?= $this->field['type'] ?>" name="<?= $this->field['id'] . '_repeat' ?>" placeholder="<?= $this->field['placeholder'] ?>" id="<?= $this->field['id'] . '_repeat' ?>" class="form-control" value="" />
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
