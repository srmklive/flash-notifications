<?php namespace Srmklive\FlashAlert;


class FlashAlertHandler
{
    /**
     * @var SessionStore
     */
    private $session;

    /**
     * @param SessionStore $session
     */
    public function __construct(SessionStore $session)
    {
        $this->session = $session;
    }

    /**
     * Create an info flash message.
     *
     * @param string $message
     */
    public function info($title, $message)
    {
        $this->message($title, $message, 'info');
    }

    /**
     * Create a success flash message.
     *
     * @param string $message
     */
    public function success($title, $message)
    {
        $this->message($title, $message, 'success');
    }

    /**
     * Create a warning flash message.
     *
     * @param string $message
     */
    public function warning($title, $message)
    {
        $this->message($title, $message, 'warning');
    }

    /**
     * Create an error flash message.
     *
     * @param string $message
     */
    public function error($title, $message)
    {
        $this->message($title, $message, 'error');
    }

    /**
     * Create a flash message.
     *
     * @param string $title
     * @param string $message
     * @param string $level
     */
    public function message($title, $message, $level)
    {
        $this->session->flash('flashalert.title', $title);
        $this->session->flash('flashalert.message', $message);
        $this->session->flash('flashalert.level', $level);
    }
}