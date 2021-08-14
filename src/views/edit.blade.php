<!DOCTYPE html>
<html>
<head>
    <title>{{ config('larapage.app') }} | Update Item</title>
</head>
<body>

<h2>Update Item</h2>

<form method="post" action="{{ route('larapage.update') }}">
    @csrf
    <input type="hidden" name="item_id" value="{{ $item->id }}">
    <input type="text" placeholder="Field" value="{{ old('field') ?? $item->field }}" name="field">
    <button type="submit">Submit</button>
</form>

</body>
</html>
