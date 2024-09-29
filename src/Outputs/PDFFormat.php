<?php

namespace App\Outputs;

use App\Outputs\ProfileFormatter;
use Fpdf\Fpdf;

class PDFFormat implements ProfileFormatter
{
    private $pdf;

    public function setData($profile)
    {
        $this->pdf = new Fpdf();
        $this->pdf->AddPage();

        // Title
        $this->pdf->SetFont('Arial', 'B', 16);
        $this->pdf->Cell(0, 10, 'The Founder', 0, 1, 'C');

        // Image
        $imageUrl = 'https://www.auf.edu.ph/home/images/articles/bya.jpg';
        $this->pdf->Image($imageUrl, 75, 30, 60); 
        $this->pdf->Ln(90); 

        // Name
        $this->pdf->SetFont('Arial', 'I', 14);
        $this->pdf->Cell(0, 10, 'Dr. Barbara Yap Angeles', 0, 1, 'C');
        $this->pdf->Ln(10); 

        // Her Story
        $this->pdf->SetFont('Arial', '', 12);
        $this->pdf->MultiCell(0, 10, '' . $profile->getStory());
    }

    public function render()
    {
        return $this->pdf->Output();
    }
}
