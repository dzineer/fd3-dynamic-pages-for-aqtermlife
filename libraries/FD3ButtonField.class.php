<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 1/18/2017
 * Time: 4:23 PM
 */
class FD3ButtonField extends FD3FormField {

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
            <button type="button" <?= $this->attributes($this->field); ?> ><i class="fa fa-cog fa-btn-font" aria-hidden="true"></i><span class="btn-caption"><?= __( $this->field['value'] ) ?></span></button>
            <?
            $content = ob_get_clean();
            return $content;
        endif; ?>
        <div class="form-group">
            <input type="button" <?= $this->attributes($this->field); ?> />
        </div>
        <?
        $content = ob_get_clean();
        return $content;
    }

    function renderRepeat() {
        ob_start(); ?>
        <div class="form-group">
            <? if (isset($this->field['show_label']) && $this->field['show_label'] == true) : ?><label for="<?= $this->field['id'] . '_repeat' ?>" id="<?= $this->field['id'] ?>_repeat_label"><?= __('Confirm') . ' ' . $this->field['label'] ?></label><? endif; ?>
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