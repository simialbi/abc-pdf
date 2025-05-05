<?php

namespace ABCPdf;

/**
 * @property-read float $MeasureDpiX The horizontal measurement resolution.
 * @property-read float $MeasureDpiY The vertical measurement resolution.
 */

class XSaveTemplateData extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        mixed $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XSaveTemplateData',
        int $codepage = CP_UTF8
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

    }

}