<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property bool $Bold Whether to apply a synthetic bold effect.
 * @property float $CharSpacing The inter-character spacing.
 * @property float $Indent The first line of paragraph indent.
 * @property bool $Italic Whether to apply a synthetic italic effect.
 * @property float $Justification The horizontal justification factor.
 * @property float $LeftMargin The paragraph indent.
 * @property float $LineSpacing The inter-line spacing.
 * @property float $Outline The width of character outlining.
 * @property float $ParaSpacing The inter-paragraph spacing.
 * @property float $Size The current text size.
 * @property bool $Strike Whether to apply a strikethrough effect.
 * @property bool $Strike2 Whether to apply a double strikethrough effect.
 * @property string $String The text style as a string.
 * @property bool $Underline Whether to underline text.
 * @property float $WordSpacing The inter-word spacing.
 */

class XTextStyle extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XTextStyle',
        int $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('ComFactory', new ComFactory($this->getObject()->ComFactory));
    }

}