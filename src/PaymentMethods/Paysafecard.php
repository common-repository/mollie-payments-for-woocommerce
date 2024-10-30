<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Paysafecard extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    protected function getConfig(): array
    {
        return ['id' => 'paysafecard', 'defaultTitle' => __('paysafecard', 'mollie-payments-for-woocommerce'), 'settingsDescription' => '', 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \false, 'supports' => ['products'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \false, 'SEPA' => \false];
    }
    public function getFormFields($generalFormFields): array
    {
        return $generalFormFields;
    }
}