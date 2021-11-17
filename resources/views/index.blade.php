<html>
<head>
</head>
<body>
    <h1>Hello</h1>
    <form action="{{ route('result') }}" method="post">
        <input type="text" name="cache">
        <label for="cache">キャッシュ</label>
    </form>
</body>
</html>