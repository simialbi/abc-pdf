<?php

namespace ABCPdf;

use DOTNET;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property-read float $MeasureDpiX The horizontal measurement resolution.
 * @property-read float $MeasureDpiY The vertical measurement resolution.
 */
class XSaveTemplateData extends DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XSaveTemplateData',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }
}