<div>
    <x-navbar-company :company="$company" />
    @livewire('processes.show-process', ['companyId' => $company->id])

    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
