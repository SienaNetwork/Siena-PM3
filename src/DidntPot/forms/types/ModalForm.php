<?php

namespace DidntPot\forms\types;

use DidntPot\forms\Form;

class ModalForm extends Form
{
    /** @var string */
    private string $content = "";

    /**
     * @param callable|null $callable $callable
     */
    public function __construct(?callable $callable)
    {
        parent::__construct($callable);
        $this->data["type"] = "modal";
        $this->data["title"] = "";
        $this->data["content"] = $this->content;
        $this->data["button1"] = "";
        $this->data["button2"] = "";
    }

    /**
     * @param string $title
     *
     * Sets the title of the Modal Form.
     */
    public function setTitle(string $title): void
    {
        $this->data["title"] = $title;
    }

    /**
     * @return string
     *
     * Gets the title of the modal form.
     */
    public function getTitle(): string
    {
        return $this->data["title"];
    }

    /**
     * @return string
     *
     * Gets the content of the modal form.
     */
    public function getContent(): string
    {
        return $this->data["content"];
    }

    /**
     * @param string $content
     *
     * Sets the content of the modal form.
     */
    public function setContent(string $content): void
    {
        $this->data["content"] = $content;
    }

    /**
     * @param string $text
     *
     * Sets the first button text of the modal form.
     */
    public function setButton1(string $text): void
    {
        $this->data["button1"] = $text;
    }

    /**
     * @return string
     *
     * Gets the first button text of the modal form.
     */
    public function getButton1(): string
    {
        return $this->data["button1"];
    }

    /**
     * @param string $text
     *
     * Sets the second button text of the modal form.
     */
    public function setButton2(string $text): void
    {
        $this->data["button2"] = $text;
    }

    /**
     * @return string
     *
     * Gets the second button text of the modal form.
     */
    public function getButton2(): string
    {
        return $this->data["button2"];
    }
}