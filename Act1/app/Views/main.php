<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #404eed; /* Use a sports-themed background image */
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            padding: 20px;
            background-color: #333;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin: 20px;
        }

        label, input, select {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 98.5%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 97.5%;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 5px;
            background-color: #fff;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #333;
            color: #fff;
        }

        select#StudGender {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        
        }
        select#StudSection {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }
        select#StudCourse {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }select#StudYear {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

    </style>
</head>
<body>
<h1>Student Profile</h1>
<ul>
    <li>Read Carefully</li>
    <li>Complete All Fields</li>
    <li>Before Submit Review All Fields</li>
</ul>

    <form action="<?= base_url("save") ?>" method="post">
        <?php if(isset($rian['id'])){?>
            <input type="hidden" name="id" value="<?=$rian['id']?>">
        <?php }?>
        
        <label for="StudName">Name</label> 
        <input type="text" id="StudName" name="StudName" required value="<?= isset($rian['StudName']) ? $rian['StudName'] : '' ?>">
        
        <label for="StudGender">Gender</label>
        <select id="StudGender" name="StudGender" required>
            <option value="Male" <?= isset($rian['StudGender']) && $rian['StudGender'] === 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= isset($rian['StudGender']) && $rian['StudGender'] === 'Female' ? 'selected' : '' ?>>Female</option>
            <option value="Other" <?= isset($rian['StudGender']) && $rian['StudGender'] === 'Other' ? 'selected' : '' ?>>Other</option>
        </select>

        <label for="StudCourse">Course</label>
        <select id="StudCourse" name="StudCourse" required>
            <option value="BSIT" <?= isset($rian['StudCourse']) && $rian['StudCourse'] === 'BSIT' ? 'selected' : '' ?>>BSIT</option>
        </select>
        <label for="StudSection">Section</label>
        <select id="StudSection" name="StudSection" required>
            <option value="F1" <?= isset($rian['StudSection']) && $rian['StudSection'] === 'F1' ? 'selected' : '' ?>>F1</option>
            <option value="F2" <?= isset($rian['StudSection']) && $rian['StudSection'] === 'F2' ? 'selected' : '' ?>>F2</option>
            <option value="F3" <?= isset($rian['StudSection']) && $rian['StudSection'] === 'F3' ? 'selected' : '' ?>>F3</option>
            <option value="F4" <?= isset($rian['StudSection']) && $rian['StudSection'] === 'F4' ? 'selected' : '' ?>>F4</option>
            <option value="F5" <?= isset($rian['StudSection']) && $rian['StudSection'] === 'F5' ? 'selected' : '' ?>>F5</option>
            <option value="F6" <?= isset($rian['StudSection']) && $rian['StudSection'] === 'F6' ? 'selected' : '' ?>>F6</option>
        </select>
        <label for="StudYear">Year</label>
        <select id="StudYear" name="StudYear" required>
            <option value="First Year" <?= isset($rian['StudYear']) && $rian['StudYear'] === 'First Year' ? 'selected' : '' ?>>First Year</option>
            <option value="Second Year" <?= isset($rian['StudYear']) && $rian['StudYear'] === 'Second Year' ? 'selected' : '' ?>>Second Year</option>
            <option value="Third Year" <?= isset($rian['StudYear']) && $rian['StudYear'] === 'Third Year' ? 'selected' : '' ?>>Third Year</option>
            <option value="Fourth Year" <?= isset($rian['StudYear']) && $rian['StudYear'] === 'Fourth Year' ? 'selected' : '' ?>>Fourth Year</option>
        </select>
        <input type="submit" value="Save">
    </form>
    <table border="1">
        <th>Name</th>
        <th>Gender</th>
        <th>Course</th>
        <th>Section</th>
        <th>Year</th>
        <th>Action</th>
        <?php foreach ($main as $k): ?>
            <tr>
                <th><?=$k['StudName']?></th>
                <th><?=$k['StudGender']?></th>
                <th><?=$k['StudCourse']?></th>
                <th><?=$k['StudSection']?></th>
                <th><?=$k['StudYear']?></th>
                <th><a href="delete/<?= $k['id']?>">delete</a> <a href="/update/<?= $k['id']?>">edit</a></th>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>