<!DOCTYPE html>
<html>
<head>
    <title>{{ config('larapage.app') }} | Create Item</title>
</head>
<body>

<h2>Create Item</h2>

<form method="post" action="{{ route('larapage.create') }}">
    @csrf
    <input type="text" placeholder="Field" value="{{ old('field') }}" name="field">
    <button type="submit">Submit</button>
</form>

</body>
</html>
