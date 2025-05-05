<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property-read string $Format The field format.
 * @property-read int $ID The Object ID associated with this field.
 * @property-read array $Kids All children of this field.
 * @property-read bool $MultiSelect Whether the field supports multiple selections.
 * @property-read string $Name The fully qualified field name.
 * @property-read array $Options The field options.
 * @property-read int $Page The ID of the page on which the field appears.
 * @property-read string $PartialName The partial field name.
 * @property-read XRect $Rect The location and size of the field.
 * @property-read string $Type The field type.
 * @property string $Value The field value.
 */

class XField extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        mixed $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XField',
        int $codepage = CP_UTF8
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('ComFactory', new ComFactory($this->getObject()->ComFactory));
        $this->registerWrappedObject('Rect', new XRect($this->getObject()->Rect));
    }
    /**
     * Use this method to focus on the field. This prepares the document for drawing at the field location. The Doc. Page, 
     * Doc. Rect and Doc. Transform may all be changed as a result of calling this method.                               
     *
     *
     * @return void
     */
    public function Focus(): void
    {
        $this->__call('Focus', func_get_args());
    }

    /**
     * Use this method to permanently stamp a field into the document. When this method is called, the field appearance is 
     * stamped permanently into the document and the field is deleted. The field becomes a new layer on the page (see Doc. 
     * LayerCount) so you may wish to call Doc. Flatten on the affected page. You can use the XForm. Stamp method to stamp 
     * all fields into the document.                                                                                     
     *
     *
     * @return void
     */
    public function Stamp(): void
    {
        $this->__call('Stamp', func_get_args());
    }


}