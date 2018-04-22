<?php

namespace TfForm;

class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'view_helpers' => $this->getViewHelpers(),
        ];
    }

    /**
     * Returns the view helper configuration
     *
     * @return array
     */
    public function getViewhelpers()
    {
        return [
            'aliases' => [
                'formrow'  => Form\View\Helper\FormRow::class,
                'form_row' => Form\View\Helper\FormRow::class,
                'formRow'  => Form\View\Helper\FormRow::class,
                'FormRow'  => Form\View\Helper\FormRow::class,
            ],
            'invokables' => [
                Form\View\Helper\FormRow::class => Form\View\Helper\FormRow::class,
            ],
        ];
    }
}
