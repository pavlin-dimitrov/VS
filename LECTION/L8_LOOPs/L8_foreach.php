<?php  
//Всеки цикъптрябва да има начало и край!
//FOREACH цикъл.
$arr_assoc = ['gosho' => '123456789',
			  'pesho' => '123456788',
			  'ivan' => '123456777',
			  'gosho1' => '123456789',
			  'pesho1' => '123456788',
			  'ivan1' => '123456777',
];
$arr = ['123-123-123', '321-321-321', '333-333-333',];

foreach ($arr_assoc as $key => $value) {
	echo 'Name: ' . $key . ' - phone: ' . $value . '</br>';
}

foreach ($arr as $key => $value) {
	echo 'Number: ' . $key . ' - phone: ' . $value . '</br>';
}
?>