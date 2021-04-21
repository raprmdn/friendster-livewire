<?php

namespace App\Http\Livewire\Status;

use App\Models\Timeline\Status;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Edit extends Component
{
    use AuthorizesRequests;
    public $status;
    public $body;

    public function mount($hash) 
    {
        $this->status = Status::where('hash', $hash)->firstOrFail();
        $this->body = $this->status->body;
    }

    public function updated($fields) 
    {
        $this->validateOnly($fields, [
            'body' => 'string|max:255'
        ]);
    }

    public function update() 
    {
        $this->validate([
            'body' => 'required|max:255'
        ]);

        $this->authorize('update', $this->status);
        $this->status->update([
            'body' => $this->body,
        ]);

        return redirect()->route('status.show', $this->status->hash);
    }

    public function render()
    {
        $this->authorize('update', $this->status);
        return view('livewire.status.edit');
    }
}
