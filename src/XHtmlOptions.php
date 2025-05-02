<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property int $Engine The engine to use for HTML import operations.
 * @property bool $AddForms Whether form fields should be live.
 * @property bool $AddLinks Whether hyperlinks should be live.
 * @property bool $AddMovies Whether active content such as movies should be added.
 * @property bool $AddTags Whether location of certain tags should be noted.
 * @property bool $AutoTruncate Whether to automatically clip redundant content at the end
                  of the page.
 * @property int $BrowserWidth The width of the virtual browser in pixels.
 * @property int $ContentCount The minimum number of content items required for a page to
                  be valid.
 * @property bool $DoMarkup Whether HTML pages are marked up before conversion to PDF.
 * @property bool $FontEmbed Whether fonts should be embedded rather than referenced.
 * @property bool $FontProtection Whether fonts should be protected.
 * @property bool $FontSubstitute Whether font substitution should be used to reduce file size.
 * @property bool $HideBackground Whether to hide the background color of a page.
 * @property bool $HostWebBrowser Whether to host a WebBrowser control.
 * @property string $HttpAdditionalHeaders Additional HTTP headers to send in the request.
 * @property int $ImageQuality The quality of compression acceptable for continuous tone
                  images such as JPEGs.
 * @property string $LogonName A user name to be used for 
            authentication.
 * @property string $LogonPassword A password to be used for authentication.
 * @property bool $MakeFieldNamesUnique Whether field names should be changed to make them unique.
 * @property int $MaxAtomicImageSize The maximum size at which an image may be regarded as atomic.
 * @property int $Media The CSS media type to use.
 * @property bool $NoCookie Whether to disable automatic cookies.
 * @property string $OnLoadScript A script to be run after the page is loaded.
 * @property bool $PageCacheEnabled Whether the page cache should be searched before rendering
                  the page.
 * @property int $PageCacheExpiry The length of time that pages can be held in the cache (ms).
 * @property int $PageCacheSize The number of pages that can be held in the cache.
 * @property bool $Paged Whether content should be rendered in multipaged format.
 * @property int $PageLoadMethod The method for loading URI/HTML.
 * @property bool $ReloadPage Whether to reload page.
 * @property int $RepaintDelay Minimum time to wait for the page to finish animation (ms).
 * @property int $RepaintTimeout Maximum time to wait for the page to finish animation (ms).
 * @property int $RequestMethod The request method for URL.
 * @property int $RetryCount The number of times a page should be retried if unavailable
                  or invalid.
 * @property bool $TargetLinks Whether hyperlinks should be allowed to open new windows.
 * @property int $Timeout The maximum amount of time allowed for obtaining a page (ms).
 * @property int $TransferModule The module for obtaining URI/HTML data.
 * @property bool $UseActiveX Whether to enable ActiveX.
 * @property bool $UseJava Whether to enable Java.
 * @property bool $UseNoCache Whether any proxy servers should re-request items of content.
 * @property bool $UseResync Whether all items of content should be re-downloaded.
 * @property bool $UseScript Whether to enable JavaScript and VBScript.
 * @property int $UseTheme Whether to use theme or not.
 * @property bool $UseVideo Whether to enable video.
 */

class XHtmlOptions extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XHtmlOptions',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('ComFactory', new ComFactory($this->getObject()->ComFactory));
    }
    /**
     * Use this method to retrieve the client side onload script return value. The ID should be obtained from a call to Doc. 
     * AddImageUrl or Doc. AddImageHtml. See the OnLoadScript property for further details.                              
     *
     * @param int $ID The Object ID of the web page to be accessed.
     *
     * @return string The return value.
     */
    public function GetScriptReturn(int $ID): string
    {
        return $this->__call('GetScriptReturn', func_get_args());
    }

    /**
     * Use this method to retrieve the HTML IDs of tagged visible items. To use this method, you need to enable the tagging 
     * functionality. See the AddTags property for details. This method takes an ID obtained from a call to Doc. AddImageUrl, 
     * Doc. AddImageHtml or Doc. AddImageToChain and returns the IDs of any items which are visible on the PDF page as a 
     * result of that call. For example, the ID associated with the following paragraph is "p1".<p id="p1" style="abcpdf-tag-visible: 
     * true">Gallia est omnis divisa in partes tres.<p>The IDs may be repeated if the objects are split over more than one 
     * area. The IDs match up directly on a one-to-one basis with the XRects returned by the GetTagRects method.         
     *
     * @param int $ID The Object ID of the object.
     *
     * @return array The IDs of tagged visible HTML objects.
     */
    public function GetTagIDs(int $ID): array
    {
        return $this->__call('GetTagIDs', func_get_args());
    }

    /**
     * Use this method to retrieve the locations of tagged visible items. To use this method, you need to enable the tagging 
     * functionality. See the AddTags property for details. This method takes an ID obtained from a call to Doc. AddImageUrl, 
     * Doc. AddImageHtml or Doc. AddImageToChain and returns the locations of any items which are visible on the PDF page 
     * as a result of that call. The locations match up directly on a one-to-one basis with the IDs returned by the GetTagIDs 
     * method.                                                                                                           
     *
     * @param int $ID The Object ID of the object.
     *
     * @return array The location of tagged visible HTML objects.
     */
    public function GetTagRects(int $ID): array
    {
        return $this->__call('GetTagRects', func_get_args());
    }

    /**
     * This method scans the entire document converting external links to internal links wherever possible. By default, links 
     * in rendered HTML are preserved as is. This means that links in a web page link to external URLs. When you click on 
     * them, a browser window will be launched and the original target of the link displayed. In some situations, you may 
     * wish to resolve links within the document so that they take you between pages in the PDF rather than launching an 
     * external browser window. For example, you might add a number of web pages which contain links to each other. Rather 
     * than linking to the pages on the original web site, you might like to resolve the links so that they point at at the 
     * pages as they now appear in the PDF. Similarly, if you use named destinations (HTML fragments) with links within the 
     * document, you will may wish to use this method to convert them from external links to internal ones.              
     *
     *
     * @return void
     */
    public function LinkPages(): void
    {
        $this->__call('LinkPages', func_get_args());
    }

    /**
     * ABCpdf holds a cache of recently requested URLs, and it's only after five minutes or so that these pages expire from 
     * the cache. This results in a considerable degree of optimization for many common operations. You can clear the cache 
     * of all pages by calling this method.                                                                              
     *
     *
     * @return void
     */
    public function PageCacheClear(): void
    {
        $this->__call('PageCacheClear', func_get_args());
    }

    /**
     * ABCpdf holds a cache of recently requested URLs, and it's only after five minutes or so that these pages expire from 
     * the cache. This results in a considerable degree of optimization for many common operations. You can clear the cache 
     * of all expired pages by calling this method.                                                                      
     *
     *
     * @return void
     */
    public function PageCachePurge(): void
    {
        $this->__call('PageCachePurge', func_get_args());
    }


}