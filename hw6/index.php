<form action="server.php" method="post">
    <input type="text" name="number1">
    <select name="operation">
        <option value="sum">+</option>
        <option value="subs">-</option>
        <option value="mult">*</option>
        <option value="divis">/</option>
    </select>
    <input type="text" name="number2">
    <button type="submit">=</button>


    <h1><?php echo $_GET['result']; ?></h1>

</form>
