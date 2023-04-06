<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property-read XField
                  Collection $Fields All top-level fields in the form.
 * @property bool $FormatFields Whether values should be formatted before insertion into fields.
 * @property bool $GenerateAppearances Whether field appearances should be pre-generated.
 * @property bool $NeedAppearances Whether the viewer should automatically regenerate field appearances.
 */
class XForm extends \DOTNET {
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169', 
        string $datatype_name = 'WebSupergoo.ABCpdf12.Doc',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }

    /**
     * Use this method to refresh and reload the document fields.When the form is first requested, field data is cached. This allows
     * a level of optimization which would not otherwise be possible.However, if you are using the low-level functionality to modify
     * the field structure, the cache will not reflect your changes. In
     * this situation, you can force the fields to be reloaded by calling
     * Refresh. 
     */
    public function Refresh(): void
    {
       parent::Refresh();
    }

    /**
     * Use this method to permanently stamp all fields into the document.When this method is called, all field appearances are stamped permanently
     * into the document and the fields are deleted.Each field becomes a new layer on the page (see Doc.LayerCount)
     * so you may wish to call Doc.Flatten
     * on any affected pages.You can use the XField.Stamp
     * method to stamp individual fields into the document. 
     */
    public function Stamp(): void
    {
       parent::Stamp();
    }
}