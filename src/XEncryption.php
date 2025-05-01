<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property bool $CanAssemble Whether a user can assemble the document.
 * @property bool $CanChange Whether a user can modify the document.
 * @property bool $CanCopy Whether a user can copy from the document.
 * @property bool $CanEdit Whether a user can edit the document.
 * @property bool $CanExtract Whether a user can extract from the document.
 * @property bool $CanFillForms Whether a user can fill forms in the document.
 * @property bool $CanPrint Whether a user can print the document.
 * @property bool $CanPrintHi Whether a user can print a high-resolution copy of the document.
 * @property bool $EncryptMetadata Whether to encrypt the document metadata for encryption levels of type 4 or above.
 * @property string $OwnerPassword The owner password.
 * @property string $Password The user password.
 * @property-read int $StreamCryptionMethod The crypt method for streams for encryption levels of type 4 or above.
 * @property-read int $StringCryptionMethod The crypt method for strings for encryption levels of type 4 or above.
 * @property int $Type The level of encryption to use.
 */
class XEncryption extends \DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XEncryption',
        int    $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }

    /**
     * The default crypt method for Type
     * 4 is V2, which uses RC4 algorithm. Crypt method settings are in effect only when Type is 4 or higher.The
     * StringMethod and StreamMethod parameters can take any of the following values:Adobe Reader does not support
     * using more than one crypt method per document (i.e. stringMethod≠streamMethod). However, Identity is degenerate
     * and can be used with other crypt methods.
     *
     * @param int $StringMethod The crypt method for strings. It is also for streams if StreamMethod is missing.
     * @param int|null $StreamMethod The crypt method for streams (optional).
     */
    public function SetCryptMethods(int $StringMethod, int|null $StreamMethod = null): void
    {
        parent::SetCryptMethods($StringMethod, $StreamMethod);
    }
}
