<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: grid;
        place-items: center;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        direction: rtl;
    }

    button {
        margin: 0px 0px 0px 160px;
        background-color: #5cb85c;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #4cae4c;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }
</style>



<h2><?php echo "البحث عن علامة طالب"; ?></h2>

<?php echo form_open('result'); ?>

<label for="name"> اسم الطالب </label>
<input type="text" name="name" value="<?php echo $name ?? '' ?>" /><br />

<button type="submit" name="search">
    النتيجة
</button>
</form>

<?php
if ($rows != null && $name != null):
?>
    <table>
        <tr>
            <th>الدرجة</th>
            <th>الاسم</th>
        </tr>
        <?php
        foreach ($rows as $row): ?>
            <tr>
                <td><?php echo $row->grade ?> </td>
                <td><?php echo $row->name ?> </td>
            </tr>

        <?php endforeach ?>
    </table>
<?php endif; ?>
