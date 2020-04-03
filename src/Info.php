<?php

namespace Pdmfc\NovaCards;

use Laravel\Nova\Card;

class Info extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * @var bool
     */
    protected $withHeading = false;

    /**
     * The message to be displayed.
     *
     * @param string $message
     * @param string $theme
     * @return $this
     */
    public function message(string $message, $theme = 'info'): self
    {
        return $this->withMeta(compact('message', 'theme'));
    }

    /**
     * Displays message with a "info" theme.
     *
     * @param string $message
     * @return $this
     */
    public function info(string $message): self
    {
        return $this->message($message);
    }

    /**
     * Displays message with a "success" theme.
     *
     * @param string $message
     * @return $this
     */
    public function success(string $message): self
    {
        return $this->message($message, 'success');
    }

    /**
     * Displays message with a "warning" theme.
     *
     * @param string $message
     * @return $this
     */
    public function warning(string $message): self
    {
        return $this->message($message, 'warning');
    }

    /**
     * Displays message with a "danger" theme.
     *
     * @param string $message
     * @return $this
     */
    public function danger(string $message): self
    {
        return $this->message($message, 'danger');
    }

    /**
     * Displays a heading with the given message.
     *
     * @param string $message
     * @return $this
     */
    public function heading(string $heading): self
    {
        $this->withHeading = true;

        return $this->withMeta(compact('heading'));
    }

    public function asHtml()
    {
        return $this->withMeta(['asHtml' => true]);
    }

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge([
            'withHeading' => $this->withHeading,
        ], parent::jsonSerialize());
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component(): string
    {
        return 'info-card';
    }
}
