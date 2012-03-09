<?php

namespace App\MobileDetectorBundle;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class EventListener {

    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function onKernelRequest(GetResponseEvent $event) {
        $detector = $this->container->get('app.mobiledetectorbundle.mobile_detector');
        if ($result = $detector->detect()) {
            if (!is_array($result['redirect_params']) || empty($result['redirect_params']['redirect_url'])) return;
            $event->setResponse(new RedirectResponse($result['redirect_params']['redirect_url'], $result['redirect_params']['status_code'] ? : 302));
        }
    }

}