<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property string $String The point as a string.
 * @property float $X The horizontal coordinate.
 * @property float $Y The vertical coordinate.
 */

class XPoint extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        mixed $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XPoint',
        int $codepage = CP_UTF8
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('ComFactory', new ComFactory($this->getObject()->ComFactory));
    }

}