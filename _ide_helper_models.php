<?php

// @formatter:off

/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App {
    /**
     * App\User
     *
     * @property int $id
     * @property string $name
     * @property string $email
     * @property string $password
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
     */
    class User extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TInvoiceDetail
     *
     * @property int $id
     * @property int $t_invoice_id
     * @property int $m_tax_id
     * @property int $m_item_id
     * @property int $item_price
     * @property int $item_count
     * @property int|null $remark
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereItemCount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereItemPrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereMItemId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereMTaxId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereRemark($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereTInvoiceId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoiceDetail whereUpdatedAt($value)
     */
    class TInvoiceDetail extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TInvoice
     *
     * @property int $id
     * @property int $kbn_cd
     * @property int $m_customer_id
     * @property string $issue_date
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\TInvoice[] $detail
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice whereIssueDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice whereKbnCd($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice whereMCustomerId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TInvoice whereUpdatedAt($value)
     */
    class TInvoice extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TDeliveryDetail
     *
     * @property int $id
     * @property int $t_delivery_id
     * @property int $m_tax_id
     * @property int $m_item_id
     * @property int $item_price
     * @property int $item_count
     * @property int|null $remark
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereItemCount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereItemPrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereMItemId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereMTaxId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereRemark($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereTDeliveryId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDeliveryDetail whereUpdatedAt($value)
     */
    class TDeliveryDetail extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TEstimateDetail
     *
     * @property int $id
     * @property int $t_estimate_id
     * @property int $m_tax_id
     * @property int $item_name
     * @property int $item_price
     * @property int $item_count
     * @property int|null $remark
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereItemCount($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereItemName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereItemPrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereMTaxId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereRemark($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereTEstimateId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimateDetail whereUpdatedAt($value)
     */
    class TEstimateDetail extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TEstimate
     *
     * @property int $id
     * @property int $kbn_cd
     * @property int $m_customer_id
     * @property string $issue_date
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\TEstimateDetail[] $detail
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate whereIssueDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate whereKbnCd($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate whereMCustomerId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TEstimate whereUpdatedAt($value)
     */
    class TEstimate extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\AdminMenu
     *
     * @property int $id
     * @property int $parent_id
     * @property int $order
     * @property string $title
     * @property string $icon
     * @property string|null $uri
     * @property string|null $permission
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereIcon($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereOrder($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereParentId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu wherePermission($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereTitle($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\AdminMenu whereUri($value)
     */
    class AdminMenu extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\MTax
     *
     * @property int $id
     * @property float $tax_rate
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MTax newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MTax newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MTax query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MTax whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MTax whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MTax whereTaxRate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MTax whereUpdatedAt($value)
     */
    class MTax extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TDelivery
     *
     * @property int $id
     * @property int $kbn_cd
     * @property int $m_customer_id
     * @property string $issue_date
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\TDeliveryDetail[] $detail
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery whereIssueDate($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery whereKbnCd($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery whereMCustomerId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TDelivery whereUpdatedAt($value)
     */
    class TDelivery extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\MItem
     *
     * @property int $id
     * @property string $item_name
     * @property int $default_price
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem whereDefaultPrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem whereItemName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MItem whereUpdatedAt($value)
     */
    class MItem extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TReceipt
     *
     * @property int $id
     * @property int $m_customer_id
     * @property int $tax_included_price
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt whereMCustomerId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt whereTaxIncludedPrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TReceipt whereUpdatedAt($value)
     */
    class TReceipt extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\TPayment
     *
     * @property int $id
     * @property int $m_customer_id
     * @property int $tax_included_price
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment whereMCustomerId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment whereTaxIncludedPrice($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\TPayment whereUpdatedAt($value)
     */
    class TPayment extends \Eloquent {
    }
}

namespace App\Model {
    /**
     * App\Model\MCustomer
     *
     * @property int $id
     * @property string $customer_name
     * @property string $customer_kana_name
     * @property string $tel_no1
     * @property string $tel_no2
     * @property string $tel_no3
     * @property string $fax_no1
     * @property string $fax_no2
     * @property string $fax_no3
     * @property string $post_no
     * @property string $prefectures
     * @property string $address1
     * @property string $address2
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer query()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereAddress1($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereAddress2($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereCustomerKanaName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereCustomerName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereFaxNo1($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereFaxNo2($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereFaxNo3($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer wherePostNo($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer wherePrefectures($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereTelNo1($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereTelNo2($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereTelNo3($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\MCustomer whereUpdatedAt($value)
     */
    class MCustomer extends \Eloquent {
    }
}

