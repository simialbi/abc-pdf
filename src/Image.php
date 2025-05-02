<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property-read XRect $BoundingBox The physical bounds of the image in points.
 * @property int $Frame The currently selected frame.
 * @property-read int $FrameCount The number of frames in the image.
 * @property-read int $Height The height of the current frame (pixels).
 * @property-read float $HRes The horizontal resolution of the current frame (DPI).
 * @property-read bool $Indirect Whether the image will be added using indirect mode.
 * @property-read XRect $Selection The current selection rectangle.
 * @property-read string $Type The type of image.
 * @property-read float $VRes The vertical resolution of the current frame (DPI).
 * @property-read int $Width The width of the current frame (pixels).
 */

class Image extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.Image',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('ComFactory', new ComFactory($this->getObject()->ComFactory));
        $this->registerWrappedObject('BoundingBox', new XRect($this->getObject()->BoundingBox));
        $this->registerWrappedObject('Selection', new XRect($this->getObject()->Selection));
    }
    /**
     * Use this method to release resources and return the image to a just-created state.                                
     *
     *
     * @return void
     */
    public function Clear(): void
    {
        $this->__call('Clear', func_get_args());
    }

    /**
     * Loads an image from data. The data is expected to be provided as an array of bytes. The data can be any of the following 
     * types: JPEG, GIF, TIFF, BMP, PNG, EXIF, WMF or EMF. Different images within the file can be accessed using the Frame 
     * property. Different portions of the image can be selected using the Selection property.                           
     *
     * @param array $Data The data containing the graphic.
     *
     * @return void
     */
    public function SetData(array $Data): void
    {
        $this->__call('SetData', func_get_args());
    }

    /**
     * Loads an image from a file. The file can be any of the following types: JPEG, GIF, TIFF, BMP, PNG, EXIF, WMF or EMF. 
     * Different images within the file can be accessed using the Frame property. Different portions of the image can be 
     * selected using the Selection property.                                                                            
     *
     * @param string $FilePath The path to the graphic file.
     *
     * @return void
     */
    public function SetFile(string $FilePath): void
    {
        $this->__call('SetFile', func_get_args());
    }

    /**
     * Assigns a soft mask or alpha channel. Soft masks are used to assign levels of transparency to an image. The mask provided 
     * will be converted to a grayscale intensity map and may be scaled to ensure that the dimensions of the mask match those 
     * of the image. The assigned mask applies to all frames of the current image. If the Invert parameter is set, then the 
     * mask will be inverted - making transparent areas opaque and opaque areas transparent. Different images within the 
     * mask can be accessed using the Frame property. Different portions of the mask can be selected using the Selection 
     * property. Note that transparency is only applied to an Image if the Indirect property is true (which is generally 
     * the case).                                                                                                        
     *
     * @param XImage $Mask The image containing the soft mask.
     * @param bool $Invert Whether to invert the mask.
     *
     * @return void
     */
    public function SetMask(XImage $Mask, bool $Invert): void
    {
        $this->__call('SetMask', func_get_args());
    }


}