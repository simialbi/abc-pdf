<?php

namespace ABCPdf;

/**
 * @property int $AppliedOrientation The orientation transform that should be applied to the
                                    image.
 * @property-read XRect $BoundingBox The physical bounds of the image in points.
 * @property int $Frame The currently selected frame.
 * @property-read int $FrameCount The number of frames in the image.
 * @property-read float $FrameRate The default frame rate for a moving image.
 * @property-read bool $HasRealRes Whether the image specifies the resolution.
 * @property-read int $Height The height of the current frame (pixels).
 * @property-read float $HRes The horizontal resolution of the current frame (DPI).
 * @property-read bool $Indirect Whether the image will be added using indirect mode.
 * @property-read bool $NeedsFile Whether the file needs to exist.
 * @property-read bool $NeedsStream Whether the stream needs be kept open.
 * @property-read int $Orientation The orientation of the current frame.
 * @property XRect $Selection The current selection rectangle.
 * @property-read string $Type The type of image.
 * @property-read float $VRes The vertical resolution of the current frame (DPI).
 * @property-read int $Width The width of the current frame (pixels).
 */

class XImage extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XImage',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('BoundingBox', new XRect($this->getObject()->BoundingBox));
        $this->registerWrappedObject('Selection', new XRect($this->getObject()->Selection));
    }
    /**
     * Use this method to release resources and return the image to a just-created state. The overload without parameters 
     * disposes of the XReadOptions and of the Stream. The overload with output parameters returns the XReadOptions and the 
     * Stream. The returned objects have not been disposed of.                                                           
     *
     * @param mixed $outOptions The XReadOptions used to create the object.
     * @param mixed $outStream The Stream used to create the object if NeedsStream is true.
     *
     * @return void
     */
    public function Clear(mixed $outOptions = null, mixed $outStream = null): void
    {
        $this->__call('Clear', func_get_args());
    }

    /**
     * Gets internal information from the image. Internal information is format specific so you need to use different selectors 
     * with different formats. The JPEG 2000 format implements a "Structure" info which provides the tag structure of the 
     * raw data together with types, offsets and lengths. This can be used to modify or insert tags for custom output. The 
     * TIFF format implements a "TiffTag:" info which allows you to get the values of TIFF tags either by name or number. 
     * Simply append the item you are interested in. For example you might use "TiffTag:InkNames" to get the ink or "TiffTag:271" 
     * to retrieve the scanner manufacturer.                                                                             
     *
     * @param string $type The type of information to get.
     *
     * @return string 
     */
    public function GetInfo(string $type): string
    {
        return $this->__call('GetInfo', func_get_args());
    }

    /**
     * Load an image from data. The data is expected to be provided as an array of bytes. The data can be any of the following 
     * types: JPEG, GIF, TIFF, BMP, PNG, PSD, PDB, EXIF, WMF, EMF, EPS, PS or SWF (Flash).Ultimately each import goes through 
     * a ReadModule so for details of additional formats supported and the way they are imported, see the ReadModule property. 
     * Different images within the file can be accessed using the Frame property. Different portions of the image can be 
     * selected using the Selection property.                                                                            
     *
     * @param array $data The data containing the graphic.
     *
     * @return void
     */
    public function SetData(array $data): void
    {
        $this->__call('SetData', func_get_args());
    }

    /**
     * Load an image from file. The file can be any of the following types: JPEG, GIF, TIFF, BMP, PNG, PSD, PDB, EXIF, WMF, 
     * EMF, EPS, PS or SWF (Flash).Ultimately each import goes through a ReadModule so for details of additional formats 
     * supported and the way they are imported, see the ReadModule property. Different images within the file can be accessed 
     * using the Frame property. Different portions of the image can be selected using the Selection property.           
     *
     * @param string $path The path to the graphic file.
     *
     * @return void
     */
    public function SetFile(string $path): void
    {
        $this->__call('SetFile', func_get_args());
    }

    /**
     * Assign a soft mask or alpha channel. Soft masks are used to assign levels of transparency to an image. The mask provided 
     * will be converted to a grayscale intensity map and may be scaled to ensure that the dimensions of the mask match those 
     * of the image. The assigned mask applies to all frames of the current image. If the Invert parameter is set then the 
     * mask will be inverted - making transparent areas opaque and opaque areas transparent. Different images within the 
     * mask can be accessed using the Frame property. Different portions of the mask can be selected using the Selection 
     * property. Note that transparency is only applied to an Image if the Indirect property is true (which is generally 
     * the case).                                                                                                        
     *
     * @param XImage $mask The image containing the soft mask.
     * @param bool $invert Whether to invert the mask.
     *
     * @return void
     */
    public function SetMask(XImage $mask, bool $invert): void
    {
        $this->__call('SetMask', func_get_args());
    }

    /**
     * Load an image from stream. The stream can contain any of the following types: JPEG, GIF, TIFF, BMP, PNG, PSD, PDB, 
     * EXIF, WMF, EMF, EPS, PS or SWF (Flash).Ultimately each import goes through a ReadModule so for details of additional 
     * formats supported and the way they are imported, see the ReadModule property. Different images within the file can 
     * be accessed using the Frame property. Different portions of the image can be selected using the Selection property. 
     *
     * @param mixed $Stream The stream containing the graphic.
     *
     * @return void
     */
    public function SetStream(mixed $Stream): void
    {
        $this->__call('SetStream', func_get_args());
    }


}