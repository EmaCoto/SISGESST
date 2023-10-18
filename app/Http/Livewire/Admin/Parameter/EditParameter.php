<?php

namespace App\Http\Livewire\Admin\Parameter;

use App\Models\ConsequenceLevel;
use App\Models\DeficiencyLevel;
use App\Models\ExposureLevel;
use App\Models\InterventionRiskLevel;
use App\Models\ProbabilityLevel;
use App\Models\RiskAcceptability;
use Livewire\Component;

class EditParameter extends Component
{
    public $parameter, $dataQueries = [], $parameterName = [], $parameterPrefix = [], $parameterValue = [], $parameterMeaning = [];
    public $openParameter = false;

    public function mount($parameter)
    {
        $this->parameter = $parameter;

        if ($this->parameter === "deficiency") {
            $this->dataQueries = DeficiencyLevel::get();
        } elseif ($this->parameter === "exposure") {
            $this->dataQueries = ExposureLevel::get();
        } elseif ($this->parameter === "probability") {
            $this->dataQueries = ProbabilityLevel::get();
        } elseif ($this->parameter === "consequence") {
            $this->dataQueries = ConsequenceLevel::get();
        } elseif ($this->parameter === "risk") {
            $this->dataQueries = InterventionRiskLevel::get();
        } elseif ($this->parameter === "acceptability") {
            $this->dataQueries = RiskAcceptability::get();
        }
        
        foreach ($this->dataQueries as $query) {
            $this->parameterName[] = $query->name;
            $this->parameterPrefix[] = $query->prefix;
            $this->parameterValue[] = $query->value;
            $this->parameterMeaning[] = $query->meaning;
        }
    }

    public function saveParameter()
    {
        foreach ($this->dataQueries as $index => $query) {
            $query->name = $this->parameterName[$index];
            if(!empty($parameterPrefix[$index])){
                $query->prefix = $this->parameterPrefix[$index];
            }
            if(!empty($parameterValue[$index])){
                $query->value = $this->parameterValue[$index];
            }
            $query->meaning = $this->parameterMeaning[$index];
            $query->save();
        }
        $this->reset('openParameter');
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.admin.parameter.edit-parameter');
    }
}
