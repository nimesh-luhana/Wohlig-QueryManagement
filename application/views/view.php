<div class="container"><table class="table tableborder">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LASTNAME</th>
            <th>ROLLNO</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($table as $row)
        {
    echo "<tr><td>$row->id</td><td>$row->name</td><td>$row->lastname</td><td>$row->rollno</td></tr>";
        }
        ?>
    </tbody>
</table>
</div>