<form method="POST" action="/insert">
    <input type="hidden" name="_token" value=<?=csrf_token()?>></br>
    <label>username</label>
    <input type="text" name="name"></br>
    <label>password</label>
    <input type="text" name="pwd"></br>
    <input type="submit" name="submit"></br>
</form>
