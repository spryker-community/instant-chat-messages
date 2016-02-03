<?php

namespace Pyz\Yves\Cart\Controller;

use Spryker\Yves\Application\Controller\AbstractController;
use Pyz\Yves\Cart\Plugin\Provider\CartControllerProvider;
use Spryker\Client\Cart\CartClientInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @method \Spryker\Client\Cart\CartClientInterface getClient()
 */
class CouponController extends AbstractController
{

    /**
     * @param string $couponCode
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addAction($couponCode)
    {
        $cartClient = $this->getClient();
        $cart = $cartClient->addCoupon($couponCode);

        return $this->redirectResponseInternal(CartControllerProvider::ROUTE_CART);
    }

    /**
     * @param string $couponCode
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeAction($couponCode)
    {
        $cartClient = $this->getClient();
        $cart = $cartClient->removeCoupon($couponCode);

        return $this->redirectResponseInternal(CartControllerProvider::ROUTE_CART);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function clearAction()
    {
        $cartClient = $this->getClient();
        $cart = $cartClient->clearCoupons();

        return $this->redirectResponseInternal(CartControllerProvider::ROUTE_CART);
    }

}
