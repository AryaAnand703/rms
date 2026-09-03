<div class="fixed top-20 right-0 w-64 bg-blue-200 shadow-md p-4 rounded-l-lg overflow-y-auto max-h-[calc(100vh-6rem)] z-50">
    <h3 class="font-bold text-lg mb-3 text-gray-800 border-b border-blue-300 pb-2">Student List</h3>
    <table class="w-full text-left">
        <thead>
            <tr class="border-b border-blue-300 text-sm font-semibold text-gray-700">
                <th class="pb-1 px-1">Name</th>
                <th class="pb-1 px-1 text-right">Roll</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-blue-100">
            <?php
            $query = mysqli_query($connect, "SELECT * FROM reasult");
            if ($query) {
                while ($row = mysqli_fetch_array($query)) {
                    $id = $row["id"];
                    $name = $row['name'];
                    $roll = $row['roll'];
                    ?>
                    <tr class="hover:bg-blue-300/50 transition-colors">
                        <td class="py-1.5 px-1">
                            <a href="detailview.php?id=<?php echo $id; ?>" class="text-black font-semibold hover:text-blue-600 block text-sm">
                                <?php echo htmlspecialchars($name); ?>
                            </a>
                        </td>
                        <td class="py-1.5 px-1 text-right">
                            <a href="detailview.php?id=<?php echo $id; ?>" class="text-black hover:text-blue-600 block text-sm font-mono">
                                <?php echo htmlspecialchars($roll); ?>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
