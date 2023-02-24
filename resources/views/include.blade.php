<h1>Include Hello Wordl</h1>

{{-- @include('components.component')
@include('components.component')
@include('components.component')
@include('components.component') --}}

{{-- @include('components.component', ['html' => '<h1>Componet1</h1>']) --}}

{{-- @component('components.component')
    <h1>Component 1 -HTML </h1>
    <p>Um texto qualquer</p>
@endcomponent --}}

@incluideIf('components.component1', ['html' => '<h1>Component1</h1>'])

@incluideWhen('components.component1', ['html' => '<h1>Component1</h1>'])

@incluideUnless('components.component1', ['html' => '<h1>Component1</h1>'])

@incluideFirst(['components.component2', 'components.component1'],
['html' => '<h1>Component1</h1>']
)
