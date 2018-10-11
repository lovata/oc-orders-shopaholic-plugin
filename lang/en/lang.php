<?php return [
    'plugin'               => [
        'name'        => 'Orders for Shopaholic',
        'description' => 'User cart and order creating',
    ],
    'component'            => [
        'cart_name'                       => 'Cart',
        'cart_description'                => '',
        'make_order_name'                 => 'Make order',
        'make_order_description'          => 'Create new order',
        'payment_method_list_name'        => 'Payment methods',
        'payment_method_list_description' => '',
        'shipping_type_list_name'         => 'Shipping types',
        'shipping_type_list_description'  => '',
        'status_list_name'                => 'Order statuses',
        'status_list_description'         => '',
        'order_page_name'                 => 'Order page',
        'order_page_description'          => '',
        'send_payment_purchase'           => 'Send payment purchase after creating order',
        'user_address_name'               => 'User address',
        'user_address_description'        => 'Create/update/remove',
    ],
    'tab'                  => [
        'info'             => 'Order data',
        'offers_info'      => 'Offer list',
        'order_settings'   => 'Order and cart',
        'gateway'          => 'Gateway',
        'payment_data'     => 'Payment data',
        'discount_info'    => 'Discount info',
        'billing_address'  => 'Billing address',
        'shipping_address' => 'Shipping address',
        'tasks'            => 'Tasks',
    ],
    'message'              => [
        'empty_cart'           => 'Cart is empty',
        'offer_not_found'      => 'Offer not found',
        'insufficient_amount'  => 'Offer is not available',
        'order_id_required'    => 'Relation between position and order is required',
        'cart_id_required'     => 'Relation between position and cart is required',
        'item_required'        => 'Relation between position and item is required',
        'without_condition'    => 'Without condition',
        'discount_not_applied' => 'Discount not applied',
    ],
    'field'                => [
        'status'       => 'Status',
        'order_number' => 'Order number',
        'user'         => 'Buyer',

        'new'         => 'New',
        'canceled'    => 'Canceled',
        'complete'    => 'Complete',
        'in_progress' => 'In progress',

        'total_price'                    => 'Total price',
        'old_total_price'                => 'Old total price',
        'position_price'                 => 'Position price',
        'old_position_price'             => 'old position price',
        'shipping_price'                 => 'Shipping price',
        'catalog_price'                  => 'Current price',
        'offer_list'                     => 'Offer list',
        'position_total_price'           => 'Total price of order positions',
        'shipping_type'                  => 'Shipping type',
        'payment_method'                 => 'Payment method',
        'is_user_show'                   => 'Show status to user',
        'user_status'                    => 'For user, status will be shown as',
        'gateway_id'                     => 'Payment gateway',
        'gateway_currency'               => 'Gateway currency',
        'before_status_id'               => 'Order status before payment',
        'after_status_id'                => 'Order status after payment success',
        'cancel_status_id'               => 'Order status after payment cancel',
        'fail_status_id'                 => 'Order status after payment fail/error',
        'transaction_id'                 => 'Transaction ID',
        'payment_token'                  => 'Payment token',
        'payment_data'                   => 'Data that was sent to payment gateway',
        'payment_response'               => 'Data that was received from payment gateway',
        'send_purchase_request'          => 'Send request to payment gateway when creating order',
        'gateway_field_value'            => 'Get value of ":field" field from value of order property field',
        'promo_mechanism'                => 'Promo mechanism',
        'priority_description'           => 'The <strong>higher</strong> the priority, the <strong>earlier</strong> the discount will be applied.',
        'discount_value'                 => 'Discount value',
        'discount_type'                  => 'Discount type',
        'discount_type_fixed'            => 'Fixed',
        'discount_type_percent'          => 'Percent',
        'final_discount'                 => 'Final discount',
        'final_discount_description'     => 'The final discount <strong>blocks the effect</strong> of other discounts with a lower priority. Otherwise, discounts with <strong>lower</strong> priority <strong>will be applied</strong>.',
        'order_discount_list'            => 'List of applied discounts',
        'manager'                        => 'Manager',
        'task_date'                      => 'Notification date',
        'active_task'                    => 'Active tasks',
        'completed_task'                 => 'Completed tasks',
        'task_mail_template'             => 'Mail template for notification',
        'task_mail_template_description' => 'If mail template is not selected, the notification will not be sent.',
        'notification_sent'              => 'Notification sent',

        'order_discount_log_position_total_price' => 'List of applied discounts (position total price)',
        'order_discount_log_sipping_price'        => 'List of applied discounts (sipping price)',
        'order_discount_log_total_price'          => 'List of applied discounts (order total price)',

        'name'        => 'Name',
        'last_name'   => 'Last name',
        'middle_name' => 'Middle name',
    ],
    'settings'             => [
        'cart_cookie_lifetime'                 => 'Life time of cart ID in cookie (min.)',
        'check_offer_quantity'                 => 'Check the available quantity of the product when creating an order',
        'decrement_offer_quantity'             => 'Automatic reduction of the available quantity of offers when creating an order',
        'create_new_user'                      => 'Automatically create a new user when creating an order',
        'generate_fake_email'                  => 'When creating a new user, generate a fake email, if the email field is empty',
        'send_email_after_creating_order'      => 'Send email after creating an order',
        'creating_order_mail_template'         => 'Mail template of creating orders (for users)',
        'creating_order_manager_mail_template' => 'Mail template of creating orders (for managers)',
        'creating_order_manager_email_list'    => 'Managers email list',

        'order_create_email' => 'Email for sending mail when creating an order',
    ],
    'menu'                 => [
        'orders'                  => 'Orders',
        'statuses'                => 'Statuses',
        'payment_methods'         => 'Payment methods',
        'shipping_types'          => 'Shipping types',
        'order_property'          => 'Additional order properties',
        'order_position_property' => 'Additional order position properties',
        'promo_mechanism'         => 'Promo mechanism',
    ],
    'order'                => [
        'name'       => 'order',
        'list_title' => 'Order list',
    ],
    'buyer'                => [
        'name'       => 'buyer',
        'list_title' => 'Buyer list',
    ],
    'order_position'       => [
        'name'       => 'position',
        'list_title' => 'Position list',
    ],
    'status'               => [
        'name'       => 'status',
        'list_title' => 'Status list',
    ],
    'payment_method'       => [
        'name'       => 'payment method',
        'list_title' => 'Payment methods',
    ],
    'shipping_type'        => [
        'name'       => 'shipping type',
        'list_title' => 'Shipping types',
    ],
    'order_property'       => [
        'name'       => 'property',
        'list_title' => 'Property list',
    ],
    'task'                 => [
        'name'       => 'task',
        'list_title' => 'Task list',
    ],
    'promo_mechanism'      => [
        'name'                       => 'promo mechanism',
        'list_title'                 => 'promo mechanism list',
        'amount_description'         => 'Discount will be applied if the amount is greater than or equal to',
        'offer_limit'                => 'Offer quantity at which the discount will be applied',
        'offer_limit_description'    => 'Discount will be applied if offer quantity is greater than or equal to',
        'position_limit'             => 'Position count at which the discount will be applied',
        'position_limit_description' => 'Discount will be applied if position count is greater than or equal to',
        'quantity_limit'             => 'Quantity limit for which the discount will be applied',
        'quantity_limit_description' => 'If you set value = 1 and discount = 100%, than the discount will be applied to one unit. If you set value = 0, than discount will be applied to all units',
    ],
    'permission'           => [
        'order'           => 'Manage orders',
        'status'          => 'Manage status list',
        'payment_type'    => 'Manage payment methods',
        'delivery_type'   => 'Manage payment methods',
        'property'        => 'Manage additional properties of order',
        'promo_mechanism' => 'Manage promo mechanisms',
    ],
    'label'                => [
        'order'   => 'Order',
        'product' => 'Product',
        'offer'   => 'Offer',
    ],
    'promo_mechanism_type' => [
        'without_condition_discount_position'                         => 'Discount on the <strong>position price</strong> without conditions',
        'without_condition_discount_position_description'             => 'The discount on the price of the <strong>position</strong> will be applied <strong>without checking any conditions</strong>. For example: Can be used when applying a coupon.',
        'without_condition_discount_min_price'                        => 'Discount on the <strong>position price with min price</strong> without conditions',
        'without_condition_discount_min_price_description'            => 'The discount on the price of the <strong>position with min price</strong> will be applied <strong>without checking any conditions</strong>. For example: Can be used when applying a coupon.',
        'without_condition_discount_position_total_price'             => 'Discount on the <strong>total price</strong> of positions without conditions',
        'without_condition_discount_position_total_price_description' => 'The discount on the <strong>total price of positions</strong> list will be applied <strong>without checking any conditions</strong>. For example: Can be used when applying a coupon.',
        'without_condition_discount_shipping_price'                   => 'Discount on the <strong>shipping price</strong> without conditions',
        'without_condition_discount_shipping_price_description'       => 'The discount on the <strong>shipping price</strong> will be applied <strong>without checking any conditions</strong>. For example: Can be used when applying a coupon.',
        'without_condition_discount_total_price'                      => 'Discount on the <strong>total price</strong> of order without conditions',
        'without_condition_discount_total_price_description'          => 'The discount on the <strong>total price</strong> of order will be applied <strong>without checking any conditions</strong>. For example: Can be used when applying a coupon.',

        'position_total_price_greater_discount_shipping_price'             => 'Discount on the <strong>shipping price</strong> if total price of position greater than "XX"',
        'position_total_price_greater_discount_shipping_price_description' => 'The discount on the <strong>shipping price</strong> will be applied <strong>if total price of the position greater than the set value</strong>. For example: Discount is 5%, if the total price of position is >= 50$.',
        'position_total_price_greater_discount_total_price'                => 'Discount on the <strong>total price</strong> of order if total price of position greater than "XX"',
        'position_total_price_greater_discount_total_price_description'    => 'The discount on the <strong>total price</strong> of order will be applied <strong>if total price of position greater then</strong>. For example: Discount is 5%, if total price of position is >= 50$.',

        'offer_quantity_greater_discount_position'                         => 'Discount on the <strong>position price</strong> if the total quantity of one offer in the order is greater than "XX"',
        'offer_quantity_greater_discount_position_description'             => 'The discount on the price of the <strong>position</strong> will be applied <strong> if the total quantity of one offer in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offer "T-shirt size 52" is >= 3.',
        'offer_quantity_greater_discount_min_price'                        => 'Discount on the <strong>position with min price</strong> if the total quantity of one offer in the order is greater than "XX"',
        'offer_quantity_greater_discount_min_price_description'            => 'The discount on the price of the <strong>position with min price</strong> will be applied <strong> if the total quantity of one offer in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offer "T-shirt size 52" is >= 3.',
        'offer_quantity_greater_discount_position_total_price'             => 'Discount on the <strong>total price of positions</strong> if the total quantity of one offer in the order is greater than "XX"',
        'offer_quantity_greater_discount_position_total_price_description' => 'The discount on the <strong>total price of positions</strong> list will be applied <strong>if the total quantity of one offer in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offer "T-shirt size 52" is >= 3.',
        'offer_quantity_greater_discount_shipping_price'                   => 'Discount on the <strong>shipping price</strong> if the total quantity of one offer in the order is greater than "XX"',
        'offer_quantity_greater_discount_shipping_price_description'       => 'The discount on the <strong>shipping price</strong> will be applied <strong>if the total quantity of one offer in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offer "T-shirt size 52" is >= 3.',
        'offer_quantity_greater_discount_total_price'                      => 'Discount on the <strong>order total price</strong> if the total quantity of one offer in the order is greater than "XX"',
        'offer_quantity_greater_discount_total_price_description'          => 'The discount on the <strong>total price</strong> of order will be applied <strong>if the total quantity of one offer in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offer "T-shirt size 52" is >= 3.',

        'offer_total_quantity_greater_discount_position'                         => 'Discount on the <strong>position price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_position_description'             => 'The discount on the price of the <strong>position</strong> will be applied <strong> if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_min_price'                        => 'Discount on the <strong>position with min price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_min_price_description'            => 'The discount on the price of the <strong>position with min price</strong> will be applied <strong> if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_position_total_price'             => 'Discount on the <strong>total price of positions</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_position_total_price_description' => 'The discount on the <strong>total price of positions</strong> list will be applied <strong>if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_shipping_price'                   => 'Discount on the <strong>shipping price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_shipping_price_description'       => 'The discount on the <strong>shipping price</strong> will be applied <strong>if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_total_price'                      => 'Discount on the <strong>order total price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_total_price_description'          => 'The discount on the <strong>total price</strong> of order will be applied <strong>if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',

        'position_count_greater_discount_position'                         => 'Discount on the <strong>position price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_position_description'             => 'The discount on the price of the <strong>position</strong> will be applied <strong> if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_min_price'                        => 'Discount on the <strong>position with min price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_min_price_description'            => 'The discount on the price of the <strong>position with min price</strong> will be applied <strong> if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_position_total_price'             => 'Discount on the <strong>total price of positions</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_position_total_price_description' => 'The discount on the <strong>total price of positions</strong> list will be applied <strong>if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_shipping_price'                   => 'Discount on the <strong>shipping price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_shipping_price_description'       => 'The discount on the <strong>shipping price</strong> will be applied <strong>if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_total_price'                      => 'Discount on the <strong>order total price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_total_price_description'          => 'The discount on the <strong>total price</strong> of order will be applied <strong>if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
    ],
];
