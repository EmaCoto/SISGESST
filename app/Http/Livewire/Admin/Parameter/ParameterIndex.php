<?php

namespace App\Http\Livewire\Admin\Parameter;

use App\Models\ConsequenceLevel;
use App\Models\DeficiencyLevel;
use App\Models\ExposureLevel;
use App\Models\InterventionRiskLevel;
use App\Models\ProbabilityLevel;
use App\Models\RiskAcceptability;
use Livewire\Component;

class ParameterIndex extends Component
{
    public $deficiencies, $exposures, $probabilities, $consequences, $risks, $acceptabilities;
    public $data = [];

    protected $listeners  = ['render'];

    public function mount()
    {
        $this->deficiencies = DeficiencyLevel::get();
        foreach ($this->deficiencies as $deficiency) {
            $this->data[] = $deficiency->value;
        }
        $this->exposures = ExposureLevel::get();
        $this->probabilities = ProbabilityLevel::get();
        $this->consequences = ConsequenceLevel::get();
        $this->risks = InterventionRiskLevel::get();
        $this->acceptabilities = RiskAcceptability::get();
    }
    public function render()
    {
        return view('livewire.admin.parameter.parameter-index');
    }
}
