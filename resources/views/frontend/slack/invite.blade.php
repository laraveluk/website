<form method="post">
    {{ csrf_field() }}
    <label>Email Address</label><input type="email" name="email" /><input type="submit" />
</form>