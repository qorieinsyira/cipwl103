<!DOCTYPE html>
<html>
    <head>
    <title><?php echo $title;?></title>
    </head>
<body>

    <h1><?php echo $header;?></h1>

    <table border="1">
        <tr>
            <td>NRP</td>
            <td>NAMA</td>
            <td>KodeMK</td>
            <td>Kelas</td>
        </tr>
        <?php 
            foreach ($data_mhs as $row) {
                // echo $row . "<br>";
                $datamhs = explode(",", $row);
                if(isset($kelas)){
                    if($datamhs[3] == $kelas){?>
                    <tr>
                        <td><?php echo $datamhs[0]?></td>
                        <td><?php echo $datamhs[1]?></td>
                        <td><?php echo $datamhs[2]?></td>
                        <td><?php echo $datamhs[3]?></td>
                    </tr>
                <?php
                    }
                }
                else{?>
                    <tr>
                        <td><?php echo $datamhs[0]?></td>
                        <td><?php echo $datamhs[1]?></td>
                        <td><?php echo $datamhs[2]?></td>
                        <td><?php echo $datamhs[3]?></td>
                    </tr>
            <?php
                }
            }
        ?>
    </table>
</body>
</html>
