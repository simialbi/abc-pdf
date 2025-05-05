<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property int $Alpha The alpha opacity.
 * @property int $Black The black component.
 * @property int $Blue The blue component.
 * @property int $ColorSpace The native color space for the color.
 * @property int $Cyan The cyan component.
 * @property int $Gray The gray component.
 * @property int $Green The green component.
 * @property int $Magenta The magenta component.
 * @property int $Red The red component.
 * @property string $String The color as a string.
 * @property int $Yellow The yellow component.
 */

class XColor extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        mixed $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XColor',
        int $codepage = CP_UTF8
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('ComFactory', new ComFactory($this->getObject()->ComFactory));
    }

}