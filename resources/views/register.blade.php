<form action="/register" method="post">
    {{csrf_field()}}
    <label>Email: </label> <input id="email" name="email" type="email"/>
    <br>
    <label>user name: </label> <input id="userName" name="userName" type="text"/>
    <br>
    <label>Password: </label> <input id="password" name="password" type="password"/>
    <br>
    <input type="submit" value="Add"/>
</form>
