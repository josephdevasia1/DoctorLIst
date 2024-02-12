<?php

?>      
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    
    <link rel="stylesheet" type="text/css" href="style/admin.css">
</head>
<body>

<div class="container">
<div class="scroll">
    <form action="update.php" method="post">
        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>Medicine</h1>
                    <ul class="doctor-list">
                        <li><label for="medicine_MO">MO :</label> <input type="text" id="medicine_MO" name="medicine_MO"></li>
                        <li><label for="medicine_JR3">JR3 :</label> <input type="text" id="medicine_JR3" name="medicine_JR3"></li>
                        <li><label for="medicine_JR2">JR2 :</label> <input type="text" id="medicine_JR2" name="medicine_JR2"></li>
                        <li><label for="medicine_JR1">JR1 :</label> <input type="text" id="medicine_JR1" name="medicine_JR1"></li>
                        <li><label for="medicine_HS">HS :</label> <input type="text" id="medicine_HS" name="medicine_HS"></li>
                    </ul>
                </li>
                <li class="category">
                    <h1>Surgery</h1>
                    <ul class="doctor-list">
                        <li><label for="surgery_MO">MO :</label> <input type="text" id="surgery_MO" name="surgery_MO"></li>
                        <li><label for="surgery_JR3">JR3 :</label> <input type="text" id="surgery_JR3" name="surgery_JR3"></li>
                        <li><label for="surgery_JR2">JR2 :</label> <input type="text" id="surgery_JR2" name="surgery_JR2"></li>
                        <li><label for="surgery_JR1">JR1 :</label> <input type="text" id="surgery_JR1" name="surgery_JR1"></li>
                        <li><label for="surgery_HS">HS :</label> <input type="text" id="surgery_HS" name="surgery_HS"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>Orthopedics</h1>
                    <ul class="doctor-list">
                        <li><label for="orthopedics_MO">MO :</label> <input type="text" id="orthopedics_MO" name="orthopedics_MO"></li>
                        <li><label for="orthopedics_JR3">JR3 :</label> <input type="text" id="orthopedics_JR3" name="orthopedics_JR3"></li>
                        <li><label for="orthopedics_JR2">JR2 :</label> <input type="text" id="orthopedics_JR2" name="orthopedics_JR2"></li>
                        <li><label for="orthopedics_JR1">JR1 :</label> <input type="text" id="orthopedics_JR1" name="orthopedics_JR1"></li>
                        <li><label for="orthopedics_NAJR">NAJR :</label> <input type="text" id="orthopedics_NAJR" name="orthopedics_NAJR"></li>
                        <li><label for="orthopedics_HS">HS :</label> <input type="text" id="orthopedics_HS" name="orthopedics_HS"></li>
                    </ul>
                </li>
                <li class="category">
                    <h1>OMFS</h1>
                    <ul class="doctor-list">
                        <li><label for="omfs_MO">MO :</label> <input type="text" id="omfs_MO" name="omfs_MO"></li>
                        <li><label for="omfs_PG">PG :</label> <input type="text" id="omfs_PG" name="omfs_PG"></li>
                        <li><label for="omfs_HS">HS :</label> <input type="text" id="omfs_HS" name="omfs_HS"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>ENT</h1>
                    <ul class="doctor-list">
                        <li><label for="ent_MO">MO :</label> <input type="text" id="ent_MO" name="ent_MO"></li>
                        <li><label for="ent_PG">PG :</label> <input type="text" id="ent_PG" name="ent_PG"></li>
                        <li><label for="ent_HS">HS :</label> <input type="text" id="ent_HS" name="ent_HS"></li>
                    </ul>
                </li>
                <li class="category">
                    <h1>Red Zone</h1>
                    <ul class="doctor-list">
                        <li><label for="redzone_emergency_physician">Emergency Physician :</label> <input type="text" id="redzone_emergency_physician" name="redzone_emergency_physician"></li>
                        <li><label for="redzone_PG">PG :</label> <input type="text" id="redzone_PG" name="redzone_PG"></li>
                        <li><label for="redzone_HS">HS :</label> <input type="text" id="redzone_HS" name="redzone_HS"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="column">
            <ul class="category-list">
                <li class="category">
                    <h1>OPH</h1>
                    <ul class="doctor-list">
                        <li><label for="oph_MO">MO :</label> <input type="text" id="oph_MO" name="oph_MO"></li>
                        <li><label for="oph_PG">PG :</label> <input type="text" id="oph_PG" name="oph_PG"></li>
                        <li><label for="oph_HS">HS :</label> <input type="text" id="oph_HS" name="oph_HS"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <input type="submit" value="Submit" style="color: blue;">
    </form>
</div>
</div>
</body>
</html>