<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property-read int $Count The number of bookmarks in the collection.
 * @property bool $Open Whether the bookmark appears open or closed.
 * @property int $Page The Page ID for the page associated with this bookmark.
 * @property string $Title The bookmark title to be displayed on screen.
 */
class XBookmark extends \DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XBookmark',
        int    $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }

    /**
     * Use this method to add a new bookmark.A new bookmark is created and given the title specified. It is
     * added at the end of the collection, and the newly created bookmark
     * is returned.
     *
     * @param string $Title The title for the bookmark.
     *
     * @return XBookmark The bookmark added.
     */
    public function Add(string $Title): XBookmark
    {
        return parent::Add($Title);
    }

    /**
     * Use this method to move bookmarks within the bookmark hierarchy.The bookmark to be adopted is detached from the
     * bookmark hierarchy. Then it is added at the end of the bookmark collection for the current object.Some Adopt
     * operations are not possible. For example, a child cannot adopt its parent. In these cases, the field structure
     * will be left unchanged.
     *
     * @param XBookmark $Bookmark The bookmark to be adopted.
     */
    public function Adopt(XBookmark $Bookmark): void
    {
        parent::Adopt($Bookmark);
    }

    /**
     * Use this method to insert a new bookmark at a specified location.A new bookmark is created and given the title
     * specified. It is added at the specified location, and the newly created bookmark is returned.If the index is
     * greater than or equal to the number of items in the collection, then the bookmark is appended to the
     * end.Bookmarks that follow the insertion point move down to accommodate the new bookmark.
     *
     * @param int $Index The zero based index at which the bookmark should be inserted.
     * @param string $Title The title for the bookmark.
     *
     * @return XBookmark The bookmark added.
     */
    public function Insert(int $Index, string $Title): XBookmark
    {
        return parent::Insert($Index, $Title);
    }

    /**
     * Use this method to refresh and reload all children of this bookmark.When a bookmark is first referenced, the
     * bookmark data from the PDF is cached. This allows a level of optimization which would not otherwise be
     * possible.However, if you are using the low-level functionality to modify the bookmark structure, the cache will
     * not reflect your changes. In this situation, you can force the bookmarks to be reloaded by calling Refresh.
     */
    public function Refresh(): void
    {
        parent::Refresh();
    }

    /**
     * Use this method to remove the bookmark at the specified location.The bookmarks that follow the removed bookmark
     * move up to occupy the empty spot.
     *
     * @param int $Index The zero based index specifying the bookmark to be removed.
     */
    public function RemoveAt(int $Index): void
    {
        parent::RemoveAt($Index);
    }
}
