<?php

function goto_payform($cents)
{
	$response = request(
		"https://demo.ourspell.com/api/v1/purchases/",
		[
			'purchase' => [
				'products' => [
					[
						'name' => 'Maksājums par ceļojumu',
						'price' => $cents,
						'quantity' => 1,
					],
				],
			],
			'brand_id' => "fc7cafb7-e7ab-4243-8794-da8ed27494d8",
			'client' => [
				'email' => "fake@dhaskjdajkhdbskjhdkjdbnasdjkahbndkjisahbdsakjhdbaj.com",
			],
			'send_receipt' => false,
		]
	);

	header("Location: " . $response['checkout_url']);
}

function request($url, $params = [], $headers = [])
{
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER,
		[
			'Content-type: application/json',
			'Authorization: Bearer spell_demo$xuur2aohA/zq0Gh1Mqn0CzGA004tE/zl0fWL2bBkWNjsxHihlkvTUsI62Qm3XIUzY0UO88ctgcwrWDt8RIoCqg==',
		]);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));

	$json_response = curl_exec($curl);
	curl_close($curl);

	return json_decode($json_response, true);
}

goto_payform(30000);
