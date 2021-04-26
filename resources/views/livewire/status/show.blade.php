<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <div class="p-4">
        <div class="border border-gray-300 rounded-lg p-5 mb-5">
            <livewire:status.block :status="$status" :key="$status->id" />
        </div>

        
        <livewire:comment.index :status="$status" :key="$status->id"/>
        @if (Auth::check() && !$status->comments_count)
            <livewire:comment.create :status="$status" :key="$status->id"/>
        @endif
    </div>

</div>
