<?php
require('fpdf.php');

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 15);
        $this->Image('watermark.png', 0, 0, 210, 300);
        $this->Image('logo-small.png', 10, 10, 10);
        $this->Cell(12);
        $this->Cell(100, 10, 'Viktator und Seppieee', 0, 1);
        $this->Ln(5);
    }
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . " / {pages}", 0, 0, 'C');
    }
}

$pdf = new PDF('P', 'mm', 'A4');
$pdf->AliasNbPages('{pages}');
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

$text = "An der HAK Imst, einer angesehenen Handelsakademie in Tirol, war die Nachricht über die bevorstehende Hochzeit von Viktator und Seppi in aller Munde. Es war der Tag, an dem Viktator, die in den letzten Jahren als charmante und kluge Schülerin der HAK Imst bekannt war, ihren langjährigen Freund Seppi heiratete – und es war mehr als nur ein gewöhnliches Ereignis. Es war ein Moment, der nicht nur ihre Herzen, sondern auch das ganze Schulumfeld ergriff.

Viktator, eine talentierte und ehrgeizige junge Frau, hatte ihre Zeit an der HAK Imst nie nur für das Lernen genutzt. Sie war bekannt für ihre Führungsqualitäten, die sich nicht nur in ihren schulischen Leistungen zeigten, sondern auch in der Art, wie sie in ihrer Klasse und darüber hinaus respektiert wurde. Seppi, ein bescheidener, aber genauso kluger und engagierter Schüler, hatte Viktator über die Jahre hinweg stets unterstützt, sowohl in akademischen Projekten als auch in persönlichen Belangen.

Die ganze Schule war aufgeregt. Die Lehrer und Schüler organisierten ein Fest, das der Hochzeit gerecht werden sollte. Ein großer Raum in der Aula war für die Feierlichkeiten geschmückt, und die Tische waren mit Blumen und Kerzen dekoriert. Die gesamte HAK Imst hatte sich darauf gefreut, diese zwei außergewöhnlichen Persönlichkeiten an ihrem besonderen Tag zu begleiten.

Die Zeremonie fand in der Schulkapelle statt, ein ruhiger Ort, der den perfekten Rahmen für das Eheversprechen bot. Als Viktator in einem eleganten, weißen Kleid und Seppi in seinem feinsten Anzug die Kapelle betrat, spürte jeder in der Umgebung die tiefe Verbundenheit zwischen den beiden. Die Schüler der HAK Imst hatten sogar ein kleines Musikstück vorbereitet, das die Stimmung noch emotionaler machte.

In ihrer Ansprache betonte Viktator, dass wahre Stärke nicht nur durch Wissen und Macht, sondern durch die Verbindung zu anderen und durch gegenseitige Unterstützung erworben wird. Seppi ergänzte ihre Worte mit einer kurzen, aber tiefgründigen Rede, in der er betonte, wie wichtig es für ihn sei, eine Partnerin wie Viktator zu haben – eine, die nicht nur mit ihm lernt, sondern ihn auch in jeder Lebenslage unterstützt und herausfordert.

Nach der Zeremonie wurde im Schulgebäude gefeiert. Es war ein Tag, der nicht nur von Liebe, sondern auch von Gemeinschaft und Zusammenhalt geprägt war. Die Schüler der HAK Imst freuten sich, dass sie bei diesem einzigartigen Moment dabei sein durften. Für Viktator und Seppi begann ein neues Kapitel, das nicht nur ihre Beziehung vertiefte, sondern auch eine symbolische Verbindung zur Gemeinschaft und dem Wertekanon ihrer Schule darstellte. Und so ging die Geschichte von Viktator und Seppi, der Hochzeit an der HAK Imst, als eine der schönsten Erinnerungen in die Schulgeschichte ein.";

$pdf->MultiCell(0, 10, $text);

$pdf->Image('Viktorheiraten.JPEG', 10, 160, 190, 125);

$pdf->Output();
?>
