<?php
$log = [
    [
        'no_order' => rand(100, 800000),
        'name' => 'Steve',
        'amount' => rand(0, 99999),
        'date' => date('M d, Y', mt_rand(1, time())),
        'status' => 'COMPLETED',
    ],
    [
        'no_order' => rand(100, 800000),
        'name' => 'Steve',
        'amount' => rand(0, 99999),
        'date' => date('M d, Y', mt_rand(1, time())),
        'status' => 'PENDING',
    ],
    [
        'no_order' => rand(100, 800000),
        'name' => 'Steve',
        'amount' => rand(0, 99999),
        'date' => date('M d, Y', mt_rand(1, time())),
        'status' => 'COMPLETED',
    ],
    [
        'no_order' => rand(100, 800000),
        'name' => 'Steve',
        'amount' => rand(0, 99999),
        'date' => date('M d, Y', mt_rand(1, time())),
        'status' => 'FAILED',
    ],
    [
        'no_order' => rand(100, 800000),
        'name' => 'Steve',
        'amount' => rand(0, 99999),
        'date' => date('M d, Y', mt_rand(1, time())),
        'status' => 'PENDING',
    ]
];

function datatable($data) {
    foreach ($data as $value) {
        echo "<tr>";
            echo "<td>".$value['no_order']."</td>";
            echo "<td>".$value['name']."</td>";
            echo "<td>".$value['amount']."</td>";
            echo "<td>".$value['date']."</td>";
            //if ($value['status'] == 'FAILED') {
            //	$status = 'label-danger';
            //} elseif ($value['status'] == 'PENDING') {
            //	$status = 'label-warning';
            //} else {
            //	$status = 'label-success';
            //}

            switch ($value['status']) {
                case 'COMPLETED';
                    $status = 'label-success';
                    break;
                case 'PENDING';
                    $status = 'label-warning';
                    break;
                case 'FAILED';
                    $status = 'label-danger';
                    break;
            };

            echo "<td><span class=\"label ".$status."\">".$value['status']."</span></td>";
        echo "</tr>";
    
    }
}

?>