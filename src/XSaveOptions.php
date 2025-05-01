<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property string $FileExtension Gets or sets the file extension for the target when it is not otherwise specified.
 * @property bool $IDConstant Whether to assign a constant file version identifier.
 * @property bool $IDHexadecimal Whether to assign non-ASCII file identifiers.
 * @property bool $IDUpdate Whether to update the file version identifier.
 * @property bool $Incremental Whether to use incremental update to preserve an audit trail.
 * @property bool $Linearize Whether to linearize the output for fast web viewing.
 * @property bool $Remap Whether to reduce size by remapping objects.
 * @property string $Template The path to the template file.
 * @property XSaveTemplateData $TemplateData The template data.
 */
class XSaveOptions extends \DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XSaveOptions',
        int    $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }
}
