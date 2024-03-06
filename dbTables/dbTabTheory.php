<?php
    $tableName = "theory";
    $columns = ['id', '	theme', 'text', '	img', 'audio']; 

    $fetchData = fetch_data($conn, $tableName, $columns);

    function fetch_data($conn, $tableName, $columns)
    {
        $columnName = implode(", ", $columns);
        $query = "SELECT * FROM theory";
        $result = $conn->query($query);

        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    } ?>