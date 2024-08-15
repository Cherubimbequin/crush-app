{{-- <div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div> --}}

<x-layout>
<div class="note-container" >
    <a href="{{route('note.create')}}" class="new-note-btn" >
New Note
    </a>
    <div class="notes" >
        @foreach ($notes as $note)
        <div class="note" >
            <div class="note-body" >
           {{ Str::words($note->note, 30) }}
            </div>
            <div class="note-buttons" >
            <a href="{{route('note.show', $note)}}" class="note-edit-button">View</a>
            <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
            <button href="{{route('note.destroy', $note)}}" class="note-edit-button">Delete</button>
            </div>
                    </div>
                </div>
        @endforeach
       
</div>
</x-layout>