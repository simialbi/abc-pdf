<?php

namespace ABCPdf;

/**
 */

class ComFactory extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.ComFactory',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

    }
    /**
     * Use this method to create a Doc object in the application domain of the ComFactory object.                        
     *
     *
     * @return Doc The newly created Doc object.
     */
    public function CreateDoc(): Doc
    {
        return $this->__call('CreateDoc', func_get_args());
    }

    /**
     * Use this method to create an Image object in the application domain of the ComFactory object.                     
     *
     *
     * @return XImage The newly created Image object.
     */
    public function CreateImage(): XImage
    {
        return $this->__call('CreateImage', func_get_args());
    }

    /**
     * Use this method to create an XColor object in the application domain of the ComFactory object.                    
     *
     *
     * @return XColor The newly created XColor object.
     */
    public function CreateXColor(): XColor
    {
        return $this->__call('CreateXColor', func_get_args());
    }

    /**
     * Use this method to create an XPoint object in the application domain of the ComFactory object.                    
     *
     *
     * @return XPoint The newly created XPoint object.
     */
    public function CreateXPoint(): XPoint
    {
        return $this->__call('CreateXPoint', func_get_args());
    }

    /**
     * Use this method to create an XRect object in the application domain of the ComFactory object.                     
     *
     *
     * @return XRect The newly created XRect object.
     */
    public function CreateXRect(): XRect
    {
        return $this->__call('CreateXRect', func_get_args());
    }

    /**
     * Use this method to create an XSaveTemplateData object in the application domain of the ComFactory object.         
     *
     *
     * @return XSaveTemplateData The newly created XSaveTemplateData object.
     */
    public function CreateXSaveTemplateData(): XSaveTemplateData
    {
        return $this->__call('CreateXSaveTemplateData', func_get_args());
    }

    /**
     * Use this method to create an XSettings object in the application domain of the ComFactory object.                 
     *
     *
     * @return XSettings The newly created XSettings object.
     */
    public function CreateXSettings(): XSettings
    {
        return $this->__call('CreateXSettings', func_get_args());
    }

    /**
     * Use this method to create an XTextStyle object in the application domain of the ComFactory object.                
     *
     *
     * @return XTextStyle The newly created XTextStyle object.
     */
    public function CreateXTextStyle(): XTextStyle
    {
        return $this->__call('CreateXTextStyle', func_get_args());
    }

    /**
     * Use this method to create an XTransform object in the application domain of the ComFactory object.                
     *
     *
     * @return XTransform The newly created XTransform object.
     */
    public function CreateXTransform(): XTransform
    {
        return $this->__call('CreateXTransform', func_get_args());
    }


}