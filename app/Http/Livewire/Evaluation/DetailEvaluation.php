<?php

namespace App\Http\Livewire\Evaluation;

use Dompdf\Dompdf;
use Dompdf\Options;
use Livewire\Component;

class DetailEvaluation extends Component
{
    public $evaluations;
    public $openDetail = false;

    public function mount($evaluations)
    {
        $this->evaluations = $evaluations;
        $this->emit('evaluation', $this->evaluations);
    }

    public function downloadPdf()
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        $dompdf = new Dompdf($options);
        $html = view('livewire.evaluation.detail-evaluation')->render(); // Renderiza la vista del PDF
        $dompdf->loadHtml($html);

        // (Optional) Configura el tamaño y orientación del papel
        $dompdf->setPaper('A4', 'portrait');

        // Renderiza el PDF (este paso es necesario para que funcione la generación del PDF)
        $dompdf->render();

        // Descarga el PDF con un nombre específico
        $dompdf->stream('detalle_evaluacion.pdf', ['Attachment' => true]);
    }

    public function render()
    {
        return view('livewire.evaluation.detail-evaluation');
    }
}
