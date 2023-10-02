<div>
    <section>
        <article>
            <div class="mt-">
                <div class="flex flex-col justify-center">
                    <hr class="mt-6 w-10/12 m-auto h-1 my-4 border-0 to-gray-200 via-green-600 from-gray-200 bg-gradient-to-r ">
                    <h1 class="text-xl font-bold mb-10 m-auto">EVALUACIÓN DEL RIESGO</h1>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 gap-8">
                    @livewire('evaluation.options.first', ['deficiencyId' => $deficiencyId])
                    @livewire('evaluation.options.second', ['exposureId' => $exposureId])
                    @livewire('evaluation.options.third', [
                        'probabilityValue' => $probabilityValue,
                        'deficiencyId' => $deficiencyId,
                        'deficiencyValue' => $deficiencyValue,
                        'exposureId' => $exposureId,
                        'exposureValue' => $exposureValue,
                        ])
                    @livewire('evaluation.options.fourth', ['consequenceId' => $consequenceId])
                    @livewire('evaluation.options.fifth', [
                        'interventionValue' => $interventionValue,
                        'probabilityValue' => $probabilityValue,
                        'consequenceId' => $consequenceId,
                        'consequenceValue' => $consequenceValue,
                    ])
                    @livewire('evaluation.options.sixth', ['interventionName' => $interventionName])
                </div>
            </div>
        </article>
    </section>
</div>
