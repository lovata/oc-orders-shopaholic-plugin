<?php namespace Lovata\OrdersShopaholic\Classes\Item;

use Lovata\Shopaholic\Models\Offer;
use Lovata\Shopaholic\Classes\Item\OfferItem;
use Lovata\OrdersShopaholic\Models\OrderPosition;
use Lovata\OrdersShopaholic\Classes\PromoMechanism\PriceContainer;

/**
 * Class OrderPositionItem
 * @package Lovata\OrdersShopaholic\Classes\Item
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @property int                                       $id
 * @property int                                       $order_id
 * @property string                                    $price
 * @property float                                     $price_value
 * @property string                                    $old_price
 * @property float                                     $old_price_value
 * @property string                                    $total_price
 * @property float                                     $total_price_value
 * @property string                                    $old_total_price
 * @property float                                     $old_total_price_value
 * @property string                                    $discount_price
 * @property float                                     $discount_price_value
 * @property string                                    $code
 * @property string                                    $currency
 *
 * @property OrderItem                                 $order
 * @property \Lovata\Shopaholic\Classes\Item\OfferItem $item
 * @property \Lovata\Shopaholic\Classes\Item\OfferItem $offer
 */
class OrderPositionItem extends AbstractPositionItem
{
    const MODEL_CLASS = OrderPosition::class;

    public $arPriceField = ['price', 'total_price', 'old_price', 'old_total_price', 'discount_price'];

    public $arRelationList = [
        'order' => [
            'class' => OrderItem::class,
            'field' => 'order_id',
        ],
    ];

    /** @var OrderPosition */
    protected $obElement = null;

    /**
     * Get total price value
     * @return \Lovata\OrdersShopaholic\Classes\PromoMechanism\PriceContainer
     */
    public function getTotalPriceData()
    {
        $obPriceData = $this->order->getPromoMechanismProcessor()->getPositionPrice($this->id);
        if (empty($obPriceData)) {
            return new PriceContainer(0, 0);
        }

        return $obPriceData;
    }

    /**
     * Get offer field value
     * @return OfferItem
     */
    protected function getOfferAttribute()
    {
        if ($this->item_type != Offer::class) {
            return OfferItem::make(null);
        }

        return OfferItem::make($this->item_id);
    }

    /**
     * Get total price value
     * @return float
     */
    protected function getTotalPriceValueAttribute()
    {
        $obPriceData = $this->getTotalPriceData();

        return $obPriceData->price_value;
    }

    /**
     * Get total price value
     * @return float
     */
    protected function getOldTotalPriceValueAttribute()
    {
        $obPriceData = $this->getTotalPriceData();

        return $obPriceData->old_price_value;
    }

    /**
     * Get total price value
     * @return float
     */
    protected function getDiscountPriceValueAttribute()
    {
        $obPriceData = $this->getTotalPriceData();

        return $obPriceData->discount_price_value;
    }

    /**
     * Get currency attribute
     * @return null|string
     */
    protected function getCurrencyAttribute()
    {
        return $this->order->currency;
    }
}
