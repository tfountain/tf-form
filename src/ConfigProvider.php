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
                'formrow'  => View\Helper\FormRow::class,
                'form_row' => View\Helper\FormRow::class,
                'formRow'  => View\Helper\FormRow::class,
                'FormRow'  => View\Helper\FormRow::class,
            ],
            'invokables' => [
                View\Helper\FormRow::class => View\Helper\FormRow::class,
            ],
        ];
    }
}
