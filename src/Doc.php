<?php

namespace ABCPdf;

use DOTNET;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property-read XBookmark $Bookmark The top-level bookmark for the document.
 * @property-read XColor $Color The current drawing and filling color.
 * @property int $ColorSpace The current ColorSpace ID.
 * @property-read XRect $CropBox The current document visible page size.
 * @property-read XEncryption $Encryption The current encryption settings.
 * @property int $Font The current Font ID.
 * @property int $FontSize The current text size.
 * @property-read XForm $Form The document eForm.
 * @property float $HPos The current horizontal positioning.
 * @property-read XHtmlOptions $HtmlOptions The HTML and URL rendering options and control.
 * @property int $Layer The insertion position for new content.
 * @property-read int $LayerCount The number of layers on the current page.
 * @property-read string $License The current license details.
 * @property-read XRect $MediaBox The current document page size.
 * @property string $Options The current state options.
 * @property int $Page The current Page ID.
 * @property-read int $PageCount The number of pages in the document.
 * @property int $PageNumber The page number of the current page.
 * @property-read XPoint $Pos The current drawing position.
 * @property-read XRect $Rect The current rectangle used for drawing operations.
 * @property-read XRendering $Rendering The rendering options and control.
 * @property-read int $Root The root catalog object.
 * @property-read XSaveOptions $SaveOptions The save options and control.
 * @property-read XTextStyle $TextStyle The current style for drawing text.
 * @property bool $TopDown The gradient of the vertical coordinate.
 * @property-read XTransform $Transform The current transformation for drawing.
 * @property string $Units The current measurement units.
 * @property float $VPos The current vertical positioning.
 * @property float $Width The current line width.
 */
class Doc extends DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.Doc',
        int    $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }

    /**
     * Adds an arc to the current page. The arc is drawn in the current
     * color at the current width
     * and with the current options.The arc is positioned at the center coordinates and can have distinct
     * horizontal and vertical radii. Drawing starts at the start angle,
     * and the arc is swept out until the end angle is reached. Angles
     * are measured anti-clockwise with zero at three o'clock.The AddArc method returns the Object ID of the newly added Graphic
     * object. 
     * @param float $AngleStart The start angle of the arc in degrees.
     * @param float $AngleEnd The end angle of the arc in degrees.
     * @param float $CenterX The horizontal coordinate of the center of the arc.
     * @param float $CenterY The vertical coordinate of the center of the arc.
     * @param float $RadiusX The horizontal radius of the arc.
     * @param float $RadiusY The vertical radius of the arc.
     * @param bool $Filled Whether to fill the arc rather than simply drawing it (optional).
     * @return int The Object ID of the newly added Graphic object.
     */
    public function AddArc(float $AngleStart, float $AngleEnd, float $CenterX, float $CenterY, float $RadiusX, float $RadiusY, bool $Filled = null): int
    {
        return parent::AddArc($AngleStart, $AngleEnd, $CenterX, $CenterY, $RadiusX, $RadiusY, $Filled);
    }

    /**
     * Adds a bookmark which points to the current page.Bookmarks are specified as paths in much the same way as file paths.
     * Headings and subheadings are separated by a backslash character.
     * For example:"1. Introduction\1.1 Aim and Methods\1.1.3 Diagrams"When a bookmark is added, intermediate headings and subheadings
     * will be created if they do not already exist.To add multiple bookmarks all referring to the same page, simply
     * call the AddBookmark method multiple times.This method returns the Object ID of the newly added Bookmark
     * object. 
     * @param string $Path The path to the bookmark.
     * @param bool $Open Whether the bookmark should be displayed open (expanded) or
     * closed (collapsed).
     * @return int The Object ID of the newly added Bookmark object.
     */
    public function AddBookmark(string $Path, bool $Open): int
    {
        return parent::AddBookmark($Path, $Open);
    }

    /**
     * Adds an ICC-based color space to the document returning the ID
     * of the newly added object.ICC Color Spaces allow the precise representation of colors in
     * a device independent way. The ICC format is defined by the International
     * Color Consortium (http://www.color.org/).ABCpdf will allow you to add ICC profiles in the Gray, RGB, CMYK
     * or Lab color spaces. This method will throw an error if the file
     * is inaccessible or invalid.The current color space is defined by the ColorSpace
     * property. The current color is defined by the Color
     * property. The ColorSpace is used when the Color is of a matching
     * type. If the color type does not match, then the default - device
     * - color space is used.For example, you add a CMYK color space and assign it to the ColorSpace
     * property. All CMYK Colors you use will be defined in terms of this
     * color space. However, RGB and Grayscale colors will continue to be
     * defined in terms of the default - device - color spaces. 
     * @param string $Path The path to the ICC color space file.
     * @return int The Object ID of the newly added ColorSpace object.
     */
    public function AddColorSpaceFile(string $Path): int
    {
        return parent::AddColorSpaceFile($Path);
    }

    /**
     * Adds a separation color space to the document returning the ID
     * of the newly added object.Separation color spaces allow you to add spot colors or isolate
     * the use of individual colorants. A separation color space represents
     * a particular colorant and allows you to specify the amount of that
     * colorant that is applied.For example, you might define a separation color space called Gold
     * with a display representation of CMYK yellow. You might then draw
     * some text with different amounts of Gold. When viewing the output
     * on a standard monitor, the display representation of the color would
     * be used. However, when printed - using appropriate software and an
     * appropriate printer - the name of the color might be used to select
     * a gold colored ink.The current color space is defined by the ColorSpace
     * property. The current color is defined by the Color
     * property. Because separations represent a scalar property,
     * you should use single-component - grayscale - colors to specify
     * the amount of spot colorant to use.There are two special color spaces:'All' refers collectively to all colorants on an output device.
     * It can be useful for printing registration marks.'None' indicates no colorant and will never produce any visible
     * output. 
     * @param string $Name The name of the color.
     * @param string $Color The display representation of the color. This should be supplied
     * in the same format as the XColor.String
     * uses.
     * @return int The Object ID of the newly added ColorSpace object.
     */
    public function AddColorSpaceSpot(string $Name, string $Color): int
    {
        return parent::AddColorSpaceSpot($Name, $Color);
    }

    /**
     * Adds a font to the document.The font name and a description of the font style are held within
     * the document. However, the actual font itself is not added to the
     * document. If you wish to embed a font, you should use the EmbedFont
     * method.When a client opens the PDF, Acrobat will attempt to find the exact
     * same font on the client system. If the exact font is not available,
     * then a substitute font will be chosen using the font description
     * to determine the best match.The following fonts are guaranteed to be available on every system.Additionally, you can add any TrueType, OpenType or Type 1 font
     * that you have installed on your system. The name you should use
     * is the one referenced in your fonts folder. For example.The AddFont method returns the Object ID of the newly added Font
     * object. Typically, you will want to assign this return value to the
     * document Font property using code of the form.theDoc.Font = theDoc.AddFont("Courier")If the specified font could not be found, then you will get an Object
     * ID of zero returned. You may wish to check for this possibility.
     * Otherwise, a default font will be used.Fonts are cached so newly added fonts will not be available to
     * ABCpdf until the application is restarted. If you need to dynamically
     * load a font, you can pass this method a path to your font file. This
     * will add the font to the cache and make it available for use. You
     * should not move, rename or delete a font file which has been dynamically
     * loaded using this technique. 
     * @param string $FontName The name of the font typeface.
     * @param string $Language The language type to use (optional).
     * See the Fonts and
     * Languages section for details on language types. The default
     * language type is Latin.
     * @param bool $Vertical Whether the text direction should be vertical (optional).
     * See the Fonts and
     * Languages section for details on writing directions. The
     * default is false to indicate standard left-to-right layout.
     * @return int The Object ID of the newly added Font object.
     */
    public function AddFont(string $FontName, string $Language = null, bool $Vertical = null): int
    {
        return parent::AddFont($FontName, $Language, $Vertical);
    }

    /**
     * Adds a visible grid to the current page. The grid shows locations
     * on the page and the effect of the current transform. It is designed
     * to help with object positioning during development. 
     * @return int The Object ID of the newly added Grid object.
     */
    public function AddGrid(): int
    {
        return parent::AddGrid();
    }

    /**
     * Adds a block of HTML styled text to the current page.This method works in a manner similar to the AddText
     * method, but it allows you to add multi-styled text by inserting
     * simple HTML tags. A listing of supported tags is given in the HTML
     * Styled Text section of the documentation.You can chain together multiple HTML blocks so that text flows
     * from one to the next. To do this, you need to first add a block of
     * HTML. Then add multiple new HTML blocks each time passing in the
     * ID obtained from the previous call.When no more text is available, the AddHtml method will return
     * zero. Alternatively, you can query the Truncated
     * property of the Text object before adding a new item to the chain.This method returns the Object ID of the newly added Text object.
     * If no text could be added, then zero is returned. This will happen
     * if a zero length string was supplied or if the rectangle was too
     * small for even one character to be displayed.Typically, you will get a return value of zero if your text was
     * too large to fit in your Rect
     * or if the Pos was at the end
     * of the Rect.Text styles for the entire HTML content are determined at the point
     * at which the first item in a text chain is created. This means that
     * varying document styles will not affect the way in which subsequent
     * items in the chain are displayed.For an example of chaining, see the Text
     * Flow Example.Note that there is no requirement that blocks be organized in a
     * linear chain. That means that you can use the same ID as the ChainID
     * parameter to multiple calls to this method. If you wish, you can
     * create trees of HTML blocks, flowing text from a chain head through
     * multiple display areas on your document. 
     * @param string $Text The HTML to be added to the page.
     * @param int $ChainID The Object ID of a previously added text block. If this parameter
     * is supplied, then the contents of the Text parameter are ignored.
     * @return int The Object ID of the newly added Text object.
     */
    public function AddHtml(string $Text, int $ChainID = null): int
    {
        return parent::AddHtml($Text, $ChainID);
    }

    /**
     * Adds an image to the current page returning the ID of the newly
     * added object.This method attempts to make a sensible decision as to which of
     * the following methods to call dependent on the content of the ImageSpec.This method is provided for backward compatibility. You should call
     * the appropriate method directly rather than working via this method. 
     * @param mixed $ImageSpec The image to be added to the page.
     * @param int $Frame Some image formats support multiple frames or pages. You can
     * specify the frame you want added using this optional argument.
     * The default is one to indicate the first frame.
     * @param string $SrcRect Some image formats support source rectangles. You can specify
     * the portion of the image you want drawn using this optional
     * argument. The default value is the rectangle encompassing
     * the entire image.
     * @return int The ID of the newly added Image object.
     */
    public function AddImage(mixed $ImageSpec, int $Frame = null, string $SrcRect = null): int
    {
        return parent::AddImage($ImageSpec, $Frame, $SrcRect);
    }

    /**
     * Adds a copy of an image which has already been inserted elsewhere
     * in the document.You can use this facility to add commonly used graphics such as
     * watermarks. The raw image data is inserted only once, which means
     * that PDF size is greatly reduced.This method only works with raster or bitmap images. So your ID
     * must have been obtained from a previous call to AddImageFile,
     * AddImageData or AddImageObject.The image is scaled to fill the current Rect.
     * It is transformed using the current Transform.If the width or height of the current rectangle is zero, the image
     * is auto-sized. If you are working in TopDown
     * mode, the image is positioned with its top left pinned at the location
     * indicated by the rectangle. If you are not in TopDown mode, the bottom
     * left of the image is pinned at the location indicated by the rectangle.
     * In both cases, the natural dimensions of the supplied image are used
     * to determine the displayed width and height resulting in a 72-dpi
     * output. 
     * @param int $ID The ID of an existing Image object.
     * @return int The ID of the newly added Image object.
     */
    public function AddImageCopy(int $ID): int
    {
        return parent::AddImageCopy($ID);
    }

    /**
     * Extracts an image from a chunk of data and adds it to the current
     * page returning the ID of the newly added object.This method is essentially the same as AddImageFile,
     * but it allows you to add images specified as raw data rather than as
     * a file path. 
     * @param array $Data The data containing the image in a format such as JPEG or
     * TIFF.
     * @param int $Frame Some image formats support multiple frames or pages. The first
     * frame is frame one.
     * @return int The ID of the newly added Image object.
     */
    public function AddImageData(array $Data, int $Frame): int
    {
        return parent::AddImageData($Data, $Frame);
    }

    /**
     * Draws a page from one PDF document onto the current page of this
     * document.The page is scaled to fill the current Rect.
     * It is transformed using the current Transform.If the width or height of the current rectangle is zero, the image
     * is auto-sized. If you are working in TopDown
     * mode, the image is positioned with its top left pinned at the location
     * indicated by the rectangle. If you are not in TopDown mode, the bottom
     * left of the image is pinned at the location indicated by the rectangle.
     * In both cases, the natural dimensions of the supplied image are used
     * to determine the displayed width and height resulting in a 72-dpi
     * output. 
     * @param Doc $Source The source document.
     * @param int $Page The page number of the source page you want drawn. Use one to indicate the first page.
     * @param string $SrcRect The portion of the page you want drawn. Use an empty string
     * to specify the rectangle encompassing the entire page.
     * The format of this string should be the same as that obtained
     * via the XRect.String
     * property.
     * @return int The ID of an implementation-dependent object.
     */
    public function AddImageDoc(Doc $Source, int $Page, string $SrcRect): int
    {
        return parent::AddImageDoc($Source, $Page, $SrcRect);
    }

    /**
     * Adds an image to the current page returning the ID of the newly
     * added object.Images embedded using this method are always inserted using pass-through
     * mode. Pass-through mode is faster than indirect
     * mode. It allows the preservation of compression settings, native
     * color spaces and ICC color profiles. It allows vector graphics to
     * be maintained in vector format. However, it supports a limited range
     * of image formats - JPEG, JPEG 2000, TIFF, EMF, WMF, PS (PostScript)
     * or EPS (Encapsulated PostScript).Note that not all EMF or WMF files can be represented in terms
     * of PDF vectors. If this is the case, you should look at using the
     * Image object to convert these
     * objects prior to embedding.The image is scaled to fill the current Rect.
     * It is transformed using the current Transform.If the width or height of the current rectangle is zero, the image
     * is auto-sized. If you are working in TopDown
     * mode, the image is positioned with its top left pinned at the location
     * indicated by the rectangle. If you are not in TopDown mode, the bottom
     * left of the image is pinned at the location indicated by the rectangle.
     * In both cases, the natural dimensions of the supplied image are used
     * to determine the displayed width and height resulting in a 72-dpi
     * output.Transparency. Occasionally, you may find that you need
     * to invert the transparency of your image. To do this, you can
     * assign a decode array using the ID returned from this method.To invert the transparency:theDoc.SetInfo theDoc.GetInfo(theID, "XObject"),
     * "/SMask/Decode", "[1 0]"A similar technique can be used for inverting or altering
     * color levels on the image itself.To invert an RGB image:theDoc.SetInfo theDoc.GetInfo(theID, "XObject"),
     * "/Decode", "[1 0 1 0 1 0]" 
     * @param  $Path
     * @param int $Frame Some image formats support multiple frames or pages. The first
     * frame is frame one.
     * @return int The Object ID of the newly added Image object.
     */
    public function AddImageFile($Path, int $Frame): int
    {
        return parent::AddImageFile($Path, $Frame);
    }

    /**
     * This method is essentially the same as the AddImageUrl
     * method, but it allows you to use raw HTML rather than having to specify
     * a URL.ABCpdf saves this HTML into a temporary file and renders the file
     * using a 'file://' protocol specifier. So this is a convenience method
     * - it doesn't offer any performance enhancements.Sometimes the IIS users don't have full access to the temp directory.
     * This is determined by the system setup you have on your machine.
     * If this is the case, you will get errors returned.So if you are working from ASP, you may find that you need to enable
     * access to the temp directory for the ASPNET user, the IUSR_MACHINENAME
     * user or the IWAM_MACHINENAME user.Styles and Images. HTML does not exist within a file,
     * and so it does not have a location.External stylesheets and images are often referenced via
     * relative URLs. Because the HTML has no location, it is impossible
     * to resolve these relative reference.So you need to provide your stylesheet and image links as
     * absolute references. Or you may be able to use the HTML BASE
     * element to specify an appropriate base location. Or you can
     * save your HTML to file in an appropriate location and then
     * use AddImageUrl. 
     * @param string $Html The HTML to be rendered.
     * @param bool $Paged Allows you to override the default XHtmlOptions.Paged
     * property (optional).
     * @param int $Width Allows you to override the default
     * XHtmlOptions.BrowserWidth property (optional).
     * @param bool $DisableCache Allows you to override and disable the page cache (optional).
     * See the XHtmlOptions.PageCacheEnabled
     * property for details.
     * @return int The ID of the newly added View object.
     */
    public function AddImageHtml(string $Html, bool $Paged = null, int $Width = null, bool $DisableCache = null): int
    {
        return parent::AddImageHtml($Html, $Paged, $Width, $DisableCache);
    }

    /**
     * Gets an image from an Image object and adds it to the current page
     * returning the ID of the newly added object.Adds the Selection
     * of the current Frame
     * returning the ID of the newly added object.Images embedded using this method are always inserted using indirect
     * mode. Indirect mode is not as fast as pass-through
     * mode. However, it allows greater flexibility and the use of many
     * different image formats.If the Transparent parameter is set to true, then any transparency
     * information will be preserved. This allows you to add formats such
     * as transparent GIF, PNG with alpha channel, or images with masks
     * set using the Image.SetMask
     * method.The image is scaled to fill the current Rect.
     * It is transformed using the current Transform.If the width or height of the current rectangle is zero, the image
     * is auto-sized. If you are working in TopDown
     * mode, the image is positioned with its top left pinned at the location
     * indicated by the rectangle. If you are not in TopDown mode, the bottom
     * left of the image is pinned at the location indicated by the rectangle.
     * In both cases, the natural dimensions of the supplied image are used
     * to determine the displayed width and height resulting in a 72-dpi
     * output. 
     * @param XImage $Image The image to be added to the page.
     * @param bool $Transparent Whether transparency information should be preserved.
     * @return int The ID of the newly added Image object.
     */
    public function AddImageObject(XImage $Image, bool $Transparent): int
    {
        return parent::AddImageObject($Image, $Transparent);
    }

    /**
     * Some web pages are too large to fit on one PDF page.To split a web page across multiple PDF pages, you need to call
     * AddImageUrl or AddImageHtml
     * to render the first page. The ID returned from these calls represents
     * the head of the chain.To add subsequent pages to the chain, you need to make calls to
     * AddImageToChain passing in the previous image from the chain each
     * time.As well as using chaining to split web pages across multiple PDF
     * pages, you can also use it to split your web pages across multiple
     * columns within a page. You can even split your chain to generate
     * multiple copies of the same page.More information can be found in the HTML
     * / CSS Rendering section of the documentation.Similarly, some PostScript (PS) files contain more than one page
     * of content.To split a PS file across multiple PDF pages, you need to call AddImageFile
     * or AddImageData to render the first
     * page. The ID returned from these calls represents the head of the
     * chain.To add subsequent pages to the chain, you need to make calls to
     * AddImageToChain passing in the previous image from the chain each
     * time. 
     * @param int $ID The ID of the previous object in the chain.
     * @return int The ID of the newly added object.
     */
    public function AddImageToChain(int $ID): int
    {
        return parent::AddImageToChain($ID);
    }

    /**
     * This method adds a web page to a document.The page is added in accordance with the current XHtmlOptions
     * settings. As a convenience, you can override the more commonly used
     * settings as detailed above.Only the first page of the document is drawn. Subsequent pages
     * can be drawn using the AddImageToChain
     * method.The web page is scaled to fill the current Rect.
     * It is transformed using the current Transform.Caching. Sometimes, you may find that pages appear
     * to be cached.If you are using AddImageUrl, it is possible that the URL
     * is in some way being cached. So the PDF may be changing, but
     * the content within it may be staying the same. See the HTML
     * / CSS Rendering section of the documentation for details.Alternatively, it is possible that the PDF itself is being
     * cached. Most commonly, this can happen if you're streaming
     * the PDF direct to the browser and you have certain IIS settings
     * (like Expire Content) disabled.Your first step should be to narrow down the problem. Why
     * not save the PDF to disk at the same time as sending it to
     * the client? That way you can establish whether the PDF itself
     * is being cached or whether the content is in some way being
     * cached (resulting in the same PDF being created again and
     * again).If the PDF is being cached, you will need to look at your
     * IIS settings. ABCpdf is not doing the caching (and indeed,
     * it cannot cache the PDF in this way); it will be something
     * which is happening either in IIS/ASP or on an intervening
     * proxy server or on the client. 
     * @param string $Url The URL for the page to be rendered.
     * @param bool $Paged Allows you to override the default XHtmlOptions.Paged
     * property (optional).
     * @param int $Width Allows you to override the default
     * XHtmlOptions.BrowserWidth property (optional).
     * @param bool $DisableCache Allows you to override and disable the page cache (optional).
     * See the XHtmlOptions.PageCacheEnabled
     * property for details.
     * @return int The ID of the newly added View object.
     */
    public function AddImageUrl(string $Url, bool $Paged = null, int $Width = null, bool $DisableCache = null): int
    {
        return parent::AddImageUrl($Url, $Paged, $Width, $DisableCache);
    }

    /**
     * Adds a line to the current page. The line is drawn in the current
     * color at the current width
     * and with the current options.The AddLine method returns the Object ID of the newly added Graphic
     * object. 
     * @param float $X1 The horizontal coordinate of the start point.
     * @param float $Y1 The vertical coordinate of the start point.
     * @param float $X2 The horizontal coordinate of the end point.
     * @param float $Y2 The vertical coordinate of the end point.
     * @return int The Object ID of the newly added Graphic object.
     */
    public function AddLine(float $X1, float $Y1, float $X2, float $Y2): int
    {
        return parent::AddLine($X1, $Y1, $X2, $Y2);
    }

    /**
     * You will not normally need to use this feature. However, it can
     * be useful if you wish to add objects which are defined in the PDF
     * specification but not supported by ABCpdf.Be aware that the text you pass to this method must be in native
     * PDF format. This means that unusual characters in text strings must
     * be appropriately escaped. For full details of the way that PDF objects
     * are represented, you should see the Adobe PDF Specification.Your newly added object needs to be referenced from somewhere in
     * the PDF document. If you do not reference your object, it will be
     * orphaned and will be deleted when the document is saved. 
     * @param string $Text The raw native object to be added.
     * @return int The Object ID of the newly added object.
     */
    public function AddObject(string $Text): int
    {
        return parent::AddObject($Text);
    }

    /**
     * Adds an oval to the current page. The oval is drawn in the current
     * color at the current width
     * and with the current options.
     * It is scaled to fill the current rectangle.
     * The oval may be outlined or filled.The AddOval method returns the Object ID of the newly added Graphic
     * object. 
     * @param bool $Filled Whether to fill the oval rather than simply outline it.
     * @return int The Object ID of the newly added Graphic object.
     */
    public function AddOval(bool $Filled): int
    {
        return parent::AddOval($Filled);
    }

    /**
     * Adds a page to the current document.The AddPage method returns the Object ID of the newly added Page
     * object. Typically, you will want to assign this return value to the
     * document Page property using code of the form.theDoc.Page = theDoc.AddPage()Pages are added at the end of the document. However, you can use
     * the PageNum parameter to insert pages at other locations. The following
     * code inserts a page at the start of a document.theDoc.Page = theDoc.AddPage(1)Any existing page and all subsequent pages will be shifted towards
     * the end of the document to make room for the insertion. 
     * @param int $PageNum The page insertion location (optional).
     * By default, pages are added at the end of the document.
     * @return int The Object ID of the newly added Page object.
     */
    public function AddPage(int $PageNum): int
    {
        return parent::AddPage($PageNum);
    }

    /**
     * Adds a pie slice to the current page. The slice is drawn in the
     * current color at the current
     * width and with the current
     * options.The pie slice represents a segment of the oval which would fill
     * the current rectangle. Drawing
     * starts at the start angle, and the arc is swept out until the end
     * angle is reached. Angles are measured anti-clockwise with zero at
     * three o'clock. The slice may be outlined or filled depending on
     * the values passed to the method.The AddPie function returns the Object ID of the newly added Graphic
     * object. 
     * @param float $AngleStart The start angle of the pie slice in degrees.
     * @param float $AngleEnd The end angle of the pie slice in degrees.
     * @param bool $Filled Whether to fill the pie slice rather than simply outline it.
     * @return int The Object ID of the newly added Graphic object.
     */
    public function AddPie(float $AngleStart, float $AngleEnd, bool $Filled): int
    {
        return parent::AddPie($AngleStart, $AngleEnd, $Filled);
    }

    /**
     * Adds a polygon to the current page. The polygon is drawn in the
     * current color at the current
     * width and with the current
     * options. The polygon may
     * be outlined or filled.The points string is a sequence of numbers representing the coordinates
     * of the polygon. The string should be of the format "x1 y1 x2
     * y2 ... xN yN". The numbers may be delimited with spaces, commas
     * or semicolons. If the first point is equal to the last then the
     * path is closed before outlining.The AddPoly method returns the Object ID of the newly added Graphic
     * object. 
     * @param string $Points The coordinates of the vertices of the polygon.
     * @param bool $Filled Whether to fill the polygon rather than simply outline it.
     * @return int The Object ID of the newly added Graphic object.
     */
    public function AddPoly(string $Points, bool $Filled): int
    {
        return parent::AddPoly($Points, $Filled);
    }

    /**
     * Adds a block of single styled text to the current page.For adding multi-styled text or for chaining text from one page
     * to another, you should use the AddHtml
     * method, which is used for adding HTML
     * styled text.The text is in the current style,
     * size and color
     * and starts at the location specified in the current position.
     * If the text is long, it will will wrap and extend downwards until
     * it fills the current rectangle.
     * Text positioning in the rectangle is determined by the horizontal
     * and vertical positioning.The AddText method returns the Object ID of the newly added Text
     * object. If no text could be added, then zero is returned. This will
     * happen if a zero length string is supplied or if the rectangle
     * is too small for even one character to be displayed.Typically, you will get a return value of zero if your text was
     * too large to fit in your Rect
     * or if the Pos was at the end
     * of the Rect. So if you are expecting text to be displayed and are
     * seeing a return value of zero, check your text size, check your
     * Rect is where you think it is by framing it using FrameRect,
     * and ensure your Pos is set at the top left of the Rect.Text is drawn word-wrapped within the current rectangle with the
     * first character at the location specified by the Pos property. Normally,
     * the Pos property reflects the top left position of the current rectangle.
     * However, if you need to alter the position at which text drawing
     * starts, you can modify the Pos property after changing the Rect.
     * When the text has been drawn, the Pos will be updated to reflect
     * the next text insertion point.Character positioning is specified from the top left of the character.
     * The FontSize determines
     * the total line height, and the character baseline is 80% of the way
     * down from the top of the line. 
     * @param string $Text The text to be added to the page.
     * @return int The Object ID of the newly added Text Object.
     */
    public function AddText(string $Text): int
    {
        return parent::AddText($Text);
    }

    /**
     * Use this method to append one PDF to the end of another one.Individual pages from one PDF can be drawn into another using the
     * AddImageDoc method.If you are inserting a number of pages, it is much faster to use
     * the Append method than to draw pages individually. It also has the
     * advantage of maintaining other information such as bookmarks. 
     * @param Doc $Doc The document to add to the end of this one.
     */
    public function Append(Doc $Doc): void
    {
        parent::Append($Doc);
    }

    /**
     * Use this method to determine whether an object is chainable.Some objects can be chained. A chunk of text may be chained from
     * page to page on the output PDF. Similarly, a web page may be chained
     * from page to page.This method allows you to determine whether the object you have added
     * is chainable or whether it is at the end of the chain.Only text, PostScript images and web pages can be chainable. So
     * your ID should have been obtained from a previous call to one of
     * the AddImage family of calls or from
     * AddHtml. 
     * @param int $ID The Object ID of the object to be tested.
     * @return bool Whether the object is chainable.
     */
    public function Chainable(int $ID): bool
    {
        return parent::Chainable($ID);
    }

    /**
     * Use this method to release resources and return the document to
     * a just-created state. 
     */
    public function Clear(): void
    {
        parent::Clear();
    }

    /**
     * Use this method to delete an object previously added to the document.Deletion is most commonly applied to pages to remove them from
     * the document. For example, to delete the current page, you might use
     * the following code:theDoc.Delete theDoc.Page 
     * @param int $ID The Object ID of the object to be deleted.
     */
    public function Delete(int $ID): void
    {
        parent::Delete($ID);
    }

    /**
     * Embeds a font into the document.The font name, a description of the font style and the the font
     * glyph descriptions themselves are placed into the document. This
     * ensures that the document will always display perfectly on every
     * system and that font substitutions will never need to be made.There are a number of reasons you may not wish to embed fonts and,
     * instead, use the AddFont method. Embedding
     * fonts can increase the size of your PDF considerably. Additionally,
     * by distributing a PDF with an embedded font, you are actually redistributing
     * the font itself. You should check with your font supplier or legal
     * department that you have permission to do this.For information on how to specify font names, see the AddFont
     * method.The EmbedFont method returns the Object ID of the newly added
     * Font object. Typically, you will want to assign this return value
     * to the document Font property using code of the form.theDoc.Font = theDoc.AddFont("Courier")If the specified font could not be found, then you will get an Object
     * ID of zero returned. You may wish to check for this possibility.
     * Otherwise, a default font will be used.Fonts are cached so newly added fonts will not be available to
     * ABCpdf until the application is restarted. If you need to dynamically
     * load a font, you can pass this method a path to your font file. This
     * will add the font to the cache and make it available for use. You
     * should not move, rename or delete a font file which has been dynamically
     * loaded using this technique. 
     * @param string $FontName The name of the font typeface.
     * @param string $Language The language type to use (optional).
     * See the Fonts and
     * Languages section for details on language types. The default
     * language type is Latin.
     * @param bool $Vertical Whether the text direction should be vertical (optional).
     * See the Fonts and
     * Languages section for details on writing directions. The
     * default is false to indicate standard left-to-right layout.
     * @param bool $Subset Whether to subset the font (optional).
     * See the Fonts and
     * Languages section for details on subsetting. The default
     * is false to indicate that the font should not be subsetted.
     * @param bool $Force Whether to override permissions on the font (optional).
     * Fonts often contain embedded licensing information. By default,
     * ABCpdf will prevent you from embedding fonts which indicate
     * that embedding is not permitted.
     * You can force the font to be embedded by passing true for
     * this value.
     * @return int The Object ID of the newly added Font object.
     */
    public function EmbedFont(string $FontName, string $Language = null, bool $Vertical = null, bool $Subset = null, bool $Force = null): int
    {
        return parent::EmbedFont($FontName, $Language, $Vertical, $Subset, $Force);
    }

    /**
     * Adds a painted rectangle to the current page. The rectangle location
     * and size is determined by the current rectangle,
     * the fill color is determined by the current color
     * and any options are determined by the current options.By specifying values for the horizontal and vertical radius parameters,
     * you can draw rectangles with rounded corners. The values refer to
     * the radii of the ellipse used to draw the corners.By setting the horizontal radius parameter to half the width of
     * the rect and the vertical radius parameter to half the height of
     * the rect, you can draw filled ovals and circles.The FillRect method returns the Object ID of the newly added
     * Graphic object. 
     * @param float $RadiusX The horizontal radius to use for rounded corners (optional).
     * @param float $RadiusY The vertical radius to use for rounded corners (optional).
     * @return int The Object ID of the newly added Graphic object.
     */
    public function FillRect(float $RadiusX, float $RadiusY): int
    {
        return parent::FillRect($RadiusX, $RadiusY);
    }

    /**
     * Objects added to a page are stored as individual layers. Calling
     * this method combines all layers on the current page and then
     * re-compresses the layer data.For pages that contain only a few layers, the reduction in size
     * will be minimal. However, for pages which contain complex tables
     * with many items, flattening can reduce the size of the output PDF
     * by a factor of five or more.Note that flattening will delete all the items currently on the
     * page and replace them with a new compressed item. This means that
     * Object IDs previously obtained from calls such as AddText
     * or FrameRect will no longer be valid. 
     * @return int The Object ID of the compressed page contents.
     */
    public function Flatten(): int
    {
        return parent::Flatten();
    }

    /**
     * Adds a rectangular frame to the current page. The frame location
     * and size is determined by the current rectangle,
     * the line color is determined by the current color,
     * the line width is determined by the current width
     * and any options are determined by the current options.By specifying values for the horizontal and vertical radius parameters,
     * you can draw rectangles with rounded corners. The values refers
     * to the radii of the ellipse used to draw the corners.By setting the horizontal radius parameter to half the width of
     * the rect and the vertical radius parameter to half the height of
     * the rect, you can draw ovals and circles.By default, frames are drawn round the outside of the current rectangle.
     * This allows you to add content and then frame it ensuring that the
     * frame and the content do not overlap. However, sometimes you may
     * wish to draw the frame round the inside of the rectangle. You can
     * do this by setting the Inside parameter to true.The FrameRect method returns the Object ID of the newly added
     * Graphic object. 
     * @param float $RadiusX The horizontal radius to use for rounded corners (optional).
     * @param float $RadiusY The vertical radius to use for rounded corners (optional).
     * @param bool $Inside Whether to draw the frame inside the rectangle (optional).
     * @return int The Object ID of the newly added Graphic object.
     */
    public function FrameRect(float $RadiusX, float $RadiusY = null, bool $Inside = null): int
    {
        return parent::FrameRect($RadiusX, $RadiusY, $Inside);
    }

    /**
     * Normally, you will want to save your documents using the Save
     * method. However, sometimes, you will need to obtain your PDF as raw
     * data rather than in file format. The GetData method allows you to
     * do this.You may wish to write a PDF direct to a client browser rather than
     * going through an intermediate file. The data you obtain using GetData
     * can be written directly to an HTTP stream using Response.BinaryWrite.
     * Similarly, you may wish to obtain raw data for insertion into a database.PDFs and Internet Explorer. The combination of Internet
     * Explorer and Acrobat is not always trouble-free - particularly
     * under https or using older versions of Internet Explorer. It can be
     * difficult to know exactly where the problem lies because there
     * is an interaction of the Operating System, Internet Explorer and Acrobat.
     * Any of these can be the cause.Sometimes, Internet Explorer may get 'stuck' on a particular content
     * type and insist on displaying your PDF as HTML. In this case,
     * you will see random text starting with %PDF. Sometimes, this
     * can happen if you stream PDF data to a window which was previously
     * displaying HTML.Sometimes, server-side debugging results in extra data being
     * inserted into the content stream. While this may not matter
     * for HTML, it will corrupt binary documents like PDF.Sometimes, your code may inadvertently insert extra data into
     * the content stream. Again, this will corrupt the PDF. Error
     * messages are a common cause of this kind of corruption.HTTP compression may result in PDF streams being compressed
     * before they are returned to the browser. While browsers are able to deal
     * with this type of compression, Acrobat may not be able to.
     * You can see whether this type of compression is being used by examining
     * the headers returned to the browser using a tool like IEWatch.
     * If you are using IIS 6 compression, you can disable it on a
     * page-by-page basis using the IIS Metabase Explorer from the
     * IIS 6 resource kit.For testing purposes, you may wish to change the content-disposition
     * from 'inline' to 'attachment'. This will allow you to download
     * the data rather than viewing it in your browser. You can then
     * check the downloaded document using Acrobat or a hex editor.Alternatively, if the problem is that PDFs seem to be cached,
     * you may wish to check the 'Enable Content Expiration' checkbox
     * you will find under the Web Site Properties.We would suggest two steps: 
     * @return array The PDF document as an array of bytes.
     */
    public function GetData(): array
    {
        return parent::GetData();
    }

    /**
     * After you modify a document, you may want to get back information
     * about the objects you have added. For example, you might want to
     * find out the natural dimensions of an image or you might want to
     * find out how many characters were drawn when you inserted some text.
     * This method allows you access to this information.There are core information types that all objects support. There
     * are also information types specific to particular types of object.
     * You can use core information types to allow you to iterate through
     * every object in your document finding out specific information about
     * each of them.If the object does not exist or does not support the requested
     * type of information, then an empty string is returned.Every object supports the ID and Type properties. For more detailed
     * information about this and other properties, see the PDF
     * Objects section of this document.PDF objects are case-sensitive, so be sure you use the correct case
     * when specifying information. 
     * @param int $ID The Object ID of the object to be queried.
     * @param string $Type The type of information to be retrieved.
     * @return string The returned information.
     */
    public function GetInfo(int $ID, string $Type): string
    {
        return parent::GetInfo($ID, $Type);
    }

    /**
     * This method allows you to extract the content from a page.There are three formats supported - "Text", "SVG"
     * and "SVG+".Text is in layout order, which may not be the same as reading order.
     * For example, what to a user may look like a space may simply
     * be two items of text positioned apart from each other, or it may
     * not. ABCpdf will make sensible assumptions on how items of text
     * should be combined but many situations are ambiguous.SVG is an XML based format for representing vector graphics. Because
     * SVG is standard XML, it's easy to parse and gives you the precise
     * position of each item of text on the page. The way that ABCpdf constructs
     * the SVG should make it easy to extract any information you require.
     * ABCpdf currently supports SVG text and paths.For example, a simple "Hello World" PDF might produce
     * the following content:<?xml version="1.0" standalone="no"?>
     * <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
     * <svg width="612" height="792" x="0"
     * y="0">
     * <text x="0" y="76.8" font-size="96"
     * font-family="Times-Roman" >Hello World</text>
     * </svg>SVG+ is an annotated form of SVG which includes details of the
     * PDF operators and how they relate to the items of content in the
     * SVG. It can be very useful if you are trying to deconstruct a page
     * and determine how objects in the PDF relate to objects in the SVG.For example, you could use SVG+ to identify the section of a PDF
     * stream that relates to a particular word on a page. You could then
     * replace the text show operator for that word with another one. Effectively,
     * you'd be performing a low-level Search/Replace on the PDF document.There is no official standard for SVG+, but if you are familiar
     * with the PDF specification it should be easy enough to understand.For example, a simple "Hello World" PDF might produce
     * the following content:<?xml version="1.0" standalone="no"?>
     * <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
     * <svg width="612" height="792" x="0"
     * y="0">
     * <pdf pdf_Op="q" pdf_StreamID="5" pdf_StreamOffset="0"
     * pdf_StreamLength="1" />
     * <pdf pdf_Op="BT" pdf_StreamID="5" pdf_StreamOffset="3"
     * pdf_StreamLength="2" />
     * <pdf pdf_Op="0 Tr" pdf_StreamID="5" pdf_StreamOffset="7"
     * pdf_StreamLength="4" />
     * <pdf pdf_Op="/Fabc6 96 Tf" pdf_StreamID="5"
     * pdf_StreamOffset="13" pdf_StreamLength="12"
     * />
     * <pdf pdf_Op="0 0 0 rg" pdf_StreamID="5" pdf_StreamOffset="27"
     * pdf_StreamLength="8" />
     * <pdf pdf_Op="1 0 0 1 0 715.2 Tm" pdf_StreamID="5"
     * pdf_StreamOffset="37" pdf_StreamLength="18"
     * />
     * <pdf pdf_Op="0 Ts" pdf_StreamID="5" pdf_StreamOffset="57"
     * pdf_StreamLength="4" />
     * <text x="0" y="76.8" font-size="96"
     * font-family="Times-Roman" pdf_CTM="1 0 0 1 0 0"
     * pdf_TM="1 0 0 1 0 715.2" pdf_Trm="96 0 0 96 0 715.2"
     * pdf_Tf="Fabc6" pdf_Tz="100" pdf_Ts="0"
     * pdf_w1000="5027" pdf_Op="(Hello World) Tj" pdf_StreamID="5"
     * pdf_StreamOffset="63" pdf_StreamLength="16"
     * >Hello World</text>
     * <pdf />
     * <pdf pdf_Op="ET" pdf_StreamID="5" pdf_StreamOffset="81"
     * pdf_StreamLength="2" />
     * <pdf pdf_Op="Q" pdf_StreamID="5" pdf_StreamOffset="85"
     * pdf_StreamLength="1" />
     * </svg>The operators within the PDF stream are detailed in the SVG. For
     * example, the first 'q' operator is located in Object ID 5 at offset
     * 0 and has a length of 1 byte. The 'Tj' operator which shows "Hello
     * World" is at offset 63 and has length 16. The Current Transformation
     * Matrix (CTM), the Text Matrix (TM), and other important PDF state
     * values are shown. 
     * @param string $Type The format in which to return the content.
     * @return string The returned content.
     */
    public function GetText(string $Type): string
    {
        return parent::GetText($Type);
    }

    /**
     * Use this method to read a PDF into a document object. Any existing
     * document content will be discarded.You can specify the PDF as a file path or by passing in the raw
     * PDF data. Raw data must be held as an array of bytes. You can open
     * encrypted PDF documents if you supply a valid password.After the read operation is complete, the Page
     * property will contain the ID of the first page in the document. The
     * Rect and MediaBox
     * properties will reflect the size of the first page in the document.ABCpdf operates an intelligent just-in-time object loading scheme,
     * which ensures that only those objects that are required are loaded
     * into memory. This means that if you are modifying large documents,
     * then server load will be kept to a minimum. The original PDF document
     * must be available for as long as the Document object is being used.As a result, you cannot overwrite a PDF file while it is
     * open for reading. You will need to save your PDF to another
     * location and then swap the two files round.Object deletion requires that all references to an object be
     * removed. There is no way of doing this without checking each object
     * in the document. So object deletion requires that every object in
     * the document is loaded, and for large documents, this may place a
     * significant load on the server.Reading encrypted documents places a greater load on the server
     * because - like object deletion - it requires that every object in
     * the document be loaded.Please note that you are legally bound to respect the permissions
     * present in existing PDF documents. For details, please see the Legal
     * Requirement Section.The Read method may be used to read eForm FDF documents as well
     * as PDF documents. Most PDF operations will not work on FDF documents,
     * but you can query field values using the GetInfo methods to return
     * Unicode strings.Modifying Documents. ABCpdf will allow you to open,
     * modify and save PDF documents.ABCpdf will allow you to draw on top of PDF documents or
     * add or delete pages or modify document data. However, because
     * of the way that PDF documents are structured, it's unlikely
     * that you'll be able to edit existing content.So if there are blank spaces which you can draw your entries
     * into, that will work. Indeed, you might want to draw a white
     * box over existing content and then draw on that.However, you shouldn't expect to be able to edit and re-flow
     * text that is already in your PDF. 
     * @param array|string $PathOrData The source file path or the source data.
     * @param string $Password Any password needed to open the document.
     */
    public function Read(array|string $PathOrData, string $Password = null): void
    {
        parent::Read($PathOrData, $Password);
    }

    /**
     * This method provides a simple method for remapping the pages in
     * a document. It can be used for reordering, copying or deleting pages.It accepts a list of page numbers and reorders the pages in the
     * document so that they mach these page numbers. If a number is repeated
     * more than once, the page is duplicated. If a number is omitted, the
     * page is deleted.Page numbers can be delimited using spaces, commas or semicolons.
     * The first page in a document is page one. So to reverse a four-page
     * document, you might use "4 3 2 1". 
     * @param string $Pages The ordered list of page numbers of pages to remain.
     */
    public function RemapPages(string $Pages): void
    {
        parent::RemapPages($Pages);
    }

    /**
     * Use this method to export the current document as PDF. The supplied
     * path is used as the destination. Any existing file will be overwritten.ABCpdf operates an intelligent just-in-time object loading scheme,
     * which ensures that only those objects that are required are loaded
     * into memory. This means that if you are modifying large documents,
     * then server load will be kept to a minimum. The original PDF document
     * must be available for as long as the Document object is being used.As a result, you cannot overwrite a PDF file while it is open for reading. You
     * will need to save your PDF to another location and then swap the
     * two files round.If you need to obtain a PDF as raw data, you can use the GetData
     * method.Versions. ABCpdf automatically determines the PDF version
     * depending on the features you use. If you use features from
     * only the 1.1 specification, it will write a 1.1 PDF. If you
     * use 1.3 features, it will write a 1.3 PDF. If you use 1.4 features,
     * it will write a 1.4 PDF. Ditto 1.5 and 1.6.If you're using a PDF template or drawing from another PDF,
     * the final output will be the minimum version used in these
     * templates. In many real world applications, this will be the
     * factor which determines the version in the final output produced
     * by ABCpdf.There is no advantage in producing a 1.6 document if you're
     * not using features from the 1.6 feature set. To do this will
     * simply stop users of older versions of Acrobat from accessing
     * a document which should be available to them. 
     * @param string $Path The destination file path.
     */
    public function Save(string $Path): void
    {
        parent::Save($Path);
    }

    /**
     * In the same way as you can get information about aspects of a document
     * using the GetInfo method, you can modify
     * aspects of the document using the SetInfo method.Different types of object support different types of properties.
     * For more detailed information, see the PDF
     * Objects section of this document.PDF objects are case-sensitive, so be sure you use the correct case. 
     * @param int $ID The Object ID of the object to be modified.
     * @param string $Type The type of value to insert.
     * @param string $Value The value to insert.
     */
    public function SetInfo(int $ID, string $Type, string $Value): void
    {
        parent::SetInfo($ID, $Type, $Value);
    }
}
