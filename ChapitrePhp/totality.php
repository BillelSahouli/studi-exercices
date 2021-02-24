<?php
$orders = [
  [
    'username' => 'John',
    'purchases' => [
      [
        'product' => 'RAM 8GB',
        'price' => 99.99,
        'quantity' => 4
      ],
      [
        'product' => 'Motherboard',
        'price' => 124.99,
        'quantity' => 1
      ],
      [
        'product' => 'NVME M.2 500GB',
        'price' => 95.99,
        'quantity' => 2
      ],
    ]
  ],
  [
    'username' => 'Sarah',
    'purchases' => [
      [
        'product' => 'RAM 16GB',
        'price' => 158.99,
        'quantity' => 2
      ],
      [
        'product' => 'Motherboard',
        'price' => 89.99,
        'quantity' => 1
      ],
      [
        'product' => 'Disk Drive 2TB',
        'price' => 195.99,
        'quantity' => 1
      ],
    ]
  ],
];

$total = 0;
foreach ($orders as $order) {
  $userTotal = 0;
  foreach ($order['purchases'] as $purchase) {
    $userTotal += $purchase['price'] * $purchase['quantity'];
  }
  echo $order['username'].' : '.$userTotal.'€<br>';
  $total += $userTotal;
}

echo 'Total : '.$total.'€';