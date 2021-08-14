<!DOCTYPE html>
<html>
<head>
    <title>{{ config('larapage.app') }} | Show Items</title>
</head>
<body>

<h2>Show Items</h2>

<a href="{{ route('larapage.add') }}" title="Add Item">Add new Item</a>

@foreach($items as $item)
    <p><b>{{ $item->id }}:</b> <a href="{{ route('larapage.edit', ['item_id' => $item->id]) }}" title="Edit Item">{{ $item->field }}</a></p>
@endforeach

</body>
</html>
