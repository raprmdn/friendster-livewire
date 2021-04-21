<div class="container">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <div class="flex">
        <div class="w-1/2">
            <div class="border border-gray-300 rounded-lg p-5">
                <livewire:status.block :status="$status" :key="$status->id" />
            </div>
        </div>
    </div>
</div>
