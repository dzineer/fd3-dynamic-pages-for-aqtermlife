<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: FD3Invoice.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/25/2016 9:34 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class FD3Invoice extends FD3Library {
	
	private $lineItems;
	private $headerItems;
	private $nonce;
	private $nonce_action;
	private $promoCodes;
	
	function __construct() {

	}
	
	function initInvoice( $nonce, $action ) {
		$this->lineItems = array();
		$this->nonce = $nonce;
		$this->nonce_action = $action;
		add_action('fd3_invoice_display', array( $this, 'render' ) );
	}
	
	function addHeader( $items ) {
		$this->headerItems = $items;
	}
	
	function addItem( $item ) {
		$this->lineItems[] = $item;
	}
	
	function filterArray( $items, $property, $filter ) {
	    
	    foreach( $items as $key => $item ) {
	        if( $item[ $property ] == $filter ) {
	            unset( $items[$key] );
            }
        }
        
        return $items;
    }
	
	function process_invoice() {
		
	    $usePromo = array();
		
	    $result = new stdClass();
		
		
		if( isset( $_POST ) && isset( $_POST[ 'nonce' ] ) ) {
			
			$id = session_id();
			$nonce = sanitize_text_field( $_POST[ 'nonce' ] );
			$real_nonce =  $this->nonce->getNonce( $this->nonce_action );
			
			if( $id !== false ) { // if security breach then just quit
				if( $nonce !== $real_nonce ) {
					die();
				}
			} else {
				die();
			}

		    $promos = AQ2ESession::getSession('/affiliate_site/promoContent');
			
			$fd3_form_promocode = sanitize_text_field( $_POST[ 'fd3_form_promocode' ] );
			
			$this->addHeader( array(
				'Description',
				'Qty',
				'Cost'
			));
			
			$this->addItem( array(
				'type' => 'line-item',
				'description' => 'AQ2E Program (aqtermlife) - 1 License',
				'qty' => '1',
				'cost' => '30.00'
			));
			
			$this->addItem( array(
				'type' => 'line-item',
				'description' => 'AQ2E Facebook App',
				'qty' => '1',
				'cost' => '10.00'
			));
			
			$this->addItem( array(
				'type' => 'line-item',
				'description' => 'AQ2E Facebook App Limited Time Discount',
				'qty' => '1',
				'cost' => '-10.00'
			));
			
			if(strlen( $fd3_form_promocode )) {
                $promoCode = $fd3_form_promocode;
                
                foreach( $promos as $promo ) {
                    if( $promo['code'] == $promoCode ) {
                        $usePromo = $promo;
                    }
                }
			}
			
			if( $usePromo == false && strlen( $promoCode )) { // we get a promo code but it does not match any of ours then error
				$result->success  = false;
            } else {
				$result->success  = true;
            }
			
			// $promos = $this->filterArray( $promos, 'code', 'AQ2ELIFE' );
			
			$result->output   = $this->render( $promos, $usePromo );
			$result->complete = false;
			
			// $result->output = 'working';
			
			echo json_encode( $result );
			
			die();
		}
		
		die();
	
	}
	
	/*
That it is an implementation of the function money_format for the
platforms that do not it bear.

The function accepts to same string of format accepts for the
original function of the PHP.

(Sorry. my writing in English is very bad)

The function is tested using PHP 5.1.4 in Windows XP
and Apache WebServer.
*/
	function money_format($format, $number)
	{
		$regex  = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'.
		          '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/';
		if (setlocale(LC_MONETARY, 0) == 'C') {
			setlocale(LC_MONETARY, '');
		}
		$locale = localeconv();
		preg_match_all($regex, $format, $matches, PREG_SET_ORDER);
		foreach ($matches as $fmatch) {
			$value = floatval($number);
			$flags = array(
				'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ?
					$match[1] : ' ',
				'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0,
				'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ?
					$match[0] : '+',
				'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0,
				'isleft'    => preg_match('/\-/', $fmatch[1]) > 0
			);
			$width      = trim($fmatch[2]) ? (int)$fmatch[2] : 0;
			$left       = trim($fmatch[3]) ? (int)$fmatch[3] : 0;
			$right      = trim($fmatch[4]) ? (int)$fmatch[4] : $locale['int_frac_digits'];
			$conversion = $fmatch[5];
			
			$positive = true;
			if ($value < 0) {
				$positive = false;
				$value  *= -1;
			}
			$letter = $positive ? 'p' : 'n';
			
			$prefix = $suffix = $cprefix = $csuffix = $signal = '';
			
			$signal = $positive ? $locale['positive_sign'] : $locale['negative_sign'];
			switch (true) {
				case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+':
					$prefix = $signal;
					break;
				case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+':
					$suffix = $signal;
					break;
				case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+':
					$cprefix = $signal;
					break;
				case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+':
					$csuffix = $signal;
					break;
				case $flags['usesignal'] == '(':
				case $locale["{$letter}_sign_posn"] == 0:
					$prefix = '(';
					$suffix = ')';
					break;
			}
			if (!$flags['nosimbol']) {
				$currency = $cprefix .
				            ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) .
				            $csuffix;
			} else {
				$currency = '';
			}
			
			$currency = '';
			
			$space  = $locale["{$letter}_sep_by_space"] ? ' ' : '';
			
			$value = number_format($value, $right, $locale['mon_decimal_point'],
				$flags['nogroup'] ? '' : $locale['mon_thousands_sep']);
			$value = @explode($locale['mon_decimal_point'], $value);
			
			$n = strlen($prefix) + strlen($currency) + strlen($value[0]);
			if ($left > 0 && $left > $n) {
				$value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0];
			}
			$value = implode($locale['mon_decimal_point'], $value);
			if ($locale["{$letter}_cs_precedes"]) {
				$value = $prefix . $currency . $space . $value . $suffix;
			} else {
				$value = $prefix . $value . $space . $currency . $suffix;
			}
			if ($width > 0) {
				$value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ?
					STR_PAD_RIGHT : STR_PAD_LEFT);
			}
			
			$format = str_replace($fmatch[0], $value, $format);
		}
		return $format;
	}
	
	function render( $promoCodes, $usePromo=array() ) { // in case we do not provide promo codes
	    
	    $this->promoCodes = $promoCodes;
	    
	    if( count( $this->promoCodes) && count( $usePromo ) ) {
		    $this->applyExistingPromocode( $usePromo );
        }
			
		ob_start();
		$total = 0;
		$subTotals = 0; ?>
		
		<style>
			
			tr th.head:first-child {
				-moz-border-radius: 6px 0 0 0;
				-webkit-border-radius: 6px 0 0 0;
				border-radius: 6px 0 0 0;
			}
			
			tr th.head {
				color: #FFF;
				background-color: #676767;
				margin: 5px;
				padding: 8px;
				font-size: 17px;
				font-weight: normal;
				border: none;
			}
			
			tbody tr .col:first-child {
				border-left-style: solid;
				border-left-width: thin;
				border-left: none;
			}
			
			tr .col {
				color: #666;
				background-color: #FFF;
				margin: 5px;
				padding: 8px;
				font-size: 17px;
				font-weight: normal;
				border-bottom-style: solid;
				border-bottom-width: thin;
				border-bottom-color: #676767;
			}
			
			th, td, caption {
				font-weight: normal;
				vertical-align: top;
				text-align: right;
			}
			
			.promoText {
				display: block;
				font-size: 1.0em;
				font-weight: bold;
				margin-top: 26px;
				text-align: center;
				background-color: #3f99bd;
				color: #ffffff;
				padding: 8px 15px;
				border-radius: 25px;
			}
		
		</style>
		
		<div id="invoice-template">
			
			<div class="bootstrap-container">
			
				<table class="table table-bordered">
					<thead>
					
						<tr>
							<? foreach( $this->headerItems as $item ) : ?>
								<th  class="head" style="border:none"><?= $item ?></th>
							<? endforeach; ?>
						</tr>
					
					</thead>
					<tbody>
					
					<? foreach( $this->lineItems as $lineItem ) :  ?>
						<tr>
							<td class="col"><?= $lineItem['description'] ?></td>
							<td class="col"><?= $lineItem['qty'] ?></td>
							<td class="col">&dollar;<?= $this->money_format("%i", $lineItem['cost']) ?></td>
						</tr>
						<?
						$subTotals += $lineItem['qty'] * $lineItem['cost'];
						$total += $subTotals;
					endforeach;
					?>
                    </tbody>
                </table>
				
				<div class="form-group invoiceTable">
					<div class="">
						<div class="row">
							<div class="col-xs-offset-7 col-xs-5">
								<legend class="promocode text-blue">Promo Code</legend>
								<input type="text" name="fd3_form_promocode" id="fd3_form_promocode" class="form-control" placeholder="Enter Promo Code Here" tabindex="0" value="<? if( count($usePromo) ) : echo strtoupper( $usePromo['code'] ); endif; ?>" />

                                <button type="button" id="fd3_form_apply_promo_btn" class="form-control input-lg btn btn-success" name="fd3_form_apply_promo_btn"><i class="fa fa-cog fa-btn-font" aria-hidden="true"></i><span class="btn-caption">Apply Promo Code</span></button>
                                
<!-- 								<div class="alert alert-info promoTextContainer" role="alert"><strong>Important: </strong>Your credit card will not be charged for the first 30 days</div>
 -->						</div>
						</div>
					</div>
				</div>
                
                <div class="invoice-total-container">
                    <span class="border-none col"><strong>Sub Total</strong></span>
                    <span class="border-none col">&dollar;<?= $this->money_format("%i", $subTotals) ?></span>
                </div>

                <div class="invoice-total-container">
                    <span class="border-none col clear"><strong>Total</strong></span>
                    <span class="border-none col">&dollar;<?= $this->money_format("%i", $subTotals) ?></span>
                </div>

		
			</div>
		</div>
		
		<?
		
		// $this->setJS();
		
		$form = ob_get_clean();
		
		return $form;
	}
	
	private function applyExistingPromocode( $promo ) {
		
	    /*
	    
	    billing:true,
	    code: "AQ2ELIFE",
	    desc: "Applied Affiliate Discount - PROMO CODE: AQ2ELIFE",
	    exists: true,
	    price: "-10.00",
	    qty: "1",
	    value: "-10"
	    
	    */
	    
	    $promoCode = strtoupper( $promo['code'] );
	    
		for($i=0; $i < count( $this->promoCodes); $i++) {
			
			$promoItem = $this->promoCodes[ $i ];
			
			if($promoItem[ 'code' ] == $promoCode ) {
			
				$promoUsed = true;
				
				$this->addItem( array(
				    'type' => 'promo-code',
					'description' => $promoItem['desc'],
					'qty' => $promoItem['qty'],
					'cost' => $promoItem['value']
				));
				
			}

		}
	}
		
	function calcSubtotal() {
		
	}
	
	function calcTotal() {
		
	}
	
	function __destruct() {
		// TODO: Implement __destruct() method.
	}
	
	
}
 // end of FD3Invoice