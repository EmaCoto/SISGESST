<div>
    <div class="mb-2 border border-gray-100 rounded-lg bg-gray-100 focus-within:bg-green-500 focus-within:border-green-500 ease-in duration-300">
        <div class="flex items-center justify-between px-3 py-2">
            <div class="flex items-center sm:pr-4">
                <h1 class="font-semibold">CONTROLES ADMINISTRATIVOS, SEÑALIZACIÓN Y ADVERTENCIA</h1>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path fill="#FFC436" d="M256 32c-17.7 0-32 14.3-32 32v2.3 99.6c0 5.6-4.5 10.1-10.1 10.1c-3.6 0-7-1.9-8.8-5.1L157.1 87C83 123.5 32 199.8 32 288v64H544l0-66.4c-.9-87.2-51.7-162.4-125.1-198.6l-48 83.9c-1.8 3.2-5.2 5.1-8.8 5.1c-5.6 0-10.1-4.5-10.1-10.1V66.3 64c0-17.7-14.3-32-32-32H256zM16.6 384C7.4 384 0 391.4 0 400.6c0 4.7 2 9.2 5.8 11.9C27.5 428.4 111.8 480 288 480s260.5-51.6 282.2-67.5c3.8-2.8 5.8-7.2 5.8-11.9c0-9.2-7.4-16.6-16.6-16.6H16.6z"/>
            </svg>
        </div>
        <div class="px-4 py-2 bg-white rounded-b-lg">
            <textarea wire:model.defer="personalProtection" rows="5" class="resize-none block w-full px-0 text-sm text-gray-800 bg-white border-0 focus:ring-0" placeholder="write your thoughts here..."></textarea>
        </div>
    </div>
    @error('personalProtection') <span class="error text-red-500">{{ $message }}</span> @enderror
</div>
