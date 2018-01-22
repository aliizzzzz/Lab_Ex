<?php

    function print_genre_table() {

        global $connection;

        $query  = "SELECT c.name AS genre, COUNT(fc.film_id) AS ";
        $query .= "number_of_films FROM category c JOIN film_category fc ";
        $query .= "ON c.category_id = fc.category_id GROUP BY fc.category_id";

        $table_data = mysqli_query($connection, $query);
        if (!$table_data) {
            die("Database query failed!");
        }

        while ($table_info = mysqli_fetch_assoc($table_data)) {
            $output = "<tr>";

                foreach($table_info as $key => $data) {
                    $output .= "<td>" . $data . "</td>";
                }

            $output .= "</tr>\n";
            echo $output;

        }
    }
?>
