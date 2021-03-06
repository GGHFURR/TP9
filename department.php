<div class="p-4">
    <h1 class="text-2xl">Department Data</h1>
    <form action="processdepartment.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="Department_id">ID</label>
                </td>
                <td>
                    <input type="text" name="Department_id" id="Department_id" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Department_name">Name</label>
                </td>
                <td>
                    <input type="text" name="Department_name" id="Department_name" class="form-input mx-2 p-1 rounded-md">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Department_address">Address</label>
                </td>
                <td>
                    <input type="text" name="Department_address" id="Department_address" class="form-input mx-2 p-1 rounded-md">
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
            <th class="bg-ext3 border border-ext2 px-8 py-4">Address</th>
        </tr>
        <?php
        $db = new department();

        $data = $db->getDepartmentData();
        foreach ($data as $index => $item) {
            echo "<tr>" .
                "<td class='border border-ext2 py-2 px-4'>" . $item['department_id'] . "</td>" .
                "<td class='border border-ext2 py-2 px-4'>" . $item['department_name'] . "</td>" .
                "<td class='border border-ext2 py-2 px-4'>" . $item['department_address'] . "</td>" .
                "</tr>";
        }
        ?>
    </table>
</div>