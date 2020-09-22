<form action="index.php?c=register" method="post">
    <lable>Name</lable>
    <input type="text" name="frm[username]">
    <br/>
    <lable>lastname</lable>
    <input type="text" name="frm[lastname]">
    <br/>
    <lable>City</lable>
    <select name="frm[city]">
        <option value="1">Tehran</option>
        <option value="2">Esfahan</option>
        <option value="3">Shiraz</option>
    </select>
    <br/>
    <lable>password</lable>
    <input type="password" name="frm[password]">
    <br/>
    <input type="submit" name="btn">
</form>
