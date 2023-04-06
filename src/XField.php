<?php

namespace ABCPdf;

use DOTNET;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property-read string $Format The field format.
 * @property-read int $ID The Object ID associated with this field.
 * @property-read XField
 * Collection $Kids All children of this field.
 * @property-read bool $MultiSelect Whether the field supports multiple selections.
 * @property-read string $Name The fully qualified field name.
 * @property-read array $Options The field options.
 * @property-read int $Page The ID of the page on which the field appears.
 * @property-read string $PartialName The partial field name.
 * @property-read XRect $Rect The location and size of the field.
 * @property-read string $Type The field type.
 * @property string $Value The field value.
 */
class XField extends DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XField',
        int    $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }

    /**
     * Use this method to permanently stamp a field into the document.When this method is called, the field appearance is stamped permanently
     * into the document and the field is deleted.The field becomes a new layer on the page (see Doc.LayerCount)
     * so you may wish to call Doc.Flatten
     * on the affected page.You can use the XForm.Stamp
     * method to stamp all fields into the document. 
     */
    public function Stamp(): void
    {
        parent::Stamp();
    }
}
