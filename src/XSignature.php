<?php

namespace ABCPdf;

/**
 * @property-read bool $IsTimeValid Whether the signature's certificate was
time-valid when the document was signed.
 * @property-read bool $IsTrusted Whether the signature's certificate is
trusted according to the validation policy.
 * @property string $TimestampServiceUrl The URL to a time-stamping
                        service.
 * @property-read bool $IsModified Whether the PDF has been modified after signing.
 * @property string $Location The location of the signing.
 * @property string $Reason The reason for signing.
 * @property string $Signer The name of the person signing.
 * @property Date $SigningUtcTime The time of signing in UTC format.
 * @property int $ValidationPolicy The validation policy for 
certificates.
 */

class XSignature extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XSignature',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('SigningUtcTime', new Date($this->getObject()->SigningUtcTime));
    }
    /**
     * After a signature is signed, it needs to be committed to the document. Normally, this is done when you save the document. 
     * It happens invisibly without you needing to do anything. However, sometimes, you may wish to commit before the document 
     * is saved. This most commonly occurs if you are working with documents containing more than one signature field. The 
     * PDF architecture requires that a document be incrementally updated each time a signature is signed. It requires this 
     * so that a PDF viewer can show what changes were made to the document between the times it was signed. For this reason, 
     * if you are signing multiple fields, each signature (bar the last) needs to be signed and then committed in turn. The 
     * last signature does not need to be committed because this is implicitly done by the final save. After each commit, 
     * all previous references to form fields would be invalidated. You need to obtain updated references to form fields 
     * from the Doc. Form. Fields property.                                                                              
     *
     *
     * @return void
     */
    public function Commit(): void
    {
        $this->__call('Commit', func_get_args());
    }

    /**
     * Use this method to extract the encoded X. 509 data of the certificate that was used to sign the document. Normally, 
     * there is only one certificate returned, but for some documents, you may receive additional certificates that can be 
     * used to create a certificate chain. In such cases, the first certificate is always the certificate that was used for 
     * signing. You can pass the data returned by this function to the X509Certificate2 class constructor in System. Security. 
     * Cryptography. X509Certificates (in .NET BCL) and then extract certificate details such as the subject, the issuer, 
     * the serial number, the version, etc. See the Annotations example project for details.                             
     *
     *
     * @return array The array of encoded X.509 data for the certificate(s).
     */
    public function GetCertificates(): array
    {
        return $this->__call('GetCertificates', func_get_args());
    }

    /**
     * Use this method to sign a signature field. In order to sign a signature, you need to use your private key. To authorize 
     * the use of this key, you need to provide your password. Typically, this password-protected private key is held in 
     * an PFX/PKCS #12 (.pfx or .p12) file. So to perform the signing operation, you provide a path to this file and a password 
     * to allow use of the private key. Time-stamped signatures can be produced by using the service of a Time Stamping Authority 
     * (TSA). See TimestampServiceUrl. If you are signing multiple signature fields in the same PDF document, you should 
     * call Commit manually after each signing operation bar the last operation. If the file is not available, if the file 
     * is invalid or if the password is incorrect, then this method will raise an error.                                 
     *
     * @param array|string $PathOrData The file path to or the data for the PFX/PKCS #12 (.pfx or .p12) file used for signing.
     * @param string $Password The password used to authorize use of the private key.
     *
     * @return void
     */
    public function Sign(array|string $PathOrData, string $Password): void
    {
        $this->__call('Sign', func_get_args());
    }

    /**
     * Signatures' certificates can only be validated by referencing certificates issued by certification authorities. This 
     * method allows you to check and validate the status of a signature with reference to a set of such certificates. Additionally, 
     * ABCpdf can also use certificates found in the Windows Certificate Store for validation. See ValidationPolicy for details. 
     * The certificates you provide will be cached at a document level so this method is efficient even when checking multiple 
     * signatures within one document. If you do not provide any parameter, this method will use the previously cached certificates 
     * to validate the document. Therefore, unless ValidationPolicy is set to EntireChainTrust, or certificates have been 
     * provided using a previous call to this method, calling this method without any certificate will cause an error to 
     * be raised to indicate that there is no certificate to validate against. ABCpdf does not currently do revocation checks 
     * on certificates provided and on certificates embedded in a PDF document. If you need to do this type of operation, 
     * you should use the GetCertificates method and check the certificates yourself. If a certificate is unavailable or 
     * invalid, this method may raise an error. This means validating against an unsigned signature field will cause an error 
     * to be raised. How does Adobe Reader validate a PDF document without certificate files?You may find that Adobe Reader 
     * does not need a list of certificate files to validate PDF documents. This is because Adobe Reader may use several 
     * built-in Public Key Infrastructure hierarchies to certify PDF documents:In order to validate a PDF document the same 
     * way Adobe Reader does, you need to use the same certificates it uses. This can be easily achieved by exporting the 
     * trusted identities from Adobe Reader to .cer format certificate files. (Note: CDS and AATL certificates are usually 
     * not in your Windows Certificate Store by default.)The Windows Certificate Store can be accessed by using System. Security. 
     * Cryptography. X509Certificates. X509Store (in .NET BCL).                                                          
     *
     * @param ?array $Certificates An array of file paths to or data for X.509 certificate (.cer) files.
     *
     * @return bool Whether the signature is valid.
     */
    public function Validate(?array $Certificates = null): bool
    {
        return $this->__call('Validate', func_get_args());
    }


}