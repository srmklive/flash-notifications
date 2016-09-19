<?php

namespace Srmklive\FlashAlert;

use Illuminate\Session\Store;

class FlashAlertSessionStore implements SessionStore
{
    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message to the session.
     *
     * @param string $name
     * @param mixed  $data
     */
    public function flash($name, $data)
    {
        $this->session->flash($name, $data);
    }
}
