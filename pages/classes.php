<?php
    session_start();
    class Coach
    {
        private $ID;
        private $Name;
        private $Mail;
        private $Pass;
        private $Mobile;
        private $Height;
        private $search;

        # ID
        public function setID($ID)
        {
            $this->ID = $ID;
        }
        public function getID()
        {
            return $this->ID;
        }

        # Name
        public function setName($Name)
        {
            $this->Name = $Name;
        }
        public function getName()
        {
            return $this->Name;
        }

        # Mail
        public function setMail($Mail)
        {
            $this->Mail = $Mail;
        }
        public function getMail()
        {
            return $this->Mail;
        }

        # Password
        public function setPass($Pass)
        {
            $this->Pass = $Pass;
        }
        public function getPass()
        {
            return $this->Pass;
        }

        # Mobile
        public function setMobile($Mobile)
        {
            $this->Mobile = $Mobile;
        }
        public function getMobile()
        {
            return $this->Mobile;
        }

        # Height
        public function setHeight($Height)
        {
            $this->Height = $Height;
        }
        public function getHeight()
        {
            return $this->Height;
        }

        # Search
        public function setSearch($search)
        {
            $this->search = $search;
        }
        public function getSearch()
        {
            return $this->search;
        }

        // Login Coach
        public function coachLogin()
        {
            (@include("db_connection.php")) or die("this file is not found");

            $mail = $this->getMail();
            $pass = $this->getPass();
            $sql = "SELECT * FROM coach WHERE Mail='$mail' AND Password='$pass'";

            $result = mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) == 0){
                (@header('location: ../login.php?error=1')) or die ("this file is not found");
            } else {
                while ($rows = mysqli_fetch_assoc($result)) {
                    $this->setID($rows['ID']);
                    $this->setName($rows['Full_Name']);
                    $this->setMail($rows['Mail']);
                    $this->setPass($rows['Password']);
                    $this->setMobile($rows['Mobile']);
                    $this->setHeight($rows['Height']);                    
                }
            }
            return true;
        }

        // Add Coach
        public function addCoach()
        {
            (@include("db_connection.php")) or die("this file is not found");

            $name = strtolower($this->getName());
            $mail = $this->getMail();
            $pass = $this->getPass();
            $mobile = $this->getMobile();
            $Height = $this->getHeight();

            $sql_t = "SELECT ID FROM coach where LOWER(Full_Name)='$name';";
            $result_t = mysqli_query($connection, $sql_t);

            if(mysqli_num_rows($result_t) > 0){?>
                <span class="alert alert-danger">There is Coach With This Name! :)</span><?php
            } else {
                $sql = "INSERT INTO coach (Full_Name, Mail, Password, Mobile, Height)
                        VALUES ('$name', '$mail', '$pass', '$mobile', $Height);";

                if (mysqli_query($connection, $sql)) {?>
                    <span class="alert alert-success"><?php echo ucfirst($name); ?> Added Successfully</span><?php
                } else {?>
                    <span class="alert alert-danger">Added Failed</span><?php
                }
            }
        }

        // Update Coach
        public function updateCoach()
        {
            (@include("db_connection.php")) or die("this file is not found");

            $name = strtolower($this->getName());
            $mail = $this->getMail();
            $mobile = $this->getMobile();
            $Height = $this->getHeight();

            $sql = "SELECT Mail, Mobile, Height FROM coach where LOWER(Full_Name)='$name';";
            $result = mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) == 0){?>
                <span class="alert alert-danger">There is No Coach With This Name! :)</span><?php
            } else {
                while ($rows = mysqli_fetch_assoc($result)) {
                    if ($mail == "") {
                        $mail = $rows["Mail"];
                    }
                    if ($mobile == "") {
                        $mobile = $rows['Mobile'];
                    }
                    if ($Height == "") {
                        $Height = $rows['Height'];
                    }
                }

                $sql_U = "UPDATE coach 
                    SET Mail='$mail', Mobile='$mobile', Height='$Height'
                    WHERE LOWER(Full_Name)='$name';";

                if (mysqli_query($connection, $sql_U)) {?>
                    <span class="alert alert-success"><?php echo ucfirst($name); ?> Updated Successfully</span><?php
                } else {?>
                    <span class="alert alert-danger">Updated Failed</span><?php
                }
            }
        }

        // Delete Coach
        public function deleteCoach()
        {
            (@include("db_connection.php")) or die("this file is not found");
            $name = strtolower($this->getName());
            if ($name != "admin") {
                $sql = "SELECT ID FROM coach where LOWER(Full_Name)='$name';";
                $res = mysqli_query($connection, $sql);
                if (mysqli_num_rows($res) == 0) {?>
                    <span class="alert alert-danger">Deleted Failed. There is No Coach With This Name! :)</span> <?php
                } else {
                    $row = mysqli_fetch_assoc($res);
                    $idCoach = $row["ID"];
                    $sql_e = "SELECT Coach_ID FROM player, coach where Coach_ID = '$idCoach' AND LOWER(coach.Full_Name)='$name';";
                    $res_e = mysqli_query($connection, $sql_e);
                    if (mysqli_num_rows($res_e) > 0) {?>
                        <span class="alert alert-danger">Deleted Failed. This Coach Has players With Him! :)</span><?php
                    } else {
                        $sql_d = "DELETE FROM coach where NOT EXISTS(SELECT Coach_ID FROM player where Coach_ID = coach.ID) and LOWER(Full_Name)='$name';";
                        if (mysqli_query($connection, $sql_d)) {?>
                            <span class="alert alert-success"><?php echo ucfirst($name); ?> Deleted Successfully</span><?php
                        } else {?>
                            <span class="alert alert-danger">Deleted Failed</span><?php
                        }
                    }
                }
            } else {?>
                <span class="alert alert-danger">Deleted Failed. We Can Not Delete This Coach! :)</span><?php
            }
        }

        // Display All Coaches
        public function DisplayCoach()
        {
            (@include("db_connection.php")) or die("this file is not found");

            $sql = "SELECT * FROM Coach;";
            $result = mysqli_query($connection, $sql);?>
            <tr>
                <th>Coach Name</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Height</th>
                <th>no. player</th>
            </tr><?php
            if (mysqli_num_rows($result) == 0) {?>
                <tr class="none"><td colspan="5">There no such a coach.</td></tr><?php
            } else {
                while ($rows = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo ucfirst($rows["Full_Name"]); ?></td>
                        <td><?php
                            if ($rows["Full_Name"] == "Admin") {
                                $rows["Mail"] = "Private";
                            }
                            echo $rows["Mail"];
                        ?></td>
                        <td><?php echo  0 . $rows["Mobile"]; ?></td>
                        <td><?php echo $rows["Height"]; ?></td>
                        <?php
                            $idCoach = $rows["ID"];
                            $count = 0;
                            $sql_c = "SELECT ID FROM player where Coach_ID='$idCoach';";
                            $res = mysqli_query($connection, $sql_c);

                            if (mysqli_num_rows($res) == 0) {?>
                                <td>0</td> <?php
                            } else {
                                while ($rows = mysqli_fetch_assoc($res)) {
                                    $count++;
                                }?>
                                <td><?php echo $count ?></td><?php
                            }
                        ?>
                    </tr><?php
                }
            }
        }

        // Search Coach
        public function searchCoach()
        {
            (@include("db_connection.php")) or die("this file is not found");
            $q = $this->getSearch();
            $sql = "SELECT * FROM Coach WHERE Full_Name LIKE '%" .$q. "%' OR Mail LIKE '%" .$q. "' OR Mobile LIKE '%" .$q. "';";
            $result = mysqli_query($connection, $sql);?>
            <tr>
                <th>Coach Name</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Height</th>
                <th>no. player</th>
            </tr><?php
            if (mysqli_num_rows($result) == 0) {?>
                <tr class="none"><td colspan="5">There no such a coach.</td></tr><?php
            } else {
                while ($rows = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo ucfirst($rows["Full_Name"]); ?></td>
                        <td><?php
                            if ($rows["Full_Name"] == "Admin") {
                                $rows["Mail"] = "Private";
                            }
                            echo $rows["Mail"]; 
                        ?></td>
                        <td><?php echo  0 . $rows["Mobile"]; ?></td>
                        <td><?php echo $rows["Height"]; ?></td><?php
                            $idCoach = $rows["ID"];
                            $count;
                            $sql_c = "SELECT ID FROM player where Coach_ID='$idCoach';";
                            $res = mysqli_query($connection, $sql_c);

                            if (mysqli_num_rows($res) == 0) {?>
                                <td>0</td><?php
                            } else {
                                while ($rows = mysqli_fetch_assoc($res)) {
                                    $count++;
                                }?>
                                <td><?php echo $count; ?></td><?php
                            }?>
                    </tr><?php
                }
            }
        }
    }

    class Player
    {
        private $ID;
        private $Name;
        private $coachName;
        private $Mail;
        private $Mobile;
        private $DateOBirth;
        private $search;

        # ID
        public function setID($ID)
        {
            $this->ID = $ID;
        }
        public function getID()
        {
            return $this->ID;
        }

        # Name
        public function setName($Name)
        {
            $this->Name = $Name;
        }
        public function getName()
        {
            return $this->Name;
        }

        # Couch Name
        public function setCoachName($coachName)
        {
            $this->coachName = $coachName;
        }
        public function getCoachName()
        {
            return $this->coachName;
        }

        # Mail
        public function setMail($Mail)
        {
            $this->Mail = $Mail;
        }
        public function getMail()
        {
            return $this->Mail;
        }

        # Mobile
        public function setMobile($Mobile)
        {
            $this->Mobile = $Mobile;
        }
        public function getMobile()
        {
            return $this->Mobile;
        }

        # Date Of Birth
        public function setDateOBirth($DateOBirth)
        {
            $this->DateOBirth = $DateOBirth;
        }
        public function getDateOBirth()
        {
            return $this->DateOBirth;
        }

        # Search
        public function setSearch($search)
        {
            $this->search = $search;
        }
        public function getSearch()
        {
            return $this->search;
        }

        // Add Player
        public function addPlayer()
        {
            (@include("db_connection.php")) or die("this file is not found");

            $name = strtolower($this->getName());
            $coachName = strtolower($this->getCoachName());
            $mail = $this->getMail();
            $mobile = $this->getMobile();
            $DateOBirth = $this->getDateOBirth();

            $sql_t = "SELECT ID FROM player where LOWER(Full_Name)='$name';";
            $result_t = mysqli_query($connection, $sql_t);

            if(mysqli_num_rows($result_t) > 0){?>
                <span class="alert alert-danger">There is Player With This Name! :)</span><?php
            } else {
                $sql_id = "SELECT ID FROM coach where LOWER(Full_Name)='$coachName';";
                $result_id = mysqli_query($connection, $sql_id);
                if (mysqli_num_rows($result_id) <= 0) {?>
                    <span class="alert alert-danger">There is No Coach With This Name! :)</span><?php
                } else {
                    $row = mysqli_fetch_assoc($result_id);
                    $coach_id = $row["ID"];
                    $sql = "INSERT INTO player (Coach_ID, Full_Name, Mail, Mobile, Date_O_Birth)
                            VALUES ('$coach_id', '$name', '$mail', '$mobile', $DateOBirth);";

                    if (mysqli_query($connection, $sql)) {?>
                        <span class="alert alert-success"><?php echo ucfirst($name); ?> Added Successfully</span><?php
                    } else {?>
                        <span class="alert alert-danger">Added Failed</span><?php
                    }
                }
            }
        }

        // Update Player
        public function updatePlayer()
        {
            (@include("db_connection.php")) or die("this file is not found");

            $name = strtolower($this->getName());
            $coach = strtolower($this->getCoachName());
            $mail = $this->getMail();
            $mobile = $this->getMobile();
            $DateOBirth = $this->getDateOBirth();

            $sql = "SELECT * FROM player where LOWER(Full_Name)='$name';";
            $result = mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) <= 0){?>
                <span class="alert alert-danger">Updated Failed. There is No Player With This Name! :)</span><?php
            } else {
                while ($rows = mysqli_fetch_assoc($result)) {
                    if ($coach == "") {
                        $coach = $rows["Coach_ID"];
                    } else {
                        $sql_c = "SELECT ID FROM coach where LOWER(Full_Name)='$coach';";
                        $res_c = mysqli_query($connection, $sql_c);
                        if (mysqli_num_rows($res_c) <= 0) {?>
                            <span class="alert alert-danger">Updated Failed. There is No Coach Like This Name! :)</span><?php
                        } else {
                            $row = mysqli_fetch_assoc($res_c);
                            $coach = $row["ID"];
                            if ($mail == "") {
                                $mail = $rows["Mail"];
                            }
                            if ($mobile == "") {
                                $mobile = $rows['Mobile'];
                            }
                            if ($DateOBirth == "") {
                                $DateOBirth = $rows['Date_O_Birth'];
                            }
                            $sql_U = "UPDATE player
                                SET Coach_ID='$coach', Mail='$mail', Mobile='$mobile', Date_O_Birth='$DateOBirth'
                                WHERE LOWER(Full_Name)='$name';";

                            if (mysqli_query($connection, $sql_U)) {?>
                                <span class="alert alert-success"><?php echo ucfirst($name); ?> Updated Successfully</span><?php
                            } else {?>
                                <span class="alert alert-danger">Updated Failed</span><?php
                            }
                        }
                    }   
                }
            }           
        }

        // Delete Player
        public function deletePlayer()
        {
            (@include("db_connection.php")) or die("this file is not found");
            $name = strtolower($this->getName());
            $sql = "SELECT ID FROM coach where LOWER(Full_Name)='$name';";
            $res = mysqli_query($connection, $sql);
            if (mysqli_num_rows($res) == 0) {?>
                <span class="alert alert-danger">Deleted Failed. There is No Player With This Name! :)</span> <?php
            } else {
                $sql_d = "DELETE FROM player WHERE LOWER(Full_Name)='$name'";
                if (mysqli_query($connection, $sql_d)) {?>
                    <span class="alert alert-success"><?php echo ucfirst($name); ?> Deleted Successfully</span><?php
                } else {?>
                    <span class="alert alert-danger">Deleted Failed</span><?php
                }
            }
            
        }

        public function DisplayPlayer()
        {
            (@include("db_connection.php")) or die("this file is not found");

            $sql = "SELECT * FROM player;";
            $result = mysqli_query($connection, $sql);?>
            <tr>
                <th>Player Name</th>
                <th>Coach Name</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Date Of Birth</th>
            </tr><?php
            if (mysqli_num_rows($result) == 0) {?>
                <tr class="none"><td colspan="5">There no such a player.</td></tr> <?php
            } else {
                while ($rows = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo ucfirst($rows["Full_Name"]); ?></td><?php
                            $idCoach = $rows["Coach_ID"];
                            $sql_c = "SELECT Full_Name FROM coach where ID='$idCoach';";
                            $res = mysqli_query($connection, $sql_c);

                            if (mysqli_num_rows($res) == 0) {?>
                                <td>NULL</td><?php
                            } else {
                                $row = mysqli_fetch_assoc($res);?>
                                <td><?php echo ucfirst($row["Full_Name"]); ?></td><?php
                            }?>
                        <td><?php echo $rows["Mail"]; ?></td>
                        <td><?php echo  0 . $rows["Mobile"]; ?></td>
                        <td><?php echo $rows["Date_O_Birth"]; ?></td>
                    </tr><?php
                }
            }
        }

        // Search Player
        public function searchPlayer()
        {
            (@include("db_connection.php")) or die("this file is not found");
            $q = $this->getSearch();
            $sql = "SELECT * FROM player WHERE Full_Name LIKE '%" .$q. "%' OR Mail LIKE '%" .$q. "' OR Mobile LIKE '%" .$q. "%';";
            $result = mysqli_query($connection, $sql);?>
            <tr>
                <th>Player Name</th>
                <th>Coach Name</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Date Of Birth</th>
            </tr><?php
            if (mysqli_num_rows($result) == 0) {?>
                <tr class="none"><td colspan="5">There no such a player.</td></tr><?php
            } else {
                while ($rows = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo ucfirst($rows["Full_Name"]); ?></td><?php
                            $idCoach = $rows["Coach_ID"];
                            $sql_c = "SELECT Full_Name FROM coach where ID='$idCoach';";
                            $res = mysqli_query($connection, $sql_c);

                            if (mysqli_num_rows($res) == 0) {?>
                                <td>NULL</td><?php
                            } else {
                                $row = mysqli_fetch_assoc($res);?>
                                <td><?php echo ucfirst($row["Full_Name"]); ?></td><?php
                            }?>
                        <td><?php echo $rows["Mail"]; ?></td>
                        <td><?php echo  0 . $rows["Mobile"]; ?></td>
                        <td><?php echo $rows["Date_O_Birth"]; ?></td>
                    </tr><?php
                }
            }
        }
    }
    
?>