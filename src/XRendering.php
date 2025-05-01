<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property bool $AntiAliasImages Whether to anti-alias images.
 * @property bool $AntiAliasPolygons Whether to anti-alias polygons.
 * @property bool $AntiAliasScene Whether to apply entire-scene anti-aliasing.
 * @property bool $AntiAliasText Whether to anti-alias text.
 * @property bool $AutoRotate Whether pages should be automatically rotated.
 * @property int $BitsPerChannel The number of bits per output color channel.
 * @property string $ColorSpace The name of the output color space.
 * @property string $DefaultHalftone The default halftone type and options.
 * @property float $DotsPerInch The output resolution in dots per inch (DPI).
 * @property float $DotsPerInchX The horizontal output resolution in dots per inch (DPI).
 * @property float $DotsPerInchY The vertical output resolution in dots per inch (DPI).
 * @property bool $DrawAnnotations Whether to render fields and annotations.
 * @property string $IccCmyk The path to the default CMYK ICC color profile.
 * @property string $IccGray The path to the default Gray ICC color profile.
 * @property string $IccOutput The path to the default output ICC color profile.
 * @property string $IccRgb The path to the default RGB ICC color profile.
 * @property-read string $Log The log for the last render.
 * @property string $NamedSeparation Named separations.
 * @property bool $Overprint Whether to apply overprint.
 * @property bool $SaveAlpha Whether to save the alpha channel into the output.
 * @property bool $SaveAppend Whether to append to (rather than to overwrite) existing image
 * files.
 * @property int $SaveCompression The preferred compression method.
 * @property int $SaveQuality The output file quality for lossy compression.
 * @property bool $UseEmbeddedHalftone Whether to use embedded halftones.
 */
class XRendering extends \DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XRendering',
        int    $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }

    /**
     * Use this method to render the PDF to memory.The output is a rendition of the current Doc.Rect
     * of the current Doc.Page.Any page rotation specified in the PDF page is applied so that
     * the output render is the correct orientation. This may mean that
     * the output width and height are transposed copies of the width and
     * height as specified in the Doc.Rect.The file path extension determines the format of the output. The
     * file name extensions which may be used are .TIF, .TIFF, JPG, GIF,
     * PNG, .BMP and .EMF. EMF is a vector rather than raster format, which
     * can be useful when you require resolution independence and smaller
     * files.Normally, you will want to render your documents using the Save
     * method. However, sometimes, you will need to obtain your image as
     * raw data rather than in file format. The GetData method allows you
     * to do this.You may wish to write such an image directly to a client browser
     * rather than going through an intermediate file. The data you obtain
     * using GetData can be written direct to an HTTP stream using Response.BinaryWrite.
     * Similarly, you may wish to obtain raw data for insertion into a database.
     *
     * @param string $Name A dummy file name used to determine the type of image required.
     *
     * @return array The image as an array of bytes.
     */
    public function GetData(string $Name): array
    {
        return parent::GetData($Name);
    }

    /**
     * Use this method to render the PDF.The output is a rendition of the current Doc.Rect
     * of the current Doc.Page.Any page rotation specified in the PDF page is applied so that
     * the output render is the correct orientation. This may mean that
     * the output width and height are transposed copies of the width and
     * height as specified in the Doc.Rect.The file path extension determines the format of the output. The
     * file name extensions which may be used are .TIF, .TIFF, .JPG, .GIF,
     * .PNG, .BMP, .JP2, .EMF and .PS. JP2 is used for the JPEG 2000 format.
     * EMF is a vector rather than raster format, which can be useful when
     * you require resolution independence and smaller files. PS is
     * PostScript-compatible raw vector output.
     *
     * @param string $Path The destination file path.
     */
    public function Save(string $Path): void
    {
        parent::Save($Path);
    }
}
