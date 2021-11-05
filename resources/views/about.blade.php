@forelse ($names as $name)
    <h2>the names is {{ $name }}</h2>
@empty
    <h2>There are no names</h2>
@endforelse
