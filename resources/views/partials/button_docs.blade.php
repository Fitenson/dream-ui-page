{{-- resources/views/partials/button_docs.blade.php --}}
<section id="button-docs" class="hidden">
    <x-dream-title level="3">Button</x-dream-title>
    
    <x-dream-text>Displays as a button or a button-like component.</x-dream-text>

@include('partials.preview_canvas', ['title' => 'Button Component'])

@section('preview')
    <x-button>Click Me</x-button>
@endsection

@section('code')
<x-button>Click Me</x-button>
@endsection

</section>
