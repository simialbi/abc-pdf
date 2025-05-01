<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property string $String The transform as a string.
 */
class XTransform extends \DOTNET
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        string $assembly_name = 'ABCpdf, Version=12.5.0.4, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XTransform',
        int    $codepage = CP_ACP
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);
    }

    /**
     * When you invert a transform, a rotation clockwise becomes an identical
     * rotation anti-clockwise. A translation to the left becomes a translation
     * to the right. A zoom in becomes a zoom out.Note that not every transform can be inverted. If you specify a
     * magnification of zero, you have shrunk your world space to a point.
     * In this case, it is not possible to invert the transform to get the
     * original back again. However, this kind of transform is uncommon
     * in the real world and normally only occurs as a result of programming
     * errors.If you apply the invert method to a non-invertable transform, the
     * transform will remain unmodified.
     */
    public function Invert(): void
    {
        parent::Invert();
    }

    /**
     * This method stretches the world space about a locked anchor point.
     * Different degrees of horizontal and vertical stretch can be used.Another way of looking at this kind of
     * transform is as a zoom. The anchor point is the location you're zooming in on and the scale factors indicate the
     * level of zoom.
     *
     * @param float $ScaleX The amount of horizontal scaling to apply.
     * @param float $ScaleY The amount of vertical scaling to apply.
     * @param float $AnchorX The horizontal coordinate about which the stretch should be
     * applied.
     * @param float $AnchorY The vertical coordinate about which the stretch should be
     * applied.
     */
    public function Magnify(float $ScaleX, float $ScaleY, float $AnchorX, float $AnchorY): void
    {
        parent::Magnify($ScaleX, $ScaleY, $AnchorX, $AnchorY);
    }

    /**
     * This method resets the transform to it's original state. This state
     * is known as the identity and indicates that no transformation will
     * be applied.
     */
    public function Reset(): void
    {
        parent::Reset();
    }

    /**
     * This method rotates the world space about a locked anchor point.
     * The angle is specified in degrees anti-clockwise.
     *
     * @param float $Angle The angle to rotate in degrees.
     * @param float $AnchorX The horizontal coordinate about which the rotation should
     * be applied.
     * @param float $AnchorY The vertical coordinate about which the rotation should be
     * applied.
     */
    public function Rotate(float $Angle, float $AnchorX, float $AnchorY): void
    {
        parent::Rotate($Angle, $AnchorX, $AnchorY);
    }

    /**
     * This method skews the world space about a locked anchor point.
     * Different degrees of horizontal and vertical stretch can be used.A skew or shear is a mathematical operation
     * which shifts points by an amount proportional to the distance from the anchor point. This shift is scaled by the
     * horizontal and vertical skew factors.
     *
     * @param float $SkewX The amount of horizontal skewing to apply.
     * @param float $SkewY The amount of vertical skewing to apply.
     * @param float $AnchorX The horizontal coordinate about which the stretch should be
     * applied.
     * @param float $AnchorY The vertical coordinate about which the stretch should be
     * applied.
     */
    public function Skew(float $SkewX, float $SkewY, float $AnchorX, float $AnchorY): void
    {
        parent::Skew($SkewX, $SkewY, $AnchorX, $AnchorY);
    }

    /**
     * This method shifts the world space a specified distance up and
     * to the right. Objects on the PDF will appear to translate upwards
     * and to the right.
     *
     * @param float $ShiftX The distance to translate to the right.
     * @param float $ShiftY The distance to translate upwards.
     */
    public function Translate(float $ShiftX, float $ShiftY): void
    {
        parent::Translate($ShiftX, $ShiftY);
    }
}
