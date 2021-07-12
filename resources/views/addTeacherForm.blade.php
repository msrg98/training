<form action="/insertTeacher" method="post">
    {{csrf_field()}}
    <label>name: </label> <input id="name" name="name" type="text"/>
    <br>
    <label>user name: </label> <input id="userName" name="userName" type="text"/>
    <br>
    <input type="submit" value="Add"/>
</form>
