<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>List of Members</title>
    <link rel="stylesheet" href="styles/list-members.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <div class="main">
        <div class="body-container">
            <!-- Actual Body Container -->
            <div class="content">
                <div class="add-btn"><a href="add-member.php" type="button">Add Member</a></div>
                <table class="table">
                    <tr>
                        <!-- <th><input type="checkbox"></th> -->
                        <th>Member ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Review Skill Set</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>1234</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STR, STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php"><button>Update</button></a></td>
                        <td class="del-btn"><a href="#"><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>3412</td>
                        <td>Peater</td>
                        <td>Parker</td>
                        <td>Scientist B</td>
                        <td>DSQA</td>
                        <td>STR, STD</td>
                        <td class="updt-btn"><a href="update-member.php"><button>Update</button></a></td>
                        <td class="del-btn"><a href="#"><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>2341</td>
                        <td>John</td>
                        <td>Paul</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php"><button>Update</button></a></td>
                        <td class="del-btn"><a href="#"><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>2143</td>
                        <td>Arther</td>
                        <td>Dane</td>
                        <td>Scientist B</td>
                        <td>DSQA</td>
                        <td>STR, STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php"><button>Update</button></a></td>
                        <td class="del-btn"><a href="#"><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>1324</td>
                        <td>John</td>
                        <td>Peater</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STR, STD</td>
                        <td class="updt-btn"><a href="update-member.php"><button>Update</button></a></td>
                        <td class="del-btn"><a href="#"><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>4231</td>
                        <td>Peater</td>
                        <td>Prabhakar</td>
                        <td>Scientist B</td>
                        <td>DSQA</td>
                        <td>STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php"><button>Update</button></a></td>
                        <td class="del-btn"><a href="#"><button>Delete</button></a></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="checkbox"></td> -->
                        <td>4321</td>
                        <td>John</td>
                        <td>Steaven</td>
                        <td>Scientist A</td>
                        <td>DSQA</td>
                        <td>STR, STD, SDD</td>
                        <td class="updt-btn"><a href="update-member.php"><button>Update</button></a></td>
                        <td class="del-btn"><a href="#"><button>Delete</button></a></td>
                    </tr>
                </table>
                <div class="pagination">
                    <a href="#" class="page-num">«</a>
                    <a href="#" class="page-num" style="background-color: skyblue">1</a>
                    <a href="#" class="page-num">2</a>
                    <a href="#" class="page-num">3</a>
                    <a href="#" class="page-num">4</a>
                    <a href="#" class="page-num">»</a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include_once "footer.php"?>
</html>