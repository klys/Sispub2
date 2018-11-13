<?php 
    require("/html2pdf/html2pdf.class.php");
    
    ob_start();
?>
<page>
    <table>
        <thead>
            <tr>
                <td>1h</td>
                <td>2h</td>
                <td>3h</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>algo</td>
                <td>algoasdsa</td>
                <td>afdf</td>
            </tr>
            <tr>
                <td>ffff</td>
                <td>hhhh</td>
                <td>4444</td>
            </tr>
        </tbody>
    </table>
</page>

<?php    
    $html = ob_get_clean();
    
    // convert to PDF
    try
    {
        $html2pdf = new HTML2PDF('P', 'letter', 'es');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $html2pdf->Output('reporte.pdf', 'I');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }    
    
    //print $html;
?>
