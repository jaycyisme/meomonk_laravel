<?php
include_once("../Services/generalServices.php");


class AttributeServices
{
    public function view(): void
    {
        $generalServices = new generalServices();

        $result = $generalServices -> getAllName("ProductAttribute");

        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                echo "<option>" . $row["Name"] . "</option>";
            }
        }
    }
}

