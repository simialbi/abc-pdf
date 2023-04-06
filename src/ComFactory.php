<?php

namespace ABCPdf;

/**

 */
class ComFactory extends \DOTNET {
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
     * Use this method to create a Doc object in the application domain
     * of the ComFactory object. 
     * @return Doc The newly created Doc object.
     */
    public function CreateDoc(): Doc
    {
       return parent::CreateDoc();
    }

    /**
     * Use this method to create an Image object in the application domain
     * of the ComFactory object. 
     * @return XImage The newly created Image object.
     */
    public function CreateImage(): XImage
    {
       return parent::CreateImage();
    }

    /**
     * Use this method to create an XColor object in the application domain
     * of the ComFactory object. 
     * @return XColor The newly created XColor object.
     */
    public function CreateXColor(): XColor
    {
       return parent::CreateXColor();
    }

    /**
     * Use this method to create an XPoint object in the application domain
     * of the ComFactory object. 
     * @return XPoint The newly created XPoint object.
     */
    public function CreateXPoint(): XPoint
    {
       return parent::CreateXPoint();
    }

    /**
     * Use this method to create an XRect object in the application domain
     * of the ComFactory object. 
     * @return XRect The newly created XRect object.
     */
    public function CreateXRect(): XRect
    {
       return parent::CreateXRect();
    }

    /**
     * Use this method to create an XSaveTemplateData object in the application domain
     * of the ComFactory object. 
     * @return XSaveTemplateData The newly created XSaveTemplateData object.
     */
    public function CreateXSaveTemplateData(): XSaveTemplateData
    {
       return parent::CreateXSaveTemplateData();
    }

    /**
     * Use this method to create an XSettings object in the application domain
     * of the ComFactory object. 
     * @return XSettings The newly created XSettings object.
     */
    public function CreateXSettings(): XSettings
    {
       return parent::CreateXSettings();
    }

    /**
     * Use this method to create an XTextStyle object in the application domain
     * of the ComFactory object. 
     * @return XTextStyle The newly created XTextStyle object.
     */
    public function CreateXTextStyle(): XTextStyle
    {
       return parent::CreateXTextStyle();
    }

    /**
     * Use this method to create an XTransform object in the application domain
     * of the ComFactory object. 
     * @return XTransform The newly created XTransform object.
     */
    public function CreateXTransform(): XTransform
    {
       return parent::CreateXTransform();
    }
}