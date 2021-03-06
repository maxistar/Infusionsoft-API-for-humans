<?php
/**
 * InfusionSoft Object Oriented API
 *
 * this class is parsed from https://developer.infusionsoft.com/docs/read/Order_Service
 * OrderService
 */
namespace maxistar\infusionsoft\service;
class Order extends \maxistar\infusionsoft\Service {

    /**
     * OrderService.placeOrder
	 *
	 * Returns the result of order placement. The ids of the order and invoice that were created are returned along
        with the status of a credit card charge if one was made.
     *
     * @param int contactId The id of the contact to place on the order
     * @param int creditCardId The id of the credit card to charge, leave it at zero to indicate no credit card.
     * @param int payPlanId The id of the payment plan to use in building the order. If no pay plan is specified then the
                default payment plan is used.
     * @param List&lt;Integer&gt; productIds The list of products to purchase on the order, this cannot be empty if no subscription plans are
                specified.
     * @param List&lt;Integer&gt; subscriptionPlanIds The list of subscriptions to purchase on the order, this cannot be empty if no products are
                specified.
     * @param boolean processSpecials Whether or not the order should consider discounts that would normally be applied if this order was
                being placed through the shopping cart.
     * @param List&lt;String&gt; promoCodes Any promo codes to add to the cart, only used if processing of specials is turned on.
     * @param int leadAffiliateId Optional int ID of the lead affiliate
     * @param int saleAffiliateId Optional int ID of the sale affiliate
	 * @returns Returns the result of order placement. The ids of the order and invoice that were created are returned along
        with the status of a credit card charge if one was made.
	 */
	function placeOrder($contactId, $creditCardId, $payPlanId, $productIds, $subscriptionPlanIds, $processSpecials, $promoCodes, $leadAffiliateId, $saleAffiliateId){
	    $args = array($contactId, $creditCardId, $payPlanId, $productIds, $subscriptionPlanIds, $processSpecials, $promoCodes, $leadAffiliateId, $saleAffiliateId);

	    return $this->owner->call('OrderService.placeOrder', $args);
	}
} 
