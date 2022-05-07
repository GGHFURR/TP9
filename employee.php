<div class="p-4">
    <h1 class="text-2xl">Employee Data</h1>
    <form action="processemployee.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="employe_id">ID</label>
                </td>
                <td>
                    <input type="text" name="employe_id" id="employe_id" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="employe_name">Name</label>
                </td>
                <td>
                    <input type="text" name="employe_name" id="employe_name" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="employe_department">Department</label>
                </td>
                <td>
                    <input type="text" name="employe_department" id="employe_department" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="employe_email">Address</label>
                </td>
                <td>
                    <input type="text" name="employe_email" id="employe_email" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="px-4 py-2 my-4 rounded-md shadow-xl bg-dark text-ext3 hover:bg-ext2 hover:text-dark" value="Save">
                </td>
            </tr>
        </table>
    </form>
    <br>
    <table class="table border-collapse table-auto">
        <tr>
            <th class="bg-ext3 border border-ext2 px-8 py-4">ID</th>
            <th class="bg-ext3 border border-ext2 px-8 py-4">Name</th>
            <th class="bg-ext3 border border-ext2 px-8 py-4">Department</th>
            <th class="bg-ext3 border border-ext2 px-8 py-4">Address</th>
        </tr>
        <?php
        $db = new employe();

        $hasil = $db->getEmployeeData();
        foreach ($hasil as $index => $item) {
            echo "<tr>" .
                "<td class='border border-ext2 py-2 px-4'>" . $item['employee_id'] . "</td>" .
                "<td class='border border-ext2 py-2 px-4'>" . $item['employee_name'] . "</td>" .
                "<td class='border border-ext2 py-2 px-4'>" . $item['employee_department'] . "</td>" .
                "<td class='border border-ext2 py-2 px-4'>" . $item['employee_email'] . "</td>" .
                "</tr>";
        }
        ?>
    </table>
</div>